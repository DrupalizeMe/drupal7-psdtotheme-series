## Coding Styles

---------------------------------------
## Use Established Conventions

Frameworks allow us to quickly apply conventions to a design.

Note: Web development is like that time you realized you were a grown-up and you **could** eat cake every day for breakfast, but also understanding **why** you shouldn't.

---------------------------------------
## File Organization and Class Naming Conventions

- [OOCSS](http://github.com/stubbornella/oocss/wiki) - Object Oriented CSS - Nicole Sullivan
- [SMACSS](http://smacss.com/)* - Scalable and Modular Architecture for CSS - Jonathan Snook
- [BEM](http://bem.info/method/) - Block, Element, Modifier
- [ACSS](http://bradfrostweb.com/blog/post/atomic-web-design/) - Atomic CSS - Brad Frost

<p style="text-align: left; margin-top: 1em" class="fragment fade-in">my fave is *</p>

------------
## Workflow

1. Use a pattern library to **identify design components**.
2. **Define your styles in text** according to a convention.
3. **Write HTML + Sass/CSS** to display your library of styles.
4. **Refactor the component styles** until they match the design.

----------
## Sample File Naming Conventions

- ``components/style-name.scss``
  - Individual files. Match the file name to your class name.
- ``layout/X``
  - Use a directory. File names depend on your grid framework.
- ``base.scss``
  - Single file. Mostly holds variables.

Note: Opt for many small files to avoid version control conflicts when refactoring.

-----------
## Summary

- We use conventions to help us make decisions in a consistent manner.
- We like artificial constraints when they help us.
- We follow a process which allows us to refactor our work as needed.
- We aim to sort our styles in a way which allows us to refactor easily.

Note: dealing with git conflicts