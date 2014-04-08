## What We're Going to Talk About

1. What is component-based front end development
2. Sample pattern libraries
3. Converting a design to its components
4. Sample output style guides

---------------------------------------
## Slides, Resources, and more

https://github.com/DrupalizeMe/drupal7-psdtotheme-series

---------------------------------------
## Pro Tip
“Are you new to front-end web development? Here's a secret: no one else really knows what they're doing either.” 

Nicolas Gallagher

---------------------------------------
## ... but

Efficient front end developers have
a series of patterns in mind when they convert a design into a working web site.

<span class="fragment">This is how I do it.</span>

===============================================================================
## Pattern Libraries

Your web site is a collection of rendered component patterns.

---------------------------------------
## [pea.rs](http://pea.rs/)

<!-- .slide: data-background-image="assets/pears.png" -->
<!-- .slide: data-background-position="top left" -->
<!-- .slide: data-state="bgimage" -->

---------------------------------------
## [patternlab](http://patternlab.io/)

<!-- .slide: data-background-image="assets/patternlab.png" -->
<!-- .slide: data-background-position="top left" -->
<!-- .slide: data-state="bgimage" -->

---------------------------------------
## [Yahoo Design Pattern Library](http://developer.yahoo.com/ypatterns/)

<!-- .slide: data-background-image="assets/yahoo_design_patterns.png" -->
<!-- .slide: data-background-position="top left" -->
<!-- .slide: data-state="bgimage" -->

---------------------------------------
## [UI Design Patterns](http://ui-patterns.com/)

<!-- .slide: data-background-image="assets/uipatterns.png" -->
<!-- .slide: data-background-position="top left" -->
<!-- .slide: data-state="bgimage" -->

---------------------------------------
## Insert Your Patterns Here

<!-- .slide: data-background-image="assets/dme-library.png" -->
<!-- .slide: data-background-position="top left" -->
<!-- .slide: data-state="bgimage" -->

<img src="assets/dme-library.png" alt="Video page from Drupalize.Me Web site circa 2013" class="noshow" />

===============================================================================
## Applying Patterns

---------------------------------------
## Use Established Conventions

Frameworks allow us to quickly apply conventions to a design.

Note: Web development is like that time you realized you were a grown-up and you **could** eat cake every day for breakfast, but also understanding **why** you shouldn't.

---------------------------------------
## File Organization and Class Naming Conventions

- [OOCSS](http://github.com/stubbornella/oocss/wiki) - Object Oriented CSS - Nicole Sullivan
- [SMACSS](http://smacss.com/)* - Scalable and Modular Architecture for CSS - Jonathan Snook
- [BEM](http://bem.info/method/) - Block, Element, Modifier
- [ACSS](http://bradfrostweb.com/blog/post/atomic-web-design/) - Atomic CSS - Brad Frost

<p style="text-align: left; margin-top: 1em" class="fragment fade-in">my fave is *</p>

---------------------------------------
## CSS Pre-processors

- Allows you to streamline what you write (and output variations after processing).
- Allows you to use variables and short-cuts in CSS (colours! rounded borders!).
- Allows someone else to write complicated grid systems which you can easily apply to your site.
- Allows you to fudge semantics.

---------------------------------------
## Pre-processors

- [Sass](http://sass-lang.com/)
- [Less](http://lesscss.org/) 
- [Stylus](http://learnboost.github.com/stylus/)

Comparison: http://code.tutsplus.com/tutorials/sass-vs-less-vs-stylus-preprocessor-shootout--net-24320

---------------------------------------
## Frameworks and Toolkits

- [Bootstrap](http://getbootstrap.com/)
- [Foundation](http://foundation.zurb.com/)
- [Susy](http://susy.oddbird.net/)
- [Bourbon](http://neat.bourbon.io/) and [Neat](http://neat.bourbon.io/)

---------------------------------------
## Roll Your Own!

- Master a convention before you try to outgrow its framework.
- Never be afraid to refactor, or throw away a convention which is working against you.

===============================================================================
## Concepts Applied

1. **Define your styles in text** according to a convention.
2. Use a pattern library to **identify design components**.
3. **Stub out HTML + CSS** to display your library of styles.
4. **Refactor the component styles** until they match the design.

-------------
## Sneak Peak

<!-- .slide: data-background-image="assets/domicile.png" -->
<!-- .slide: data-background-position="top left" -->
<!-- .slide: data-state="bgimage" -->

Note: this is the design we're going to be applying our libraries and patterns to.

-------------
## Using a Convention: [SMACSS](http://smacss.com/)

Describe the design in words, asking yourself:

1. What’s the shape?
2. What’s consistent?
3. What can be moved like furniture?

-------------
## 1. What's the Shape?

These are your layout rules.

-------------
## Identify the Grid

<!-- .slide: data-background-image="assets/domicile-grid-overlay.png" -->
<!-- .slide: data-background-position="top left" -->
<!-- .slide: data-state="bgimage" -->

<img src="assets/domicile-grid-overlay.png" class="noshow" />

Note: the domicile design with a grid overlay showing 12 grid columns and gutters

-------------
## Locate the Containers

<!-- .slide: data-background-image="assets/domicile-regions.png" -->
<!-- .slide: data-background-position="top left" -->
<!-- .slide: data-state="bgimage" -->

<img src="assets/domicile-regions.png" class="noshow" />

Note: the domicile design with three layout columns highlighted in yellow

-------------
## Abstract the Design to a Sketch

<!-- .slide: data-background-image="assets/domicile-wireframe.png" -->
<!-- .slide: data-background-position="top left" -->
<!-- .slide: data-state="bgimage" -->

<img src="assets/domicile-wireframe.png" class="noshow" />

Note: the domicile design as a wireframe

---------
## Write Down Your Layout Rules

- Name
- Terse description
- Number of grid columns for each area

````
- Banner Area -- large image - 12 grid columns
- Navigation area -- left column - 2 grid columns
- Featured area -- center column - 4 grid columns
- Content area -- right column - 6 grid columns
- Copyright area -- footer - 12 grid columns
````

---------------------------------------
## 2. What's Consistent?

These are typically your base, or global, rules.

--------
## Find the HTML Element-ish Styles

- Headings
- Paragraphs
- Links

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

---------------------------------------
## 3. What Can be Moved Like Furniture?

Anything you can draw a box around is a component.

---------------------------------------
## Screen Captures Make Good Boxes 

<!-- .slide: data-background-image="assets/components-collated.png" -->
<!-- .slide: data-background-position="top left" -->
<!-- .slide: data-state="bgimage" -->

Note: the domicile design cut into components. To easily identify components, start taking screen captures of your PSD file.

-----
## Write Down Your Components

- Component Name
- Width (per build/break point if relevant)
- Terse description
- Characteristics
- Screen shot

-----
## Sample Component

````
Featured (4 columns) - Quotes and images

- primary decoration
- image of a plate + headings
- Sample design: component-feature-decoration-primary.png
````

![the feature component](assets/component-feature-decoration-primary.png)


---------------------------------------
## Document All of Your Rules

Plain text (or Markdown) is fine!

````
Layout Rules
---------
The shape of your web site, including the number of 
grid columns for each area.

- Banner Area -- large image - 12 grid columns
- Navigation area -- left column - 2 grid columns
- Featured area -- center column - 4 grid columns
- Content area -- right column - 6 grid columns
- Copyright area -- footer - 12 grid columns

Reference:
layout-wireframe.png
layout-gridcols.png
````

======
## Converting Plain Text to Code

By using words to describe your design files, you can easily convert the text representation of the design into "code" (Sass / CSS) using [SMACSS](http://smacss.com) conventions.

- Shape becomes Layout Rules
- Consistency becomes Base Rules
- Furniture becomes Component Rules

Note: SMACSS is Scalable and Modular Architecture for CSS.

-------------
## 1. Layout: What's the Shape

``layout/_default.scss`` 

Create the layout rules for your grid framework of choice.

````
$ninesixty-columns: 12;

.fullwidth {
  @include grid-container;
  
  #nav {
    @include grid(2);
  }

  #featured {
    @include grid(4);
  }

  #content {
    @include grid(6);
  }
}
````
Note: Ideally the design will have used the templates for your CSS grid framework.


--------
## 2. Base: What's Consistent?

``base/_base.scss`` 

````
$default: #666666; // darker grey
$heading: #999999; // ligher grey
$accent1st: #336666; // greenish

h1, h2, h3 {
  color: $heading;
  margin-bottom: 0;
}
````

-----------
## 3. Components: Moveable Furniture

``components/_news-teaser.scss``

- Component styles should be reusable. 

````
.news-teaser {
  h2 { text-transform: uppercase; }
  p:first-child { color: $accent1st; }
  p { color: $default; }
}
````
- Put duplicate styles into variables and mixins.
- Match your file name to your style class.

========================================
## Summary

- Convert your design into words.
- Group the words according to an organizational framework, such as SMACSS.
- Write the pseudo-code for your styles.
- Convert the pseduo-code to a prototype, using a CSS (grid) framework.
- Opt for many small files to avoid version control conflicts when refactoring.
- Iterate and improve in the browser.

---------------------------------------
## Resources

- [Drupalize.Me](http://drupalize.me) - videos on Sass,
  Compass, and PSD to Theme for Drupal.
- [Resources for Component-Driven Web Design](https://github.com/DrupalizeMe/drupal7-psdtotheme-series/blob/master/presentations/slides/resources.md)
- [@emmajanehw](http://twitter.com/emmajanehw) - opinionated shenanigans
- [@drupalizeme](http://twitter.com/drupalizeme) - high quality resource / link feed
