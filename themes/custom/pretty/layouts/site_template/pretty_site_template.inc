<?php

$plugin = array(
  'title' => t('Site template'),
  'theme' => 'pretty_site_template',
  'icon' => 'pretty-site-template.png',
  'category' => 'Pretty',
  'regions' => array(
    'secondary_menu' => t('Secondary menu'),
    'branding_logo' => t('Branding logo'),
    'branding_left' => t('Branding left'),
    'branding_right' => t('Branding right'),
    'nav' => t('Navigation'),
    'main' => t('Main'),
    'sitemap' => t('Sitemap'),
    'footer' => t('Footer'),
  ),
);

/**
 * Preprocess the site template layout.
 */
function findwise_boostrap_preprocess_findwise_boostrap_site_template(&$vars) {

}
