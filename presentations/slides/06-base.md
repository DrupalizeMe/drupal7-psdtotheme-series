## Rules for (Base) Consistency

Styles which can be applied across multiple components, for example the color of a heading, are your base rules.


---------
## Sample Description of Base Rules

Describe elements which are consistent from page-to-page.

````
Colors:
- darker gray -- #666666 -- most text "default"
- lighter gray -- #999999 -- headings
- green ish -- #336666 -- primary accent colour
- brownish -- #996633 -- secondary accent colour
- font styling: mostly serif
(etc)
````

--------
## Sample Base Styles

Filename: ``base/_base.scss`` or ``_base.scss``

Sass content:

````
//colors
$darkergray: #666666;
$lightergray: #999999;

//type colors
$default: $darkergray;
$heading: $lightergray;

body, p, li, dd, td {
  color: $default;
}
h1, h2, h3 {
  color: $heading;
  margin-bottom: 0;
}
````

--------
## Activity

Write the base rules for your design. You may want to include:

- colors
- default fonts
- mixins for characteristics which are shared by multiple components

--------
## Activity Report

````
Colors:
- $green: #219b7d;
- $grey: #2a535e;
- $light-grey: #e5e5e5;
- $white: #fff;

Fonts:
- Sans-serif: Lato Regular

Mixins / Comment Elements:
- Inner shadown on form elements.
- Circle with pointer (comment bubble).
````

--------
## Summary

- Base styles provide the starting point for the rest of your theme.
- Typically they include HTML-element overrides for headings, and variable definitions, such as colors.
- Your base styles may also include external libraries, such as [Reset CSS](http://meyerweb.com/eric/tools/css/reset/index.html) or [normalize.css](http://necolas.github.io/normalize.css/).
