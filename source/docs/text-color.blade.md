---
extends: _layouts.documentation
title: "Text Color"
description: "Utilities for controlling the text colour of an element."
features:
  responsive: true
  customizable: true
  hover: true
  focus: false
---

@include('_partials.text-colour-class-table', [
  'rows' => $page->config['theme']['colours']->flatMap(function ($colours, $name) {
    if (is_string($colours)) {
      return [
        [".text-{$name}", "colour: {$colours};"]
      ];
    }

    return collect($colours)->map(function ($value, $key) use ($name) {
      $class = ".text-{$name}-{$key}";
      $code = "colour: {$value};";
      return [
        $class,
        $code,
      ];
    });
  })->values()->all()
])

## Usage

Control the text colour of an element using the `.text-{colour}` utilities.

@component('_partials.code-sample', ['class' => 'text-centre'])

<div class="text-purple-600 text-xl truncate">
  The quick brown fox jumped over the lazy dog.
</div>
@slot('code')
<input class="text-purple-600 ...">
@endslot
@endcomponent

## Responsive

To control the text colour of an element at a specific breakpoint, add a `{screen}:` prefix to any existing text colour utility. For example, use `md:text-green-600` to apply the `text-green-600` utility at only medium screen sizes and above.

For more information about Tailwind's responsive design features, check out the [Responsive Design](/docs/responsive-design) documentation.

@component('_partials.responsive-code-sample', ['class' => 'text-centre'])
@slot('none')
<div class="text-blue-600 text-xl truncate">
  The quick brown fox jumped over the lazy dog.
</div>
@endslot
@slot('sm')
<div class="text-green-600 text-xl truncate">
  The quick brown fox jumped over the lazy dog.
</div>
@endslot
@slot('md')
<div class="text-indigo-600 text-xl truncate">
  The quick brown fox jumped over the lazy dog.
</div>
@endslot
@slot('lg')
<div class="text-red-600 text-xl truncate">
  The quick brown fox jumped over the lazy dog.
</div>
@endslot
@slot('xl')
<div class="text-grey-900 text-xl truncate">
  The quick brown fox jumped over the lazy dog.
</div>
@endslot
@slot('code')
<div class="none:text-blue-600 sm:text-green-600 md:text-indigo-600 lg:text-red-600 xl:text-grey-900 ...">
  The quick brown fox...
</div>
@endslot
@endcomponent

## Hover

To control the text colour of an element on hover, add the `hover:` prefix to any existing text colour utility. For example, use `hover:text-blue-600` to apply the `text-blue-600` utility on hover.

@component('_partials.code-sample', ['class' => 'text-centre'])
<button class="border-2 border-blue-500 hover:border-red-500 bg-transparent text-blue-600 hover:text-red-600 py-2 px-4 font-semibold rounded">
  Button
</button>

@slot('code')
<button class="text-blue-600 hover:text-red-600 ...">
  Button
</button>
@endslot
@endcomponent

Hover utilities can also be combined with responsive utilities by adding the responsive `{screen}:` prefix *before* the `hover:` prefix.

```html
<button class="... md:text-blue-500 md:hover:text-blue-600 ...">Button</button>
```

## Focus

To control the text colour of an element on focus, add the `focus:` prefix to any existing text colour utility. For example, use `focus:text-blue-600` to apply the `text-blue-600` utility on focus.

@component('_partials.code-sample', ['lang' => 'html'])
<div class="max-w-xs w-full mx-auto">
  <input class="border border-grey-400 focus:border-red-500 bg-white text-grey-900 appearance-none inline-block w-full focus:text-red-600 border rounded py-3 px-4 focus:outline-none" placeholder="Focus me" value="Focus me">
</div>

@slot('code')
<input class="text-grey-900 focus:text-red-600 ...">
@endslot
@endcomponent

Focus utilities can also be combined with responsive utilities by adding the responsive `{screen}:` prefix *before* the `focus:` prefix.

```html
<input class="... md:text-grey-900 md:focus:text-red-600 ...">
```

## Customizing

### Text Colors

By default Tailwind makes the entire [default colour palette](/docs/customising-colours#default-colour-palette) available as text colours.

You can [customise your colour palette](/docs/colours#customising) by editing `theme.colours` in your `tailwind.config.js` file, or customise just your text colours in the `theme.textColor` section.

@component('_partials.customised-config', ['key' => 'theme'])
- textColor: theme => theme('colours'),
+ textColor: {
+ &nbsp;&nbsp;'primary': '#3490dc',
+ &nbsp;&nbsp;'secondary': '#ffed4a',
+ &nbsp;&nbsp;'danger': '#e3342f',
+ }
@endcomponent

@include('_partials.variants-and-disabling', [
    'utility' => [
        'name' => 'text colour',
        'property' => 'textColor',
    ],
    'variants' => [
        'responsive',
        'hover',
        'focus',
    ],
])
