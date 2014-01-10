## What We're Going to Talk About

http://lb.cm/psdtotheme-acquia

- BS and AS (before and after SMACSS)
- 

---------------------------------------
## The Old Way to PSD to Theme

1. Sketch out the design components.
2. Choose an appropriate base theme.
3. Apply relevant static images to the main tpl.php files.
4. Launch the theme.
5. Create high specificity selectors to target and fix problems.

Note: This is how we used to do things.

---------------------------------------
## The New Way to PSD to Theme

1. Sketch out the design components.
2. Create a library of basic styles according to SMACSS convention.
3. Adjust Drupal class names to match style component names.
4. Look for bugs and refactor the component styles to match the design.

---------------------------------------
## Pro Tip

Let your base theme take care of your requirements for:

- grid framework
- accessibility compliance
- responsive defaults


===============================================================================
## Intro to SMACSS

---------------------------------------
## Scalable and Modular Architecture for CSS

SMACSS was created by Jonathan Snook
http://smacss.com/

----------
## SMACSS Rules

- Base rules (HTML element overrides)
- Layout rules (wire frames)
- Component rules (anything that can be placed, or reused on your site)
- State rules (augments and overrides)
- Theme rules (variations)

----------
## Folder Structure

- ``base`` OR ``global``
  - HTML elements
  - resets and overrides
- ``components``
  - almost everything (as single files!)
- ``layout``
  - grid framework and layout definitions

----------
## file: ``styles.scss``

imports all of your style files

----------
## directory: ``components``

![contents of the components directory; including the _components.scss file of doom](assets/components.jpg)



===============================================================================
## yeabuthow?!

---------
## You New Here?

“Are you new to front-end web development? Here's a secret: no one else really knows what they're doing either.” 
~ Nicolas Gallagher

-------------
## Ask Yourself Three Questions

1. What’s the shape?
2. What’s consistent throughout the site?
3. What can be moved like furniture?

-------------
## Let's See It in Action

![the domicile design](assets/domicile.png)


===============================================================================
## 1. What's the Shape?

These are your layout rules.

-------------
## Identify the Grid

![the domicile design with a grid overlay showing 12 grid columns and gutters](assets/domicile-grid-overlay.png)

-------------
## Locate the Containers

![the domicile design with three layout columns highlighted in yellow](assets/domicile-regionsl.png)

-------------
## Sketch the Essence 

![the domicile design as a sketch](assets/domicile-sketch.png)

-------------
## Abstract to the Wireframe

![the domicile design as a wireframe](assets/domicile-wireframe.png)

-------------
## ``layout/_default.scss`` 

Create the layout rules relevant to your base theme / grid framework.

===============================================================================
## 2. What's Consistent?

These are typically your base, or global, rules.

--------
## Find the HTML Element ish Styles

- Headings
- Paragraphs
- Links

--------
## ``base/_base.scss`` 

````
h1, h2, h3 {
  color: ;
  width: 100%;
}
````

---------------------------------------
##
Note: 
