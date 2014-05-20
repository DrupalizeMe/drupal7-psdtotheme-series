## Building Your Theme

----------
## Sample File Naming Conventions

- ``components/_style-name.scss``
  - Individual files. Match the file name to your class name.
- ``layout/X``
  - Use a directory. File names depend on your grid framework.
- ``base.scss`` or ``base/X``
  - Single file. Mostly holds variables. *OR* a directory.

Note: Opt for many small files to avoid version control conflicts when refactoring.

---------------------------------------
## Build Your Drupal Site

- With your components in mind, build out your Drupal site.
- You cannot apply a style to an element which isn't being rendered in a page.

---------------------------------------
## Establish Your Theme 

![the domicile theme folder](assets/domicile-d8-theme-folder.jpg)

---------------------------------------
## Pro Tip

Let your base theme take care of your requirements for:

- updating markup to HTML5
- grid framework
- accessibility compliance
- responsive defaults

Sort your styles according to a convention which is relevant to your CMS.

---------------------------------------
## Organize the Component Files In Your Theme

````
mytheme/scss/components/
  _blog.scss
  _gallery-item.scss
  _portfolio-item.scss
mytheme/scss/layout/
  _default.scss
  _single-column.scss
mytheme/scss/base.scss
mytheme/scss/styles.scss (pulls in all partials)
````

Tip: How does HTML "work" for your CMS of choice? How will you tie these styles to your CMS?

---------------------------------------
## Example - Drupalize.Me

![List of SCSS files for drupalize.me](assets/scss-file-list-dme.jpg)

---------------------------------------
## Example - Large Media Site

![List of SCSS files for a large site](assets/scss-file-list-media.png)

---------------------------------------
## Tell Drupal About Your CSS

If you're using a preprocessor just add the ouput file. Otherwise include each CSS file individually.

**themes/domicile/domicile.info.yml**

````yaml
name: Domicile
type: theme
description: 'A three-column design by Design House.'
core: 8.x

stylesheets:
  all:
    - css/styles.css
````

Note: You could also include .css files directly if you're not using a prepprocessor it'll just be more verbose.

---------------------------------------
## Adjust ``page.html.twig``

- Apply the layout classes from your style guide.

````html
<div class="page fullwidth">
  <div id="banner" class="fullwidth"><img alt=" " src="{{ base_path }}themes/domicile/images/domicile-banner.png" /></div>
  <div id="main" class="fullwidth clearfix">
    <div id="nav" class="sidebar--nav"> 
      <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home" id="logo"><img alt=" " src="{{ base_path }}themes/domicile/images/at-home.jpg" /></a>
      {{ page.nav }}
    </div>

    <div id="featured" class="sidebar--feature">
      ...
    </div>

    <div id="content" class="content--main">
       {{ page.content }}
       ...
    </div>
  </div>

  <div id="copyright" class="fullwidth"> {{ page.copyright }} </div>
</div>
````

Note: For D7 this would be page.tpl.php, override template files to apply your classes, especially for layout items.

---------------------------------------
## Launch an MVP Theme

![a barely there theme](assets/domicile-mvt.png)

---------------------------------------
## Apply Remaining Styles

Easy road: Alter your SCSS with ``@extend``.

````css
.drupal-weird-class {
  @extend .my-awesome-class;
}
````
High road: Alter Drupal’s classes in ``template.php``

````
function THEMENAME_menu_tree($vars) {
  return '<ul class="my-awesome-class">' . $vars['tree'] . '</ul>';
}
````

---------------------------------------
## Refactor. Repeat.

- Refactor: Remove or fix styles that aren't working.
- Clear cache and see what's (now) broken.
- Repeat.

---------------------------------------
## Common Drupal Layout Tools

Many of the common Drupal layout tools allow you to customize the names of classes used to wrap content.

- Views
- Panels
- Display Suite

Note: Talk about how you can use these moduels to configure the classes used to wrap the content output, it can get a little tedious though esepcially if you need to make changes to class names later.

----------
## Example From Views

![views style settings](assets/views-style-settings.jpg)

----------
## Examples of Conventions<br />Applied to Real Projects

- [Applying SMACSS to Drupal](http://atendesigngroup.com/blog/applying-smacss-drupal)
- [CSS Architecture for Drupal 8](https://drupal.org/node/1887918)
- [WordPress and SMACSS](http://peterwilson.cc/specificity-smacss-and-wordpress/)
- [Pure - a theme](http://purecss.io/)

-----------
## More On Sass and Compass

- http://drupalize.me/series/learning-sass-and-compass
- http://drupalize.me/series/psd-drupal-theme


Note: about working with Sass, Compass and what you need to install and run at the command line to get stuff working.

-----------
## Summary

- We use conventions to help us make decisions in a consistent manner.
- We like artificial constraints when they help us.
- We follow a process which allows us to refactor our work as needed.
- We aim to sort our styles in a way which allows us to refactor easily.

Note: makes dealing with git conflicts easier
