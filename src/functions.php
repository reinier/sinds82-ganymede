<?php
  
  function theme_features () {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'aside', 'link', 'video' ) );
    register_nav_menu('header-nav',__( 'Header navigation' ));
  }

  add_action( 'init', 'theme_features' );

  function ganymede_customize_register($wp_customize){
    
    $wp_customize->add_section('ganymede_options', array(
        'title'    => __('Options', 'ganymede'),
        'description' => '',
        'priority' => 120,
    ));
 
    $wp_customize->add_setting('ganymede_options_tagline', array(
        'capability' => 'edit_theme_options',
        'default'    => '1'
    ));

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'ganymede_options_tagline',
        array(
          'label'     => __('Display tagline'),
          'section'   => 'ganymede_options',
          'settings'  => 'ganymede_options_tagline',
          'type'      => 'checkbox',
        )
      )
    );
  }
 
  add_action('customize_register', 'ganymede_customize_register');

  if (function_exists('register_sidebar')) {
    register_sidebar(array(
      'name' => 'Homepage Widgets',
      'id'   => 'homepage-widgets',
      'description'   => 'These are widgets for the homepage.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    ));
  }

  if (function_exists('register_sidebar')) {
    register_sidebar(array(
      'name' => 'Post Widgets',
      'id'   => 'post-widgets',
      'description'   => 'These are widgets for a post page.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    ));
  }  

  // --------------------------------------- 
  /* Common purpose functions */
  // --------------------------------------- 

  function addVideoWrapperToVideos($string) {
    // match any iframes
    $pattern = '~<iframe.*?</iframe>~';
    $content = preg_replace_callback(
      $pattern,
      'videoWrapper',
      $string);

    return $content;
  }

  function videoWrapper($matches){
    if(strpos($matches[0], 'youtube') !== false || strpos($matches[0], 'vimeo') !== false){
      return '<div class="videoWrapper">' . $matches[0] . '</div>';
    }
    return $matches[0];
  }

  add_filter( 'the_content', 'addVideoWrapperToVideos' );

?>
