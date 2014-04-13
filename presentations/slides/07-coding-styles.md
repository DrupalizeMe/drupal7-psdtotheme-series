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

-----------
## Activity: Building Your Theme

Sort your styles according to a convention which is relevant to your CMS.

````
scss/components/
  _blog.scss
  _gallery-item.scss
  _portfolio-item.scss
scss/layout/
  _default.scss
  _single-column.scss
scss/base.scss
scss/styles.scss (pulls in all partials)
````

Tip: How does HTML "work" for your CMS of choice? How will you tie these styles to your CMS?

----------
## Sample Applications

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

Note: dealing with git conflicts
