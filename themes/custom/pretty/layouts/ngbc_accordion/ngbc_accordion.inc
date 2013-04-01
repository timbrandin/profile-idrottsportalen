<?php

/**
 * @file
 * Layout plugin for naked panels.
 */


$plugin = array(
  'title' => t('Accordion'),
  'theme' => 'ngbc_accordion',
  'icon' => 'ngbc-accordion.png',
  'category' => 'NGBC',
  'regions' => array(
    'heading' => t('Heading'),
    'body' => t('Body'),
    'details' => t('Details'),
  ),
);