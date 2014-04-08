## Rules for (Base) Consistency

Styles which can be applied across multiple components, for example the color of a heading, are your base rules.


---------
## Write Down Your Base Rules

Design elements which are consistent from page-to-page.

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
$default: #666666; // darker grey
$heading: #999999; // ligher grey
$accent1st: #336666; // greenish

h1, h2, h3 {
  color: $heading;
  margin-bottom: 0;
}
````