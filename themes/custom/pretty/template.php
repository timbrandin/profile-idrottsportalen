<?php

/**
 * Implements theme_menu_tree().
 */
function pretty_menu_tree($vars) {
  return $vars['tree'];
}

/**
 * Implements template_preprocess_hook().
 */
function pretty_preprocess_menu_block_wrapper(&$vars) {
  if (isset($vars['config'])) {
    if ($vars['config']['menu_name'] == 'main-menu') {
      switch ($vars['config']['level']) {
        case '1':
          $vars['classes_array'] = array('nav', 'nav-pills',);
          break;
        case '2':
          $vars['classes_array'] = array('nav', 'nav-tabs',);
          break;
      }
    }
    elseif  ($vars['config']['menu_name'] == 'menu-secondary-menu') {
      $vars['classes_array'] = array('nav', 'nav-pills',);
    }
  }
}

/**
 * Implements template_preprocess_page().
 */
function pretty_preprocess_html(&$vars) {
  // Strip out redundant classes.
  $vars['classes_array'] = preg_grep(
          '/(no-sidebars|page-node[^\w]*)/',
          $vars['classes_array'],
          PREG_GREP_INVERT);
  // Add viewport to the head.
  $viewport = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'name' =>  'viewport',
      'content' =>  'width=device-width, initial-scale=1, maximum-scale=1',
    ),
  );
  drupal_add_html_head($viewport, 'viewport');
}

/**
 * Implements template_preprocess_layout().
 */
function pretty_menu_local_tasks(&$vars) {
  $output = '';

  if (!empty($vars['primary'])) {
    $vars['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $vars['primary']['#prefix'] .= '<ul class="nav-tabs primary">';
    $vars['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($vars['primary']);
  }
  if (!empty($vars['secondary'])) {
    $vars['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $vars['secondary']['#prefix'] .= '<ul class="nav-tabs secondary">';
    $vars['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($vars['secondary']);
  }

  return $output;
}

/**
 * Implements template_preprocess_panels_pane().
 */
function pretty_preprocess_panels_pane(&$vars) {
  // Strip out redundant classes.
  $vars['classes_array'] = preg_grep(
          '/(panel-\w+)/i',
          $vars['classes_array'],
          PREG_GREP_INVERT);
  foreach($vars['classes_array'] as &$class) {
    $class = preg_replace('/pane-page-([-\w]+)/i', '$1', $class);
  }
  array_unshift($vars['classes_array'], 'pane');
}

/**
 * Remove redundant pane separator.
 * Implements template_style_render_region().
 */
function pretty_panels_default_style_render_region($vars) {
  return implode('', $vars['panes']);;
}

/**
 * Implements template_preprocess_field().
 */
function pretty_preprocess_field(&$vars, $hook) {
  // Set default classes for all fields.
  $vars['classes_array'] = array('field',
    preg_replace('/(field_|ns_|page_)/i', '', $vars['element']['#field_name']));

  // A way to allow you to create preprocess functions for any field.
  if (isset($vars['element'], $vars['element']['#field_name'])) {
    $function = 'pretty_preprocess_field__'. $vars['element']['#field_name'];
    if(function_exists($function)) {
      $function($vars);
    }
  }
}

function pretty_preprocess_field__field_ngbc_course_event(&$vars) {
  $vars['classes_array'] = array('accordion-group');
}

/**
 * Implements template_preprocess_field().
 */
function pretty_preprocess_node(&$vars) {
  // Set default classes for all fields.
//  dpm($vars['node']);
  $vars['classes_array'] = array('node',
    preg_replace('/(node_|ns_)/i', '', $vars['node']->type));
}

/**
 * Implements template_preprocess_entity().
 */
function pretty_preprocess_file_entity(&$vars) {
  $vars['classes_array'] = array('file', $vars['view_mode']);
}

/**
 * Remove whitespaces, newlines and tabs (speed optimization).
 * Used in html.tpl.php.
 */
function pretty_clean($html) {
  // Do not remove whitespaces for administrators.
  if (!user_access('administer nodes')) {
    $html = str_replace(array(
      "\r\n",
      "\r",
      "\n",
      "\t",
      '  ',
      '    ',
      '    '), '', $html);
  }
  return $html;
}
