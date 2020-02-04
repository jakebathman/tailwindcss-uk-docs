---
extends: _layouts.documentation
title: "Align Items"
description: "Utilities for controlling how flex items are positioned along a container's cross axis."
features:
  responsive: true
  customizable: false
  hover: false
  focus: false
---

@include('_partials.class-table', [
  'rows' => [
    [
      '.items-stretch',
      'align-items: stretch;',
      "Stretch items to fill the cross axis.",
    ],
    [
      '.items-start',
      'align-items: flex-start;',
      "Align items against the start of the cross axis.",
    ],
    [
      '.items-centre',
      'align-items: centre;',
      "Align items along the centre of the cross axis.",
    ],
    [
      '.items-end',
      'align-items: flex-end;',
      "Align items against the end of the cross axis.",
    ],
    [
      '.items-baseline',
      'align-items: baseline;',
      "Align the baselines of each item.",
    ],
  ]
])

## Stretch

Use `.items-stretch` to stretch items to fill the flex container's cross axis:

@component('_partials.code-sample')
<div class="flex items-stretch bg-grey-200 h-24">
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2">1</div>
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2">2</div>
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2">3</div>
</div>
@endcomponent

## Start

Use `.items-start` to align items to the start of the flex container's cross axis:

@component('_partials.code-sample')
<div class="flex items-start bg-grey-200 h-24">
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2">1</div>
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2">2</div>
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2">3</div>
</div>
@endcomponent

## Center

Use `.items-centre` to align items along the centre of the flex container's cross axis:

@component('_partials.code-sample')
<div class="flex items-centre bg-grey-200 h-24">
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2">1</div>
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2">2</div>
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2">3</div>
</div>
@endcomponent

## End

Use `.items-end` to align items to the end of the flex container's cross axis:

@component('_partials.code-sample')
<div class="flex items-end bg-grey-200 h-24">
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2">1</div>
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2">2</div>
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2">3</div>
</div>
@endcomponent

## Baseline

Use `.items-baseline` to align items along the flex container's cross axis such that all of their baselines align:

@component('_partials.code-sample')
<div class="flex items-baseline bg-grey-200 h-24">
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2 text-base">1</div>
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2 text-2xl">2</div>
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2 text-lg">3</div>
</div>
@endcomponent

## Responsive

To control the alignment of flex items at a specific breakpoint, add a `{screen}:` prefix to any existing utility class. For example, use `md:items-centre` to apply the `items-centre` utility at only medium screen sizes and above.

For more information about Tailwind's responsive design features, check out the [Responsive Design](/docs/responsive-design) documentation.

@component('_partials.responsive-code-sample')
@slot('none')
<div class="flex items-stretch bg-grey-200 h-24">
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2 text-base">1</div>
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2 text-2xl">2</div>
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2 text-lg">3</div>
</div>
@endslot
@slot('sm')
<div class="flex items-start bg-grey-200 h-24">
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2 text-base">1</div>
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2 text-2xl">2</div>
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2 text-lg">3</div>
</div>
@endslot
@slot('md')
<div class="flex items-centre bg-grey-200 h-24">
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2 text-base">1</div>
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2 text-2xl">2</div>
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2 text-lg">3</div>
</div>
@endslot
@slot('lg')
<div class="flex items-end bg-grey-200 h-24">
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2 text-base">1</div>
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2 text-2xl">2</div>
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2 text-lg">3</div>
</div>
@endslot
@slot('xl')
<div class="flex items-baseline bg-grey-200 h-24">
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2 text-base">1</div>
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2 text-2xl">2</div>
  <div class="flex-1 text-grey-700 text-centre bg-grey-400 px-4 py-2 m-2 text-lg">3</div>
</div>
@endslot
@slot('code')
<div class="none:items-stretch sm:items-start md:items-centre lg:items-end xl:items-baseline ...">
  <!-- ... -->
</div>
@endslot
@endcomponent

## Customizing

@include('_partials.variants-and-disabling', [
    'utility' => [
        'name' => 'align-items',
        'property' => 'alignItems',
    ],
    'variants' => [
        'responsive',
    ],
])
