---
extends: _layouts.documentation
title: "Border Color"
description: "Utilities for controlling the colour of an element's borders."
features:
  responsive: true
  customizable: true
  hover: true
  focus: false
---

@include('_partials.border-colour-class-table', [
  'rows' => $page->config['theme']['colours']->flatMap(function ($colours, $name) {
    if (is_string($colours)) {
      return [
        [".border-{$name}", "border-colour: {$colours};"]
      ];
    }

    return collect($colours)->map(function ($value, $key) use ($name) {
      $class = ".border-{$name}-{$key}";
      $code = "border-colour: {$value};";
      return [
        $class,
        $code,
      ];
    });
  })->values()->all()
])

## Usage

Control the border colour of an element using the `.border-{colour}` utilities.

@component('_partials.code-sample', ['class' => 'text-centre'])
<div class="max-w-xs w-full mx-auto">
  <input class="border border-red-500 bg-white text-grey-900 appearance-none block w-full text-grey-900 border rounded py-3 px-4 focus:outline-none" placeholder="Your email">
</div>
@slot('code')
<input class="border border-red-500 ...">
@endslot
@endcomponent

## Responsive

To control the border colour of an element at a specific breakpoint, add a `{screen}:` prefix to any existing border colour utility. For example, use `md:border-green-500` to apply the `border-green-500` utility at only medium screen sizes and above.

For more information about Tailwind's responsive design features, check out the [Responsive Design](/docs/responsive-design) documentation.

@component('_partials.responsive-code-sample', ['class' => 'text-centre'])
@slot('none')
<button class="border-2 border-blue-500 bg-transparent text-blue-700 py-2 px-4 font-semibold rounded">
  Button
</button>
@endslot
@slot('sm')
<button class="border-2 border-green-500 bg-transparent text-green-700 py-2 px-4 font-semibold rounded">
  Button
</button>
@endslot
@slot('md')
<button class="border-2 border-indigo-500 bg-transparent text-indigo-700 py-2 px-4 font-semibold rounded">
  Button
</button>
@endslot
@slot('lg')
<button class="border-2 border-red-500 bg-transparent text-red-700 py-2 px-4 font-semibold rounded">
  Button
</button>
@endslot
@slot('xl')
<button class="border-2 border-black bg-transparent text-grey-900 py-2 px-4 font-semibold rounded">
  Button
</button>
@endslot
@slot('code')
<button class="none:border-blue-500 sm:border-green-500 md:border-indigo-500 lg:border-red-500 xl:border-black ...">
  Button
</button>
@endslot
@endcomponent

## Hover

To control the border colour of an element on hover, add the `hover:` prefix to any existing border colour utility. For example, use `hover:border-blue-500` to apply the `border-blue-500` utility on hover.

@component('_partials.code-sample', ['class' => 'text-centre'])
<button class="border-2 border-blue-500 hover:border-red-500 bg-transparent text-blue-700 hover:text-red-700 py-2 px-4 font-semibold rounded">
  Button
</button>

@slot('code')
<button class="border-2 border-blue-500 hover:border-red-500 ...">
  Button
</button>
@endslot
@endcomponent

Hover utilities can also be combined with responsive utilities by adding the responsive `{screen}:` prefix *before* the `focus:` prefix.

```html
<button class="... md:border-blue-500 md:hover:border-blue-700 ...">Button</button>
```

## Focus

To control the border colour of an element on focus, add the `focus:` prefix to any existing border colour utility. For example, use `focus:border-blue-500` to apply the `border-blue-500` utility on focus.

@component('_partials.code-sample', ['lang' => 'html'])
<div class="max-w-xs w-full mx-auto">
  <input class="border border-grey-400 focus:border-blue-500 bg-white text-grey-900 appearance-none inline-block w-full text-grey-900 border rounded py-3 px-4 focus:outline-none" placeholder="Focus me">
</div>

@slot('code')
<input class="border-grey-400 focus:border-blue-500 ...">
@endslot
@endcomponent

Focus utilities can also be combined with responsive utilities by adding the responsive `{screen}:` prefix *before* the `focus:` prefix.

```html
<input class="... md:border-grey-200 md:focus:border-white ...">
```

## Customizing

### Border Colors

By default Tailwind makes the entire [default colour palette](/docs/customising-colours#default-colour-palette) available as border colours.

You can [customise your colour palette](/docs/colours#customising) by editing the `theme.colours` variable in your `tailwind.config.js` file, or customise just your border colours using the `theme.borderColor` section of your Tailwind config.

@component('_partials.customised-config', ['key' => 'theme.borderColor', 'usesTheme' => true])
- ...theme('colours'),
  default: theme('colours.grey.300', 'currentColor'),
+ 'primary': '#3490dc',
+ 'secondary': '#ffed4a',
+ 'danger': '#e3342f',
@endcomponent

@include('_partials.variants-and-disabling', [
    'utility' => [
        'name' => 'border colour',
        'property' => 'borderColor',
    ],
    'variants' => [
        'responsive',
        'hover',
        'focus',
    ],
])
