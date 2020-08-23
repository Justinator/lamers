<?php

$wp_customize->add_section('theme_header', array(
'title' => 'Header',
'description' => 'Choose some header styles for your site',
'priority' => 20,
));
$wp_customize->add_setting('disable_search');
$wp_customize->add_control('disable_search',
array(
  'label'    => __( 'Disable Search Toggle', 'insightcustom' ),
  'description' => 'Check to remove the search toggle from the main navigation',
  'section'  => 'theme_header',
  'settings' => 'disable_search',
  'type'     => 'checkbox'
  )
);
?>
