<?php

/**
 * @file
 * Layout plugin for framework panels.
 */

$plugin = array(
  'title' => t('Two columns 66/33'),
  'theme' => 'ngbc_twocolumn',
  'icon' => 'ngbc-twocolumn.png',
  'category' => 'NGBC',
  'regions' => array(
    'left' => t('Left'),
    'right' => t('Right'),
  ),
);