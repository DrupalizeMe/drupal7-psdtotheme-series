## What We're Going to Talk About

http://lb.cm/psdtotheme-acquia

- BS and AS (before and after SMACSS)
- 

---------------------------------------
## The Old Way to PSD to Theme

1. Sketch out the design components.
2. Choose an appropriate base theme.
3. Apply relevant static images to the main tpl.php files.
4. Launch the theme.
5. Create high specificity selectors to target and fix problems.

Note: This is how we used to do things.

---------------------------------------
## The New Way to PSD to Theme

1. Sketch out the design components.
2. Create a library of basic styles according to SMACSS convention.
3. Adjust Drupal class names to match style component names.
4. Look for bugs and refactor the component styles to match the design.

---------------------------------------
## Pro Tip

Let your base theme take care of your requirements for:

- grid framework
- accessibility compliance
- responsive defaults


===============================================================================
## Intro to SMACSS

---------------------------------------
## Scalable and Modular Architecture for CSS

SMACSS was created by Jonathan Snook
http://smacss.com/

##<span class="big-picture">&#11089;</span> Big Picture Changes

Note: Changes that are more related to processes and big philosophies. There's a few of them here to kick off, and then a bunch scattered throughout the rest of the presentation.

---------------------------------------
##<span class="big-picture">&#11089;</span> UI/UX Improvements

Drupal 8 continues the trend of updating the user interface and improving
overall user experience.

- It's easier to use.
- It's easier to find things.
- It's more accessible.

Note: 

---------------------------------------
##<span class="big-picture">&#11089;</span> HTML5 & Mobile

<img src="assets/html5.png" class="left" alt="HTML 5 logo"/>
<ul class="right" style="width: 48%;">
  <li>All core themes use HTML5.</li>
  <li>Markup has been improved throughout core.</li>
  <li>New HTML5 elements: phone, email, url, number, and date.</li>
  <li>Next generation enhancements with Modernizr.js</li>
  <li>Dropped support for IE 6 & 7.</li>
</ul>

Note: The experts are all saying that the future of web is mobile, year over year growth. Drupal needs to be able to serve this audience in order to remain relevant.

---------------------------------------
##<span class="big-picture">&#11089;</span> Responsive / Mobile Friendly

<img src="assets/d8-responsive-single.jpg" width="30%" alt="responsive content" />
<img src="assets/d8-responsive-menu.jpg" width="30%" alt="responsive administration" />
<img src="assets/d8-responsive-admin.jpg" width="30%" alt="responsive content editing" />

Note: It's not just squishy, toolbars work, image styles can be made responsive, etc, want to serve the site to an app instead we've got REST!

---------------------------------------
##<span class="big-picture">&#11089;</span> Accessibility

````javascript
Drupal.announce(Drupal.t('Tray orientation changed to @orientation.', {
  '@orientation': orientation
}));
````

- Improvements to accessibility based on real world testing.
- WCAG 2.0
- WC3 - Aria

================================================================================
## Changes for Content Authors &<br/>Site Builders

---------------------------------------
## First Impressions Are Important
![D8 Installer](assets/d8-install-screen.jpg)

Note: Overhauled the installer, indicative of the fact that there's been thought put into every corner, not just the main screens.

---------------------------------------
## A Better Content Form
![D8 Updated node add/edit form](assets/d8-node-form1.jpg)

Note: Make it easier to find the important things, moved 2ndary data to right. Improved publishing workflow.

---------------------------------------
## WYSIWYG Provided by CKEditor
![D8 Updated node add/edit form](assets/d8-wysiwyg.jpg)

With custom plugins for image and caption handling. It is as awesome as it sounds.

---------------------------------------
## In-Place Editing
![D8 in-line editing example](assets/d8-inline-edit.jpg)

---------------------------------------
## Improved Module Administration
<video data-autoplay src="assets/d8-module-page.mp4" loop="loop"></video>

---------------------------------------
## Blocks Are Better

- It is easier to administer blocks.
- Blocks are now fieldable entities.
- Block configuration is stored in code.
- No more `<none>` to hide block titles.

---------------------------------------
## Views - In Core

- Easily build lists of content anywhere.
- Edit existing lists:
  - Front page.
  - Content administration.
- Bulk operations in core - sort of like VBO. 

---------------------------------------
## New Fields

- Entity reference
- Date
- Link
- Phone
- Email

Note: Drupal has always been strong at content modeling but now it's even better.

---------------------------------------
## Administration Experience

- Display modes for content editing forms.
- Joyride-powered Tour module for context-sensitive help.
- Usage reports for files.
- And more ...

---------------------------------------
##<span class="big-picture">&#11089;</span> Contrib Functionality in Core

- Modules we've tried, tested, and rely on from contrib have moved into core.
- Including this functionality in core makes Drupal more useful on release day.
- Some modules were RTBC and included almost as-is.
- Some modules were incorporated into core, but re-written from the ground up.

Note: Views in Core, Features < CMI, Picture and other responsive tools. Too many to name them all.

================================================================================
## Changes for Themers

Pretty much everything.

---------------------------------------
## Twig - A New Theme Engine

A template engine created by Sensio Labs,<br/>the makers of Symfony.

- Twig allows us to simplify themes.
- Twig makes themes more secure.
- Team working on Twig helped to dramatically reduce the complexity of the entire theme system.

---------------------------------------
## Twig - Sample

From core/themes/bartik/templates/node.html.twig

````
<header>
  {{ title_prefix }}
  {% if not page %}
    <h2{{ title_attributes }}>
      <a href="{{ node_url }}">{{ label }}</a>
    </h2>
  {% endif %}
  {{ title_suffix }}

  {% if display_submitted %}
    <div class="meta submitted">
      {{ user_picture }}
      {{ submitted }}
    </div>
  {% endif %}
</header>
````

---------------------------------------
## Twig Resources

- http://twig.sensiolabs.org/
- What is Twig? http://www.youtube.com/watch?v=18sxjsLTesE
- Recent Presentations
  - http://www.jenlampton.com/presentations/twig-and-new-theme-layer-drupal-8
  - https://prague2013.drupal.org/session/twig-and-new-theme-layer-drupal-8

---------------------------------------
##<span class="big-picture">&#11089;</span> Simplification - Improving DX

- **DX:** The developer experience.
- Developer experience continues to be a primary focus for Drupal 8.
- **Goal:** Reduce Drupal's complexity and make it easier for developers to work with.

================================================================================
## Changes for Developers

- PHP 5.3+ language features. http://drupal.org/requirements
- Modern, Object Oriented Programming patterns.
- Symfony components used for routing and other common tasks.
- YAML for metadata
- [Dependency Injection](https://portland2013.drupal.org/session/dependency-injection-drupal-8)
- [Annotations](https://drupal.org/node/1882526) for discovery
- Namespaces 

---------------------------------------
##<span class="big-picture">&#11089;</span> Not Invented Here

We collaborate with other OSS projects and incorporate the best work into Drupal.

We don't try to re-invent the wheel, but **proudly feature work found elsewhere.**

- CKEditor
- Symfony2
- Twig
- jQuery
- Backbone.js
- Guzzle

---------------------------------------
## New Tools

- [Symfony based routes.](https://prague2013.drupal.org/session/drupal-8-routing-method-madness)
- CMI - [Configuration Management Initiative](https://drupal.org/node/1667894)
- [Plugins](https://prague2013.drupal.org/session/drupal-8-info-hook-plugin)
- Better tools for consuming web services.
- Improved entity system.
- New REST module with automatic support for entities.

---------------------------------------
##<span class="big-picture">&#11089;</span> Modernizing Drupal's Architecture

Much of the underlying architecture of Drupal has been re-written for Drupal 8
bringing the platform in-line with current PHP best practices and also paving
the way for possible changes to the way Drupal is developed going forward.

Note: D8 might finally be the first version of Drupal in which we can truly iterate on features within a core release cycle without breaking APIs.

---------------------------------------
## Find Out More

- http://drupal.org/list-changes
- https://drupal.org/community-initiatives/drupal-core 
- http://d8cx.org

================================================================================
## When Will It Be Ready?

When can I use it?

- When the number of critical issues hits 0 we get an 8.0 release.
- Details about the release cycle: https://drupal.org/core/release-cycle
- Let the community be your guide. Just because it's released doesn't necessarily mean "It's ready".
- Are you an early adopter or do you need stability and features?
- http://xjm.drupalgardens.com/blog/when-its-ready

---------------------------------------
## Let the Community Guide You

<img src="assets/drupal-usage.jpg" alt="Drupal core project usage."/>

---------------------------------------
## You Can Help

Want to see Drupal 8 released sooner?

We could use your help squashing bugs, writing documentation, and more.

[Get Involved!](https://drupal.org/node/717162)

Note: Getting involved now is also one of the best possible ways to learn Drupal 8.

=======================================
## Let's Dig In!

For the remainder of today's workshop you're going to learn how to get into Drupal 8.
