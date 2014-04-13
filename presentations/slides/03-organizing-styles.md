## Organizing Styles

![Image: Base, Layout, Components](assets/style-framework.png)

Note: Styles aren't perfectly organized. There's often overlap between different kinds of styles.

---------------------------------------
## Conventions for Organizing Styles

- [OOCSS](http://github.com/stubbornella/oocss/wiki) - Object Oriented CSS - Nicole Sullivan
- [SMACSS](http://smacss.com/)* - Scalable and Modular Architecture for CSS - Jonathan Snook
- [BEM](http://bem.info/method/) - Block, Element, Modifier
- [ACSS](http://bradfrostweb.com/blog/post/atomic-web-design/) - Atomic CSS - Brad Frost

<p style="text-align: left; margin-top: 1em" class="fragment fade-in">my fave is *</p>

---------------------------------------
## Sass Alert

These conventions are easier to manage with a CSS preprocessor.

Our preprocessor of choice is [Sass](http://sass-lang.com/guide).

Note: Make sure the students know what a pre-processor means. the short version is that it's the CSS you always wanted. Give the example of creating a variable for a color, instead of having to put a hex value all over the place. Allows us to improve the findability of our CSS rules on very large projects by breaking CSS files into smaller pieces. This also makes it easier for version control refactoring when you're working with many smaller files.

----------
## Convention: SMACSS Rules

- **Base rules**: HTML element overrides; and default variables
- **Layout rules**: empty containers; are filled with components
- <strike>Module</strike> **Component rules**: re-usable collections of elements
- **State rules**: alternate, augment, or override
- **Theme rules**: variations for different apps

Note: Snook uses "Modules" but because of Drupal, I will use "component" consistently instead of his term.

----------
## Convention: BEM Rules

- **Block**: contains one or more blocks; but must be independent
- **Element**: part of a block that performs a certain function
- **Modifier**: variation of which alters the look or behavior of a block

Note: Differently flexible than SMACSS. These can be combined in any way. e.g. .person--female__hand vs. .person__hand--left. More reading at: http://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/

----------
## Hybrid: SMACSSy-BEM-ish

- **components**
  - made up of smaller elements; can be in different states
  - e.g. `.blog`, `.blog__title`, `.blog--summary`
- **base**
  - single element selectors OR global helpers
  - e.g. `h2`, `h3`, `a`, `li` OR a mixin to define rounded corners
- **layout**
  - grid framework and layout definitions
  - e.g. `#sidebar`, `.l-flipped #sidebar`

Note: use what works for you. It is less important to follow the standard convention for any of these systems, and more important to write down what convention you are using for your team.

----------
## Summary

- We use standard libraries and organizational frameworks to help make our styles predictable, and findable for our future selves.
- We use a CSS pre-processor, such as Sass, to compile our files into browser-friendly CSS files.
- We know sometimes the rules in frameworks are too rigid, and we may choose to bend the rules sometimes.
- We allow ourselves to pick and choose from frameworks where it suits our needs...and simplify them when necessary.
