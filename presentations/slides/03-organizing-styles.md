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
## Scalable and Modular Architecture for CSS

SMACSS was created by Jonathan Snook
http://smacss.com/

----------
## All SMACSS Rules

- Base rules (HTML element overrides)
- Layout rules (wire frames)
- Component rules (anything that can be placed, or reused on your site)
- State rules (augments and overrides)
- Theme rules (variations)

----------
## Simplified SMACSS

- ``components``
  - almost everything
- ``base`` OR ``global``
  - HTML elements
  - resets and overrides
- ``layout``
  - grid framework and layout definitions
  - preserve your sanity by using a framework

----------
## Summary

- We use standard libraries and organizational frameworks to help make our styles predictable, and findable for our future selves.
- We know sometimes the rules in frameworks are too rigid, and we may choose to bend the rules sometimes.
- We allow ourselves to pick and choose from frameworks where it suits our needs...and simplify them when necessary.
