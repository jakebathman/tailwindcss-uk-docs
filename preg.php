<?php

$text = file_get_contents('matches.tmp');

$matches = trim(preg_replace('/\s+-\s+([a-z]+):\s+details:\s+([a-z]+?)$/im', "$1::$2\n", $text));

$array = array_unique(explode("\n", $matches));

$replacements = [];
foreach ($array as $str) {
    $strings = explode('::', $str);
    $replacements[$strings[0]] = $strings[1];
}


ksort($replacements);
print_r("Replacing these words in ./source/docs:");
print_r($replacements);

$exceptions = [
  'drafts',
];

// iterate over files
$it = new RecursiveDirectoryIterator('./source/docs');
foreach (new RecursiveIteratorIterator($it) as $file) {
    if ($file->getExtension() == 'md') {
        echo "Replacing words in: " . $file->getRealPath() . "\n";
        foreach ($replacements as $american => $british) {
          $contents = file_get_contents($file->getRealPath());
            $new = preg_replace_callback(
                '/\b'.$american.'\b/',
                function ($matches) use ($british, $exceptions) {
                  if (in_array($matches[0], $exceptions)) {
                    return $matches[0];
                  }
                  echo "\n$british :: ".$matches[0]."\n";
                  echo "matchCase: ".matchCase($matches[0], $british);
                  echo "\n";

                  // @todo: check an exception list
                    return matchCase($british, $matches[0]);
                },
                $contents
            );
            // if ($contents != $new) {
            //   echo "new!\n";
            //   echo $new;
            //   die();
            // }
            file_put_contents($file->getRealPath(), $new);
          }

    }
}



function matchCase($new, $original)
{
    $functions = ['mb_strtolower', 'mb_strtoupper', 'ucfirst', 'ucwords'];

    foreach ($functions as $function) {
        if ($function($original) === $original) {
            return $function($new);
        }
    }

    return $new;
}
