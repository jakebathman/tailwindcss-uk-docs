---
extends: _layouts.documentation
title: "Width"
description: "Utilities for setting the width of an element"
features:
  responsive: true
  customizable: true
  hover: false
  focus: false
---

@include('_partials.class-table', [
  'scroll' => true,
  'rows' => $page->config['theme']['width']->map(function ($value, $name) {
    $class = ".w-{$name}";
    $code = "width: {$value};";
    $description = "Set the width of an element to <code>{$value}</code>.";
    return [$class, $code, $description];
  })
])

## Auto

Use `.w-auto` to let the browser calculate and select the width for the element.

@component('_partials.code-sample')
<div class="w-auto bg-grey-400 mb-4 px-2">.w-auto on block element</div>
<div class="w-auto inline-block bg-grey-400 px-2">.w-auto on inline-block element</div>
@slot('code')
<div class="w-auto ..."></div>
<div class="w-auto inline-block ..."></div>
@endslot
@endcomponent

## Screen Width

Use `.w-screen` to make an element span the entire width of the viewport.

@component('_partials.code-sample', ['class' => 'overflow-x-scroll'])
<div class="w-screen bg-grey-400 h-4"></div>
@endcomponent

## Fixed Width

Use `.w-{number}` or `.w-px` to set an element to a fixed width.

@component('_partials.code-sample')
@foreach (collect([0 => '0', 'px' => '1px'])->union($page->config['theme']['spacing']->except(['0', 'px'])) as $name => $width)
<div class="flex items-centre mb-1">
  <p class="text-sm text-grey-600 w-12 mr-2">.w-{{ $name }}</p>
  <div class="h-4 bg-grey-400 w-{{ $name }}"></div>
</div>
@endforeach
@slot('code')
@foreach (collect([0 => '0', 'px' => '1px'])->union($page->config['theme']['spacing']->except(['0', 'px'])) as $name => $width)
<div class="w-{{ $name }} ..."></div>
@endforeach
@endslot
@endcomponent

## Fluid Width

Use `.w-{fraction}` or `.w-full` to set an element to a percentage based width.

@component('_partials.code-sample')
<div class="bg-grey-200 p-4">
  <div class="flex mb-4">
    <div class="w-1/2 p-2 bg-grey-400 text-centre">.w-1/2</div>
    <div class="w-1/2 p-2 bg-grey-500 text-centre">.w-1/2</div>
  </div>
  <div class="flex mb-4">
    <div class="w-2/5 p-2 bg-grey-400 text-centre">.w-2/5</div>
    <div class="w-3/5 p-2 bg-grey-500 text-centre">.w-3/5</div>
  </div>
  <div class="flex mb-4">
    <div class="w-1/3 p-2 bg-grey-400 text-centre">.w-1/3</div>
    <div class="w-2/3 p-2 bg-grey-500 text-centre">.w-2/3</div>
  </div>
  <div class="flex mb-4">
    <div class="w-1/4 p-2 bg-grey-400 text-centre">.w-1/4</div>
    <div class="w-3/4 p-2 bg-grey-500 text-centre">.w-3/4</div>
  </div>
  <div class="flex mb-4">
    <div class="w-1/5 p-2 bg-grey-400 text-centre">.w-1/5</div>
    <div class="w-4/5 p-2 bg-grey-500 text-centre">.w-4/5</div>
  </div>
  <div class="flex mb-4">
    <div class="w-1/6 p-2 bg-grey-400 text-centre">.w-1/6</div>
    <div class="w-5/6 p-2 bg-grey-500 text-centre">.w-5/6</div>
  </div>
  <div class="w-full p-2 bg-grey-400 text-centre">.w-full</div>
</div>
@endcomponent

## Responsive

To control the width of an element at a specific breakpoint, add a `{screen}:` prefix to any existing width utility. For example, adding the class `md:w-full` to an element would apply the `w-full` utility at medium screen sizes and above.

For more information about Tailwind's responsive design features, check out the [Responsive Design](/docs/responsive-design) documentation.

@component('_partials.responsive-code-sample')
@slot('none')
<div class="bg-grey-400 p-4 text-centre">
  <div class="inline-block bg-grey-800 text-white p-2 truncate w-1/2">Responsive Element</div>
</div>
@endslot

@slot('sm')
<div class="bg-grey-400 p-4 text-centre">
  <div class="inline-block bg-grey-800 text-white p-2 truncate w-auto">Responsive Element</div>
</div>
@endslot

@slot('md')
<div class="bg-grey-400 p-4 text-centre">
  <div class="inline-block bg-grey-800 text-white p-2 truncate w-full">Responsive Element</div>
</div>
@endslot

@slot('lg')
<div class="bg-grey-400 p-4 text-centre">
  <div class="inline-block bg-grey-800 text-white p-2 truncate w-32">Responsive Element</div>
</div>
@endslot

@slot('xl')
<div class="bg-grey-400 p-4 text-centre">
  <div class="inline-block bg-grey-800 text-white p-2 truncate w-3/4">Responsive Element</div>
</div>
@endslot

@slot('code')
<div class="bg-grey-400 p-4 text-centre">
  <div class="none:w-1/2 sm:w-auto md:w-full lg:w-32 xl:w-3/4 ...">
    Responsive Element
  </div>
</div>
@endslot
@endcomponent

## Customizing

### Width scale

By default, Tailwind's width scale is a combination of the [default spacing scale](/docs/customising-spacing#default-spacing-scale) as well as some additional values specific to widths.

You can customise the spacing scale for padding, margin, width, and height all at once in the `theme.spacing` or `theme.extend.spacing` sections of your `tailwind.config.js` file:

@component('_partials.customised-config', ['key' => 'theme.extend.spacing'])
+ '72': '18rem',
+ '84': '21rem',
+ '96': '24rem',
@endcomponent

To customise width separately, use the `theme.width` section of your `tailwind.config.js` file.

@component('_partials.customised-config', ['key' => 'theme.extend.width'])
+ '1/7': '14.2857143%',
+ '2/7': '28.5714286%',
+ '3/7': '42.8571429%',
+ '4/7': '57.1428571%',
+ '5/7': '71.4285714%',
+ '6/7': '85.7142857%',
@endcomponent

Learn more about customising the default theme in the [theme customization documentation](/docs/theme#customising-the-default-theme).

@include('_partials.variants-and-disabling', [
    'utility' => [
        'name' => 'width',
        'property' => 'width',
    ],
    'variants' => [
        'responsive',
    ],
])
