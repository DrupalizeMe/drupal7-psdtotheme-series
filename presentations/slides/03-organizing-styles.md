===============================================================================
## Organizing Styles

----------
## SMACSS Rules

![Image: Base, Layout, Components](assets/style-framework.png)

Note: We'll focus on three of these: Base, Layout, and Component

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
## Sort your Styles

- ``components``
  - almost everything (as single files!)
- ``base`` OR ``global``
  - HTML elements
  - resets and overrides
- ``layout``
  - grid framework and layout definitions
  - preserve your sanity by using a framework


----------
## Sample File Naming Conventions

- ``components/style-name.scss`` // match the file name to your class name
- ``layout/X`` // depends on your grid framework
- ``base.scss``