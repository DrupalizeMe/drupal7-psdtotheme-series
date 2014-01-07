PSD to Theme
==========

Working files for the PSD to Theme workshop, video series, and for the Drupal theme, Domicile.

Example repository for Drupalize.Me learning series [PSD To Theme](http://drupalize.me/series/psd-drupal-theme). Used to demonstrate the process of converting a static design file to a Drupal 7 theme. This theme is an updated version of the original [Domicile Theme](https://drupal.org/project/domicile).

Contents

*/design*

The original PSD files from the designer, Betty Biesenthal.

*/design_assets*

Web-ready extracted resources from the design file (JPG files).

*/domicile*

The completed Domicile theme, ready for upload to your Drupal site. Includes source Sass files and rendered CSS.

*/lesson_snapshots*

Various theme and database snapshots used throughout the video learning series. Admin credentials are `admin / admin`. Database can be imported with:

`gunzip < data/complete-site.sql.gz | mysql -u {username} -p -h {localhost} {databse_name}`

*/styleguide*

A sample text-based style guide, and build notes for the design to theme conversion process. Includes the source file (.bmml file) for the diagram used in the learning series. You can download a copy of Balsamiq Mockups from here: http://balsamiq.com/

Created by [Drupalize.Me](http://drupalize.me).
