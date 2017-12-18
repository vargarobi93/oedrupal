<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function smink_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    $output .= '<div class="breadcrumb">' . implode(' >> ', $breadcrumb) . '</div>';
    return $output;
  }
}

function smink_preprocess_block(&$variables) {
  //dpm($variables);
  $variables['classes_array'][] = 'smink';
  $variables['classes_array'][] = $variables['zebra'];
}