# Drupalize.Me Presentations

This directory contains the presentations used to teach the PSD to Theme workshop.

## Presentations

- DrupalCon Austin 2014 - [slide deck](http://drupalizeme.github.io/drupal7-psdtotheme-series/presentations/slides/workshop-drupalcon-austin.html)
- MinneWebCon - [slide deck](http://drupalizeme.github.io/drupal7-psdtotheme-series/presentations/slides/session-minnewebcon.html)

## Give a Presentation

Clone this repository, and launch a presentation in your browser. For full effect make sure that you're viewing it via a webserver and not just file:///.

http://localhost/index.html

In OSX, make sure a Web server is running with the following:

````
$ ps aux | grep httpd
````

If the Web server is not running you will see a single reference to your grep command, if it is running you'll see the Apache daemon.

If Apache is not running, you can start it with the following command:

````
$ sudo apachectl start
````

If you would like your audience to follow along with your presentation, use the "multiplex" functionality of Reveal.js. 

Your local deck acts as a "master" to the "client" deck which is published to the web.

For example:

The following deck: https://github.com/Lullabot/dme-presentations/blob/gh-pages/d8-what-is-new/webinar.html
is available as a client at: http://lullabot.github.io/dme-presentations/d8-what-is-new/webinar.html#/

To control the client deck from a local master deck, you need to change your local copy of the HTML file as follows:

Change this line:

``'{src: '../lib/reveal.js/plugin/multiplex/client.js', async: true }’ ``

to 

``'{src: '../lib/reveal.js/plugin/multiplex/master.js', async: true }’``

And change the multiplex settings to the following:

````multiplex: { secret: 'password', id: 'd1be5234b034d74d', url: 'http://lullabot.github.io/dme-presentations/d8-what-is-new/webinar.html#/ ' },````

You should now be able to control the online deck, via the one on your localhost as an example. You may need to refresh the client deck for the
changes to take effect.

You can read more about it in the Readme here: https://github.com/hakimel/reveal.js/ towards the bottom.

## Create a Presentation

Copy the index.html file from one of the existing presentations into your own presentation directory. Delete the slide content, and start creating your presentation.

Presentations are created using Reveal.js, see [the documentation here](https://github.com/hakimel/reveal.js) for more on the syntax to use.

## Speaker Notes
To take advantage of the speaker notes you will need to be viewing your deck from a Web server (e.g. Grunt or Apache). Check the HTML file for your deck to see if notes are enabled. If they are enabled, you will have a line like this:

 ````{src: '../lib/reveal.js/plugin/notes/notes.js', async: true, condition: function() { return !!document.body.classList; } },````

To view the speaker notes, press the 's' key on your keyboard. A separate notes window will open.

To add speaker notes to your deck, you may use the following for HTML slides:

````<aside class="notes">Oh hey, these are some notes.</aside>````

If you are using markdown files, you may use the following syntax:

````Note: Oh hey, these are some notes.````


## Differences from Standard Reveal.js

We've got our own theme! Whee.

If using external markdown files for creating your slides please use the following.

    <section data-markdown="file.md" data-separator="^\n={4,}" data-vertical="^\n-{4,}" data-notes="^Note:"></section>

This will allow separation of slides using `======*` and `------*` which is easier to read than newlines. Something like the following should work in your markdown file.

    # Welcome

    ==============================
    # Top Level

    ----------------------
    Nested #1

    ----------------------
    Nested #2

    ==============================
    # Top Level #2

    ==============================
    # Top Level #3
