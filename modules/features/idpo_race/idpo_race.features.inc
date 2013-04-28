<?php
/**
 * @file
 * idpo_race.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function idpo_race_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function idpo_race_node_info() {
  $items = array(
    'idpo_race' => array(
      'name' => t('Race'),
      'base' => 'node_content',
      'description' => t('Races are used to relate a race event to.'),
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
    'idpo_race_event' => array(
      'name' => t('Race event'),
      'base' => 'node_content',
      'description' => t('Race events are used to store event details per occurrence.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'race_result' => array(
      'name' => t('Race result'),
      'base' => 'node_content',
      'description' => t('Race results are used to combine a story with an attached result or external link to a results list.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => t('This result will be published on the frontpage when saved so please write a title that explains our performance in the event.'),
    ),
  );
  return $items;
}
