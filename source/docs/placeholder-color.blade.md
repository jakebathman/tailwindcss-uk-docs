---
extends: _layouts.documentation
title: "Placeholder Color"
description: "Utilities for controlling the colour of placeholder text."
---

@include('_partials.placeholder-colour-class-table', [
  'rows' => $page->config['theme']['colours']->flatMap(function ($colours, $name) {
    if (is_string($colours)) {
      return [
        [".placeholder-{$name}", "colour: {$colours};"]
      ];
    }

    return collect($colours)->map(function ($value, $key) use ($name) {
      $class = ".placeholder-{$name}-{$key}";
      $code = "colour: {$value};";
      return [
        $class,
        $code,
      ];
    });
  })->values()->all()
])

## Usage

Control the placeholder colour of an element using the `.placeholder-{colour}` utilities.

@component('_partials.code-sample', ['class' => 'text-centre p-6'])
<div class="max-w-xs">
  <input class="block appearance-none placeholder-grey-500 border rounded w-full py-2 px-3 text-grey-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="jane@example.com">
  <input class="mt-4 block appearance-none placeholder-red-300 border border-red-400 rounded w-full py-2 px-3 text-grey-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="jane@example.com">
</div>
@slot('code')
<input class="placeholder-grey-500 border" placeholder="jane@example.com">
<input class="placeholder-red-300 border border-red-400" placeholder="jane@example.com">
@endslot
@endcomponent

## Responsive

To control the text colour of an element at a specific breakpoint, add a `{screen}:` prefix to any existing text colour utility. For example, use `md:text-green-600` to apply the `text-green-600` utility at only medium screen sizes and above.

For more information about Tailwind's responsive design features, check out the [Responsive Design](/docs/responsive-design) documentation.

@component('_partials.responsive-code-sample', ['class' => 'text-centre'])
@slot('none')
<div class="max-w-xs mx-auto">
  <input class="block appearance-none placeholder-grey-500 border rounded w-full py-2 px-3 text-grey-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="jane@example.com">
</div>
@endslot
@slot('sm')
<div class="max-w-xs mx-auto">
  <input class="block appearance-none placeholder-red-400 border rounded w-full py-2 px-3 text-grey-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="jane@example.com">
</div>
@endslot
@slot('md')
<div class="max-w-xs mx-auto">
  <input class="block appearance-none placeholder-blue-400 border rounded w-full py-2 px-3 text-grey-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="jane@example.com">
</div>
@endslot
@slot('lg')
<div class="max-w-xs mx-auto">
  <input class="block appearance-none placeholder-green-400 border rounded w-full py-2 px-3 text-grey-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="jane@example.com">
</div>
@endslot
@slot('xl')
<div class="max-w-xs mx-auto">
  <input class="block appearance-none placeholder-orange-400 border rounded w-full py-2 px-3 text-grey-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="jane@example.com">
</div>
@endslot
@slot('code')
<input class="none:placeholder-grey-500 sm:placeholder-red-400 md:placeholder-blue-400 lg:placeholder-green-400 xl:placeholder-orange-400 " placeholder="jane@example.com">
@endslot
@endcomponent

## Focus

To control the placeholder colour of an element on focus, add the `focus:` prefix to any existing placeholder colour utility. For example, use `focus:placeholder-blue-600` to apply the `placeholder-blue-600` utility on focus.

@component('_partials.code-sample', ['class' => 'text-centre p-6'])
<div class="max-w-xs mx-auto">
  <input class="block appearance-none bg-grey-200 placeholder-grey-600 border border-transparent focus:border-grey-300 focus:bg-white focus:placeholder-grey-500 rounded w-full py-2 px-3 text-grey-700 leading-tight focus:outline-none" placeholder="jane@example.com">
</div>
@slot('code')
<input class="placeholder-grey-600 focus:placeholder-grey-500 ..." placeholder="jane@example.com">
@endslot
@endcomponent

Focus utilities can also be combined with responsive utilities by adding the responsive `{screen}:` prefix *before* the `focus:` prefix.

```html
<input class="... md:placeholder-grey-900 md:focus:placeholder-red-600 ...">
```

## Customizing

### Placeholder Colors

By default Tailwind makes the entire [default colour palette](/docs/customising-colours#default-colour-palette) available as placeholder colours.

You can [customise your colour palette](/docs/colours#customising) by editing `theme.colours` in your `tailwind.config.js` file, or customise just your placeholder colours in the `theme.textColor` section.

@component('_partials.customised-config', ['key' => 'theme'])
- placeholderColor: theme => theme('colours'),
+ placeholderColor: {
+ &nbsp;&nbsp;'primary': '#3490dc',
+ &nbsp;&nbsp;'secondary': '#ffed4a',
+ &nbsp;&nbsp;'danger': '#e3342f',
+ }
@endcomponent

@include('_partials.variants-and-disabling', [
    'utility' => [
        'name' => 'placeholder colour',
        'property' => 'placeholderColor',
    ],
    'variants' => [
        'responsive',
        'focus',
    ],
])
