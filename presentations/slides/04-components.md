## Rules for Components

Anything you can draw a box around is a component.

<div class="fragment">Sort of.</div>

Note: You can draw a box around a link, but a link is probably to granular for a component.

-----
## Blog Example

<!-- .slide: data-background-image="assets/AnggaPutra_blog_psd.png" -->
<!-- .slide: data-background-position="top left" -->
<!-- .slide: data-state="bgimage" -->

-----
## Find the Smallest <br />Repeatable Unit for BLOG

![Spot the components](assets/AnggaPutra_blog_components_hide.png)

Note: This is THREE components; or perhaps TWO components and one BASE style.

-----
## Only the Blog Summaries Repeat

![One component built from five elements](assets/AnggaPutra_blog_components_show.png)

Note: The blog component has five sub-components or elements: title, date, summary text, number of comments, show whole post icon.

-----
## Component Descriptions

- Component Name
- Width (including build/break point details if relevant)
- Known variations of the design
- Terse description
- Characteristics (the "elements" which make up the component)
- Screen shot

-----
## Sample Component Description

````
Component: Blog
Description: News stories from recent events.
Default width: 4 grid columns

Variations:
- Full length
- Summary. Screenshot: component-blog-summary.png

Elements:
- Blog title
- Date
- Comments
- Full text
- Text summary
- "Expand" link
````

![blog component](assets/AnggaPutra_blog_psd_component.png)

Note: you may want to write these descriptions in a single file, or grouped in smaller files (which you can later transform into SCSS files)


-----------
## Sample Component Style

File name: ``components/_blog.scss``

Sample Sass content for the Summary variant:

````
.blog--summary {
  __title {
    // defaults are fine
  }
  __date {
    @extend .subtitle;
  }
  __description {
    // default for paragraph text is fine
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

Note: trying to follow BEM conventions for naming. Elements ('parts') are prefaced by double underscores. Variations ('modifiers') are prefaced by double dashes. You can mix and match. http://bem.info/method/definitions/

------------
## Activity

Write down the components for your designs.

You may want to try writing some pseudo-Sass for each component broken into "block", "element", and "modifier".

------------
## Activity Report - Pager

````
Component: Pager
Description: Pager used to navigate multiple pages of content.

Variations:
- none

Elements:
- link
- active link
````

````
.pager {
  border: 1px solid green;

  __link {
    // styles here ...
  }
  __active_link {
    // styles here ...
  }
}
````

------------
## Activity Report - Navigation

````
Component: Secondary Navigation
Description: Block for navigating sub content of a top level section.

Variations:
- none

Elements:
- title
- link
- active link
- counter
````

````
.secondary-navigation {

  __title {
    // styles here ...
  }
  __link {
    // styles here ...
  }
  __active_link {
    // styles here ...
  }
  __counter {
    // styles here ...
  }
}
````

-----------
## Summary

- Most of your style rules will be components (component-based web design!)
- Use the component name for both the class name and the file name so that it is easy to find later.
- Where possible: abstract related styles and put them into variables and mixins for easier re-use.
