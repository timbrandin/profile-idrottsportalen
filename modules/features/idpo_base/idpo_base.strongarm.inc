<?php
/**
 * @file
 * idpo_base.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function idpo_base_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'hidden_features';
  $strongarm->value = array(
    0 => 'ns_ad',
    1 => 'ns_article',
    2 => 'ns_blog',
    3 => 'ns_blog_post',
    4 => 'ns_contributor',
    5 => 'ns_fact',
    6 => 'ns_footer_content',
    7 => 'ns_form',
    8 => 'ns_media',
    9 => 'ns_page',
    10 => 'ns_poll',
    11 => 'ns_promo',
    12 => 'uuid_default_entities_example',
    13 => 'uuid_services_example',
    14 => 'ns_field_translation',
    15 => 'ns_i18n',
    16 => 'ns_translator',
    17 => 'ns_markdown',
    18 => 'ns_styles',
    19 => 'ns_text',
    20 => 'ns_workbench',
  );
  $export['hidden_features'] = $strongarm;

  return $export;
}
