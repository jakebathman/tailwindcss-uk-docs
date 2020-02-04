---
extends: _layouts.documentation
title: "Customizing Colors"
description: "Customizing the default colour palette for your project."
titleBorder: true
---

<h2 style="font-size: 0" class="invisible m-0 -mb-6">Overview</h2>

The `theme.colours` section of your `tailwind.config.js` file allows you to override Tailwind's [default colour palette](#default-colour-palette).

```js
// tailwind.config.js
module.exports = {
  theme: {
    colours: {
      indigo: '#5c6ac4',
      blue: '#007ace',
      red: '#de3618',
    }
  }
}
```

By default these colours are automatically shared by the `textColor`, `borderColor`, and `backgroundColor` utilities, so the above configuration would generate classes like `.text-indigo`, `.border-blue`, and `.bg-red`.

### Nested object syntax

You can define your colours as a simple list of key-value pairs as we've done above, or using a nested object notation where the nested keys are added to the base colour name as modifiers:

```js
// tailwind.config.js
module.exports = {
  theme: {
    colours: {
      indigo: {
        lighter: '#b3bcf5',
        default: '#5c6ac4',
        dark: '#202e78',
      }
    }
  }
}
```

Like many other places in Tailwind, the `default` key is special and means "no modifier", so this configuration would generate classes like `.text-indigo-lighter`, `.text-indigo`, and `.text-indigo-dark`.

Note that you need to use dot notation to access nested colours when using the `theme()` function — the colours are only converted to dash-case for the actual CSS class names.

@component('_partials.tip-bad')
Don't use the dash syntax to access nested colour values with theme()
@endcomponent

```css
.btn-blue {
  background-colour: theme('colours.blue-500');
}
```

@component('_partials.tip-good')
Use dot notation to access nested colour values with theme()
@endcomponent

```css
.btn-blue {
  background-colour: theme('colours.blue.500');
}
```

---

## Overriding the default colour palette

As described in the [theme documentation](/docs/theme#overriding-the-default-theme), if you'd like to override the default colour palette, you can do so using the `theme.colours` section of your `tailwind.config.js` file:

```js
// tailwind.config.js
module.exports = {
  theme: {
    colours: {
      indigo: '#5c6ac4',
      blue: '#007ace',
      red: '#de3618',
    }
  }
}
```

This will disable Tailwind's default colour palette and generate classes like `bg-indigo`, `text-blue`, and `border-red` instead.

---

## Extending the default palette


As described in the [theme documentation](/docs/theme#extending-the-default-theme), if you'd like to extend the default colour palette, you can do so using the `theme.extend.colours` section of your `tailwind.config.js` file:

```js
// tailwind.config.js
module.exports = {
  theme: {
    extend: {
      colours: {
        'regal-blue': '#243c5a',
      }
    }
  }
}
```

This will generate classes like `bg-regal-blue` in addition to all of Tailwind's default colours.

---

## Overriding a default colour

If you'd like to override one of Tailwind's default colours but preserve the rest, simply provide the new values in the `theme.extend.colours` section of your `tailwind.config.js` file.

For example, here we've replaced the default cool greys with a neutral grey palette:

```js
// tailwind.config.js
module.exports = {
  theme: {
    extend: {
      colours: {
        grey: {
          '100': '#f5f5f5',
          '200': '#eeeeee',
          '300': '#e0e0e0',
          '400': '#bdbdbd',
          '500': '#9e9e9e',
          '600': '#757575',
          '700': '#616161',
          '800': '#424242',
          '900': '#212121',
        }
      }
    }
  }
}
```

### Overriding a single shade

Since values in the `theme.extend` section of your config file are only merged shallowly, overriding a single shade is slightly more complicated.

The easiest option is to import the default theme and [spread](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Spread_syntax) in the colour you want to customise along with the new shade value:

```js
// tailwind.config.js
const { colours } = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    extend: {
      colours: {
        blue: {
          ...colours.blue,
          '900': '#1e3656',
        }
      }
    }
  }
}
```

---

## Disabling a default colour

If you'd like to disable a default colour because you aren't using it in your project, the easiest approach is to just build a new colour palette that references the default theme.

For example, this `tailwind.config.js` file excludes teal, orange, and pink, but includes the rest of the default colours:

```js
// tailwind.config.js
const { colours } = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    colours: {
      black: colours.black,
      white: colours.white,
      grey: colours.grey,
      red: colours.red,
      yellow: colours.yellow,
      green: colours.green,
      blue: colours.blue,
      indigo: colours.indigo,
      purple: colours.purple,
    }
  }
}
```

You could also use [destructuring](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Destructuring_assignment) to simplify the above example if you're comfortable with it:

```js
// tailwind.config.js
const { colours: { teal, orange, pink, ...colours } } = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    colours: colours
  }
}
```

---

## Naming your colours

Tailwind uses literal colour names _(like red, green, etc.)_ and a numeric scale _(where 100 is light and 900 is dark)_ by default. This ends up being fairly practical for most projects, but there are good reasons to use other naming conventions as well.

For example, if you're working on a project that needs to support multiple themes, it might make sense to use more abstract names like `primary` and `secondary`:

```js
// tailwind.config.js
module.exports = {
  theme: {
    colours: {
      primary: '#5c6ac4',
      secondary: '#ecc94b',
      // ...
    }
  }
}
```

You can configure those colours explicitly like we have above, or you could even pull in Tailwind's default colours and alias the ones you need:

```js
// tailwind.config.js
const { colours } = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    colours: {
      primary: colours.indigo,
      secondary: colours.yellow,
      neutral: colours.grey,
    }
  }
}
```

You could even define these colours using CSS custom properties (variables) to make it easy to switch themes on the client:

```js
// tailwind.config.js
module.exports = {
  theme: {
    colours: {
      primary: 'var(--colour-primary)',
      secondary: 'var(--colour-secondary)',
      // ...
    }
  }
}
```

```css
/* In your CSS */
:root {
  --colour-primary: #5c6ac4;
  --colour-secondary: #ecc94b;
  /* ... */
}

@tailwind base;
@tailwind components;
@tailwind utilities;
```

---

## Generating custom colour palettes

A common question we get is "how do I generate the 100–900 shades of my own custom colours?".

Bad news: colour is complicated and we've yet to find a tool that does a good job generating these sorts of colour palettes. We picked all of Tailwind's default colours by hand, balancing them by eye. Sorry!

---

## Default colour palette

Tailwind includes a generous palette of great-looking, well-balanced colours that are perfect for prototyping or for kicking off a brand new project.

<div class="flex flex-wrap -mx-2 mt-0">
  <div class="px-2 w-full relative">
    <h3 class="markdown no-toc mb-4 mt-8">Black & White</h3>
    <div class="-mx-2 -mt-5 flex flex-wrap">
      <div class="w-1/2 md:w-1/3 px-2">
        <div class="flex items-centre mt-5">
          <div class="h-12 w-12 rounded-lg shadow-inner bg-black"></div>
          <div class="ml-2 text-grey-800 text-xs leading-none pl-1">
            <div class="font-semibold">Black</div>
            <div class="mt-1 font-normal opacity-75">#000000</div>
          </div>
        </div>
      </div>
      <div class="w-1/2 md:w-1/3 px-2">
        <div class="flex items-centre mt-5">
          <div class="h-12 w-12 rounded-lg shadow-inner bg-white"></div>
          <div class="ml-2 text-grey-800 text-xs leading-none pl-1">
            <div class="font-semibold">White</div>
            <div class="mt-1 font-normal opacity-75">#FFFFFF</div>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('_partials.colour-palette', [
  'colorName' => 'Gray',
  'colour' => 'grey',
  'breakpoint' => '500',
])

@include('_partials.colour-palette', [
  'colorName' => 'Red',
  'colour' => 'red',
  'breakpoint' => '500',
])

@include('_partials.colour-palette', [
  'colorName' => 'Orange',
  'colour' => 'orange',
  'breakpoint' => '500',
])

@include('_partials.colour-palette', [
  'colorName' => 'Yellow',
  'colour' => 'yellow',
  'breakpoint' => '500',
])

@include('_partials.colour-palette', [
  'colorName' => 'Green',
  'colour' => 'green',
  'breakpoint' => '400',
])

@include('_partials.colour-palette', [
  'colorName' => 'Teal',
  'colour' => 'teal',
  'breakpoint' => '400',
])

@include('_partials.colour-palette', [
  'colorName' => 'Blue',
  'colour' => 'blue',
  'breakpoint' => '400',
])

@include('_partials.colour-palette', [
  'colorName' => 'Indigo',
  'colour' => 'indigo',
  'breakpoint' => '400',
])

@include('_partials.colour-palette', [
  'colorName' => 'Purple',
  'colour' => 'purple',
  'breakpoint' => '400',
])

@include('_partials.colour-palette', [
  'colorName' => 'Pink',
  'colour' => 'pink',
  'breakpoint' => '400',
])
</div>
