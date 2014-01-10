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

---------------------------------------
## Pro Tip

Let your base theme take care of your requirements for:

- grid framework
- accessibility compliance
- responsive defaults



