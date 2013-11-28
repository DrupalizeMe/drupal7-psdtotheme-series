<div class="page fullwidth">
  <div id="banner" class="fullwidth"><img alt=" " src="<?php print $base_path . $directory; ?>/images/domicile-banner.png" /></div>
  <div id="main" class="fullwidth clearfix">
    <div id="nav" class="sidebar--nav"> 
 <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
<img alt=" " src="<?php print $base_path . $directory; ?>/images/at-home.jpg" /></a>

    <?php print render($page['nav']); ?>

    </div>
    <div id="feature" class="sidebar--feature">
      <div class="decoration"><img alt=" " src="<?php print $base_path . $directory; ?>/images/big-plate.jpg" /></div>
      <?php print render($page['featured']); ?>
      <div class="decoration"><img alt=" " src="<?php print $base_path . $directory; ?>/images/little-plate.jpg" /></div>
    </div>
    <div id="content" class="content--main">

         <?php print $messages; ?>
<a id="main-content"></a>
         <?php print render($title_prefix); ?>
         <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
         <?php print render($title_suffix); ?>
         <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
         <?php print render($page['help']); ?>
         <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
         <?php print render($page['content']); ?>
         <?php print $feed_icons; ?> 

    </div>
  </div>

  <div id="copyright" class="fullwidth"> <?php print render($page['copyright']); ?> </div>
</div>
