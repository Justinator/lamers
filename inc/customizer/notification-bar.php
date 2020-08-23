<?php

$wp_customize->add_section('notification_bar', array(
'title' => 'Notification Bar',
'description' => 'Easily customize your notification bar from the customizer screen.',
'priority' => 130,
));
$wp_customize->add_setting('disable_notification_bar');
$wp_customize->add_control('disable_notification_bar',
array(
  'label'    => __( 'Disable Notification Bar', 'insightcustom' ),
  'description' => 'Check to remove the site notification bar on all pages',
  'section'  => 'notification_bar',
  'settings' => 'disable_notification_bar',
  'type'     => 'checkbox'
  )
);
$wp_customize->add_setting('notification_bar_color', array(
  'default'     => '#eeaf00',
  'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'notification_bar_color', array(
'label'        => 'Notification Bar Background Color',
'section'    => 'notification_bar',
'settings'   => 'notification_bar_color',
) ) );
$wp_customize->add_setting('notification_text_color', array(
  'default'     => '#18435a',
  'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'notification_text_color', array(
'label'        => 'Notification Text Color',
'section'    => 'notification_bar',
'settings'   => 'notification_text_color',
) ) );
$wp_customize->add_setting('notification_button_color', array(
  'default'     => '#eeaf00',
  'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'notification_button_color', array(
'label'        => 'Notification Button Color',
'section'    => 'notification_bar',
'settings'   => 'notification_button_color',
) ) );
$wp_customize->add_setting('notification_bar_content');
$wp_customize->add_control('notification_bar_content',
array(
  'label'    => __( 'Content', 'insightcustom' ),
  'description' => 'Add your notification bar content here. [HTML tags are allowed. e.g. Add <br /> for break.]',
  'section'  => 'notification_bar',
  'settings' => 'notification_bar_content',
  'type'     => 'textarea',
  )
);
$wp_customize->add_setting('disable_button');
$wp_customize->add_control('disable_button',
array(
  'label'    => __( 'Disable Button', 'insightcustom' ),
  'description' => 'Check to remove the notification bar button',
  'section'  => 'notification_bar',
  'settings' => 'disable_button',
  'type'     => 'checkbox'
  )
);
$wp_customize->add_setting('notification_bar_button_text');
$wp_customize->add_control('notification_bar_button_text',
array(
  'label'    => __( 'Button Text', 'insightcustom' ),
  'description' => 'Add your notification bar button text here',
  'section'  => 'notification_bar',
  'settings' => 'notification_bar_button_text',
  'type'     => 'text',
  )
);
$wp_customize->add_setting('notification_bar_button_url');
$wp_customize->add_control('notification_bar_button_url',
array(
  'label'    => __( 'Button URL', 'insightcustom' ),
  'description' => 'Add the page URL for your notification button here',
  'section'  => 'notification_bar',
  'settings' => 'notification_bar_button_url',
  'type'     => 'text',
  )
);
?>
