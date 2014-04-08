## Rules for Components

Anything you can draw a box around is a component.

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


-----------
## Component Rules

File name: ``components/_news-teaser.scss``

Sample Sass content:

````
.news-teaser {
  h2 { text-transform: uppercase; }
  p:first-child { color: $accent1st; }
  p { color: $default; }
}
````

-----------
## Summary

- Most of your style rules will be components (component-based web design!)
- Match the file name to the class name so that it is easy to find later.
- Where possible: abstract related styles and put them into variables and mixins for easier re-use.