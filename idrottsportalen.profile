<?php
/**
 * @file
 * Example profile file.
 */

/**
 * Implements hook_install_tasks().
 * NodeStream uses default config, which requires an install task
 * to install default components in the end of the process.
 * This is necessary since a lot of components needs
 * to have everything in place before import can be run safely.
 */
function idrottsportalen_install_tasks(&$install_state) {
  // Indicate to default config that we want to handle this ourselves.
  variable_get('defaultconfig_site_install', FALSE);
  return array(
    'idrottsportalen_finish' => array(
      'display_name' => st('Apply configuration'),
      'display' => TRUE,
      'type' => 'batch',
    ),
    'idrottsportalen_import_content' => array(
      'display_name' => st('Import content'),
      'display' => TRUE,
      'type' => 'batch',
    ),
  );
}

/**
 * Implements hook_defaultconfig_site_install().
 */
function idrottsportalen_defaultconfig_site_install() {
  // We want to handle installation of configuration ourselves.
  return FALSE;
}

/**
 * Apply configuration for default config.
 */
function idrottsportalen_finish() {
  // Rebuild default components.
  if (module_exists('defaultconfig')) {
    drupal_flush_all_caches();
    module_list(TRUE);
    return defaultconfig_rebuild_batch_defintion(
      st('Apply configuration'),
      st('The installation encountered an error')
    );
  }
  // Remove the variable as it's no longer necessary.
  variable_del('defaultconfig_site_install');
  return array();
}

/**
 * Import content with the dumpling module.
 */
function idrottsportalen_import_content() {
  return dumpling_content_tables_batch_definition('php',
    st('Import content'),
    st('The installation encountered an error')
  );
}
