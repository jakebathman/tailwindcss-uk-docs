---
extends: _layouts.documentation
title: "Background Color"
description: "Utilities for controlling an element's background colour."
features:
  responsive: true
  customizable: true
  hover: true
  focus: false
---

@include('_partials.background-colour-class-table', [
  'rows' => $page->config['theme']['colours']->flatMap(function ($colours, $name) {
    if (is_string($colours)) {
      return [
        [".bg-{$name}", "background-colour: {$colours};"]
      ];
    }

    return collect($colours)->map(function ($value, $key) use ($name) {
      $class = ".bg-{$name}-{$key}";
      $code = "background-colour: {$value};";
      return [
        $class,
        $code,
      ];
    });
  })->values()->all()
])

## Usage

Control the background colour of an element using the `.bg-{colour}` utilities.

@component('_partials.code-sample', ['class' => 'text-centre'])
<button type="button" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded">
  Button
</button>
@slot('code')
<button class="bg-blue-500 ...">Button</button>
@endslot
@endcomponent

## Responsive

To control the background colour of an element at a specific breakpoint, add a `{screen}:` prefix to any existing background colour utility. For example, use `md:bg-green-500` to apply the `bg-green-500` utility at only medium screen sizes and above.

For more information about Tailwind's responsive design features, check out the [Responsive Design](/docs/responsive-design) documentation.

@component('_partials.responsive-code-sample', ['class' => 'text-centre'])
@slot('none')
<button type="button" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded">
  Button
</button>
@endslot
@slot('sm')
<button type="button" class="bg-green-500 text-white font-semibold px-4 py-2 rounded">
  Button
</button>
@endslot
@slot('md')
<button type="button" class="bg-indigo-500 text-white font-semibold px-4 py-2 rounded">
  Button
</button>
@endslot
@slot('lg')
<button type="button" class="bg-red-500 text-white font-semibold px-4 py-2 rounded">
  Button
</button>
@endslot
@slot('xl')
<button type="button" class="bg-black text-white font-semibold px-4 py-2 rounded">
  Button
</button>
@endslot
@slot('code')
<button class="none:bg-blue-500 sm:bg-green-500 md:bg-indigo-500 lg:bg-red-500 xl:bg-black ...">Button</button>
@endslot
@endcomponent

## Hover

To control the background colour of an element on hover, add the `hover:` prefix to any existing background colour utility. For example, use `hover:bg-blue-500` to apply the `bg-blue-500` utility on hover.

@component('_partials.code-sample', ['class' => 'text-centre'])
<button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded">
  Hover me
</button>

@slot('code')
<button class="bg-blue-500 hover:bg-blue-700 ...">
  Hover me
</button>
@endslot
@endcomponent

Hover utilities can also be combined with responsive utilities by adding the responsive `{screen}:` prefix *before* the `focus:` prefix.

```html
<button class="... md:bg-blue-500 md:hover:bg-blue-700 ...">Button</button>
```

## Focus

To control the background colour of an element on focus, add the `focus:` prefix to any existing background colour utility. For example, use `focus:bg-blue-500` to apply the `bg-blue-500` utility on focus.

@component('_partials.code-sample', ['lang' => 'html'])
<div class="max-w-xs w-full mx-auto">
  <input class="border border-grey-400 bg-grey-200 focus:bg-white text-grey-900 appearance-none inline-block w-full border rounded py-3 px-4 focus:outline-none" placeholder="Focus me">
</div>

@slot('code')
<input class="bg-grey-200 focus:bg-white ...">
@endslot
@endcomponent

Focus utilities can also be combined with responsive utilities by adding the responsive `{screen}:` prefix *before* the `focus:` prefix.

```html
<input class="... md:bg-grey-200 md:focus:bg-white ...">
```

## Customizing

### Background Colors

By default Tailwind makes the entire [default colour palette](/docs/customising-colours#default-colour-palette) available as background colours.

You can [customise your colour palette](/docs/colours#customising) by editing the `theme.colours` variable in your `tailwind.config.js` file, or customise just your background colours using the `theme.backgroundColor` section of your Tailwind config.

@component('_partials.customised-config', ['key' => 'theme.backgroundColor', 'usesTheme' => true])
- ...theme('colours'),
+ 'primary': '#3490dc',
+ 'secondary': '#ffed4a',
+ 'danger': '#e3342f',
@endcomponent

@include('_partials.variants-and-disabling', [
    'utility' => [
        'name' => 'background colour',
        'property' => 'backgroundColor',
    ],
    'variants' => [
        'responsive',
        'hover',
        'focus'
    ],
])
