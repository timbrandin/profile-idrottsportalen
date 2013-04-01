<?php

/**
 * @file
 * This layout is designed to be the site template layout when using
 * the Panels Everywhere module.
 */
?>
<header role="banner" id="page-header" class="branding">
  <div class="container">
    <div class="row-fluid">
      <?php if (!empty($content['secondary_menu'])): ?>
        <div class="secondary-menu">
          <?php print render($content['secondary_menu']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($content['branding_logo'])): ?>
          <?php print render($content['branding_logo']); ?>
      <?php endif; ?>
      <?php if (!empty($content['branding_left'])): ?>
        <div class="branding-left">
          <?php print render($content['branding_left']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($content['branding_right'])): ?>
        <div class="branding-right pull-right">
          <?php print render($content['branding_right']); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</header> <!-- /#header -->
<header id="navbar" role="banner" class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <?php if (!empty($content['nav'])): ?>
        <div class="nav-collapse">
          <nav role="navigation">
            <?php print render($content['nav']); ?>
          </nav>
        </div>
      <?php endif;?>
    </div>
  </div>
</header>
<div class="container">
  <?php if (!empty($content['main'])): ?>
    <div class="main row-fluid">
      <?php print render($content['main']); ?>
    </div>
  <?php endif;?>
</div>
<?php if (!empty($content['sitemap'])): ?>
  <footer class="sitemap">
    <?php print render($content['sitemap']); ?>
  </footer>
<?php endif; ?>
<?php if (!empty($content['footer'])): ?>
  <footer class="footer">
    <?php print render($content['footer']); ?>
  </footer>
<?php endif; ?>
