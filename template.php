<?php

/**
 * Add body classes if certain regions have content.
 */
function casasrealprod_preprocess_html(&$variables) {
  if (!empty($variables['page']['featured'])) {
    $variables['classes_array'][] = 'featured';
  }

  if (!empty($variables['page']['triptych_first'])
    || !empty($variables['page']['triptych_middle'])
    || !empty($variables['page']['triptych_last'])) {
    $variables['classes_array'][] = 'triptych';
  }

  if (!empty($variables['page']['footer_firstcolumn'])
    || !empty($variables['page']['footer_secondcolumn'])
    || !empty($variables['page']['footer_thirdcolumn'])
    || !empty($variables['page']['footer_fourthcolumn'])) {
    $variables['classes_array'][] = 'footer-columns';
  }

  // Add conditional stylesheets for IE
  drupal_add_css(path_to_theme() . '/css/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
  drupal_add_css(path_to_theme() . '/css/ie6.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 6', '!IE' => FALSE), 'preprocess' => FALSE));
}

/**
 * Override or insert variables into the page template for HTML output.
 */
function casasrealprod_process_html(&$variables) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_html_alter($variables);
  }
}

function casasrealprod_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    $output .= '<div class="breadcrumb">' . implode('&nbsp;&nbsp;|&nbsp;&nbsp;', $breadcrumb) . '</div>';
    return $output;
  }
}

/**
 * Override or insert variables into the page template.
 */
function casasrealprod_process_page(&$variables) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_page_alter($variables);
  }
  // Always print the site name and slogan, but if they are toggled off, we'll
  // just hide them visually.
  $variables['hide_site_name']   = theme_get_setting('toggle_name') ? FALSE : TRUE;
  $variables['hide_site_slogan'] = theme_get_setting('toggle_slogan') ? FALSE : TRUE;
  if ($variables['hide_site_name']) {
    // If toggle_name is FALSE, the site_name will be empty, so we rebuild it.
    $variables['site_name'] = filter_xss_admin(variable_get('site_name', 'Drupal'));
  }
  if ($variables['hide_site_slogan']) {
    // If toggle_site_slogan is FALSE, the site_slogan will be empty, so we rebuild it.
    $variables['site_slogan'] = filter_xss_admin(variable_get('site_slogan', ''));
  }
  // Since the title and the shortcut link are both block level elements,
  // positioning them next to each other is much simpler with a wrapper div.
  if (!empty($variables['title_suffix']['add_or_remove_shortcut']) && $variables['title']) {
    // Add a wrapper div using the title_prefix and title_suffix render elements.
    $variables['title_prefix']['shortcut_wrapper'] = array(
      '#markup' => '<div class="shortcut-wrapper clearfix">',
      '#weight' => 100,
    );
    $variables['title_suffix']['shortcut_wrapper'] = array(
      '#markup' => '</div>',
      '#weight' => -99,
    );
    // Make sure the shortcut link is the first item in title_suffix.
    $variables['title_suffix']['add_or_remove_shortcut']['#weight'] = -100;
  }
  if (isset($variables['node']) && 
      $variables['node']->type == "casas" && 
      strpos(drupal_get_path_alias(), '/booking')>0) {
    drupal_add_js(drupal_get_path('theme', 'casasrealprod') . '/js/casas_booking_manager.js');
    $breadcrumbs = array();
    $breadcrumbs[] = l(t('Home'), '<front>');
    $breadcrumbs[] = l(t('Las Casas'), 'node/10');
    $breadcrumbs[] = l($variables['node']->title, 'node/'.$variables['node']->nid);
    drupal_set_breadcrumb($breadcrumbs);
    $variables['title'] = t('Search for Availability');
    $variables['breadcrumb'] = theme('breadcrumb', array('breadcrumb' => drupal_get_breadcrumb()));
  }

  if (strpos(drupal_get_path_alias(), 'bookings') !== FALSE) {
    drupal_add_js(drupal_get_path('theme', 'casasrealprod') . '/js/casas_booking_manager.js');
  }
  
  if (strpos(drupal_get_path_alias(), 'checkout') !== FALSE) {
    $parts = explode('/', current_path());
    $last = array_pop($parts);
    $title = drupal_get_title();
    if (is_numeric($last)) {
      $title = t('Fill your personal data');
    }
    else if ($last == 'review') {
      $title = t('Review order');
    } 
    $variables['title'] = $title;
  }  
}

/**
 * Implements hook_preprocess_maintenance_page().
 */
function casasrealprod_preprocess_maintenance_page(&$variables) {
  // By default, site_name is set to Drupal if no db connection is available
  // or during site installation. Setting site_name to an empty string makes
  // the site and update pages look cleaner.
  // @see template_preprocess_maintenance_page
  if (!$variables['db_is_active']) {
    $variables['site_name'] = '';
  }
  drupal_add_css(drupal_get_path('theme', 'casasrealprod') . '/css/maintenance-page.css');
}

/**
 * Override or insert variables into the maintenance page template.
 */
function casasrealprod_process_maintenance_page(&$variables) {
  // Always print the site name and slogan, but if they are toggled off, we'll
  // just hide them visually.
  $variables['hide_site_name']   = theme_get_setting('toggle_name') ? FALSE : TRUE;
  $variables['hide_site_slogan'] = theme_get_setting('toggle_slogan') ? FALSE : TRUE;
  if ($variables['hide_site_name']) {
    // If toggle_name is FALSE, the site_name will be empty, so we rebuild it.
    $variables['site_name'] = filter_xss_admin(variable_get('site_name', 'Drupal'));
  }
  if ($variables['hide_site_slogan']) {
    // If toggle_site_slogan is FALSE, the site_slogan will be empty, so we rebuild it.
    $variables['site_slogan'] = filter_xss_admin(variable_get('site_slogan', ''));
  }
  //fgc
  // set the default language if necessary
  $language = isset($GLOBALS['language']) ? $GLOBALS['language'] : language_default();

  $variables['head_title_array']  = $head_title;
  $variables['head_title']        = implode(' | ', $head_title);
  $variables['base_path']         = base_path();
  $variables['front_page']        = url();
  $variables['breadcrumb']        = 'uiuui';
  $variables['feed_icons']        = '';
  $variables['help']              = '';
  $variables['language']          = $language;
  $variables['language']->dir     = $language->direction ? 'rtl' : 'ltr';
  $variables['logo']              = theme_get_setting('logo');
  $variables['messages']          = $variables['show_messages'] ? theme('status_messages') : '';
  $variables['main_menu']         = array();
  $variables['secondary_menu']    = array();
  $variables['site_name']         = (theme_get_setting('toggle_name') ? variable_get('site_name', 'Drupal') : '');
  $variables['site_slogan']       = (theme_get_setting('toggle_slogan') ? variable_get('site_slogan', '') : '');
  $variables['tabs']              = '';
  $variables['title']             = drupal_get_title();

  
}

/**
 * Override or insert variables into the node template.
 */
function casasrealprod_preprocess_node(&$variables) {
  if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
    $variables['classes_array'][] = 'node-full';
  }
}

/**
 * Override or insert variables into the block template.
 */
function casasrealprod_preprocess_block(&$variables) {
  // In the header region visually hide block titles.
  if ($variables['block']->region == 'header') {
    $variables['title_attributes_array']['class'][] = 'element-invisible';
  }
}

/**
 * Implements theme_menu_tree().
 */
function casasrealprod_menu_tree($variables) {
  return '<ul class="menu clearfix">' . $variables['tree'] . '</ul>';
}

/**
 * Implements theme_field__field_type().
 */
function casasrealprod_field__taxonomy_term_reference($variables) {
  $output = '';

  // Render the label, if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<h3 class="field-label">' . $variables['label'] . ': </h3>';
  }

  // Render the items.
  $output .= ($variables['element']['#label_display'] == 'inline') ? '<ul class="links inline">' : '<ul class="links">';
  foreach ($variables['items'] as $delta => $item) {
    $output .= '<li class="taxonomy-term-reference-' . $delta . '"' . $variables['item_attributes'][$delta] . '>' . drupal_render($item) . '</li>';
  }
  $output .= '</ul>';

  // Render the top-level DIV.
  $output = '<div class="' . $variables['classes'] . (!in_array('clearfix', $variables['classes_array']) ? ' clearfix' : '') . '">' . $output . '</div>';

  return $output;
}

function casasrealprod_commerce_price_formatted_components($variables) {
  if (strpos(drupal_get_path_alias(), 'bookings') !== FALSE ||
      strpos(drupal_get_path_alias(), 'chekcout') !== FALSE) {
    $content = array();
    foreach ($variables['components'] as $name => $component) {
      $content[] = array(
        '#type' => 'markup',
        '#prefix' => '<div class="'. drupal_html_class('component-type-' . $name) .'">',
        '#markup' => $component['title'] .'<span>'. $component['formatted_price'] .'</span>',
        '#suffix' => '</div>',
      );
    }
    return '<div class="commerce-price-formatted-components">'. drupal_render($content) .'</div>';
  }
  else {
    return theme_commerce_price_formatted_components($variables);
  }
}

/**
 * Implements hook_field_widget_form_alter().
 */
function casasrealprod_field_widget_form_alter(&$element, &$form_state, $context) {
  if ($element['#field_name'] == 'field_cr_customer_condiciones') {
    $element['#title'] = t('I accept the !policy',
      array(
        '!policy' => l(
                t('private policy and use conditions'),
                $context['field']['settings']['policy'],
                array('attributes' => array('target' => '_blank')))
      )
    );    
  }
}

function casasrealprod_preprocess_mimemail_message(&$variables) {
  global $base_url;
  $variables['logo'] = $base_url . theme_get_setting('logo');
  $variables['front_page'] = url();
}

function casasrealprod_preprocess_views_view(&$vars) {
  if (isset($vars['view']->name)) {
    if ($vars['view']->name == 'casas_checkout_form') {
      $title = '';
      $parts = explode('/', current_path());
      $last = array_pop($parts);
      if (is_numeric($last)) {
        $title = t('Enjoy your experience for');
      }
      else if ($last == 'review') {
        $title = t('Billing information');
      }      
      $title = '<div class="commerce-order-handler-area-order-total-title">'. $title .'</div>';      
      $vars['footer'] = '<div class="commerce-order-handler-area-order-total-wrapper">'. $title . $vars['footer'] .'</div>';
    }
  }
}

function casasrealprod_preprocess_views_view_fields(&$vars) {
  if (isset($vars['view']->name)) {
    if ($vars['view']->name == 'casas_checkout_form') {
      if ($vars['row']->commerce_line_item_field_data_commerce_line_items_type == 'rooms_service_booking') {
        $label = 'Total';
        $label_html = $vars['fields']['commerce_total']->wrapper_prefix . $label .':'. $vars['fields']['commerce_total']->wrapper_prefix;
        $vars['fields']['commerce_total']->label = $label;
        $vars['fields']['commerce_total']->label_html = $label_html;
      }
    }    
  }
}
