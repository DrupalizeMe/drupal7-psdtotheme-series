## Rules for Components

Anything you can draw a box around is a component.

-----
## Write Down Your Components

- Component Name
- Width (including build/break point details if relevant)
- Terse description
- Characteristics
- Screen shot

-----
## Sample Component

````
Blog summary (4 columns)

- Blog title
- Date
- Number of comments
- Text summary
- "Expand" icon

Sample design: component-blog-summary.png

````

![blog component](assets/AnggaPutra_blog_psd_component.png)


-----------
## Component Rules

File name: ``components/_blog.scss``

Sample Sass content:

````
.blog {
  __title {
    // defaults are fine
  }
  __date {
    @extend .subtitle;
  }
  __summary {
    // defaults are fine
  }
  __comments {
    background-image: url('balloon.png');
    color: $secondary;
  }
  __expand {
    background-image: url('arrow-down.png');
    border-bottom: 1px solid $maincolor;
  }
}
````

Note: trying to follow BEM conventions for naming. http://bem.info/method/definitions/

------------
## Activity

Write down the components for your designs.

You may want to try writing some pseudo-Sass for each component broken into "block", "element", and "modifier".

-----------
## Summary

- Most of your style rules will be components (component-based web design!)
- Match the file name to the class name so that it is easy to find later.
- Where possible: abstract related styles and put them into variables and mixins for easier re-use.