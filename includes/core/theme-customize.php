<?php
add_action('customize_register', function($wp_customize){
     $section = THEME.'_customize';
     $wp_customize->add_section($section, array(
          'title' => __(THEME_NAME, THEME),
          'description' => '',
          'priority' => 0,
     ));
     $wp_customize->add_setting('themename_theme_options[text_test]', array(
          'default' => 'Arse!',
          'capability' => 'edit_theme_options',
          'type' => 'option',
     ));
     
     $wp_customize->add_control('themename_text_test', array(
          'label' => __('Text Test', THEME),
          'section' => $section,
          'settings' => 'themename_theme_options[text_test]',
     ));
     
     /*$wp_customize->add_setting('themename_theme_options[color_scheme]', array(
          'default' => 'value2',
          'capability' => 'edit_theme_options',
          'type' => 'option',
     ));
     
     $wp_customize->add_control('themename_color_scheme', array(
          'label' => __('Color Scheme', THEME),
          'section' => 'themename_color_scheme',
          'settings' => 'themename_theme_options[color_scheme]',
          'type' => 'radio',
          'choices' => array(
               'value1' => 'Choice 1',
               'value2' => 'Choice 2',
               'value3' => 'Choice 3',
          ),
     ));
     
     $wp_customize->add_setting('themename_theme_options[checkbox_test]', array(
          'capability' => 'edit_theme_options',
          'type' => 'option',
     ));
     
     $wp_customize->add_control('display_header_text', array(
          'settings' => 'themename_theme_options[checkbox_test]',
          'label' => __('Display Header Text'),
          'section' => 'themename_color_scheme',
          'type' => 'checkbox',
     ));
     
     $wp_customize->add_setting('themename_theme_options[header_select]', array(
          'default' => 'value2',
          'capability' => 'edit_theme_options',
          'type' => 'option',
     ));
     
     $wp_customize->add_control( 'example_select_box', array(
          'settings' => 'themename_theme_options[header_select]',
          'label' => 'Select Something:',
          'section' => 'themename_color_scheme',
          'type' => 'select',
          'choices' => array(
               'value1' => 'Choice 1',
               'value2' => 'Choice 2',
               'value3' => 'Choice 3',
          ),
     ));
     
     $wp_customize->add_setting('themename_theme_options[image_upload_test]', array(
          'default' => 'image.jpg',
          'capability' => 'edit_theme_options',
          'type' => 'option',
     ));
     
     $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload_test', array(
          'label' => __('Image Upload Test', THEME),
          'section' => 'themename_color_scheme',
          'settings' => 'themename_theme_options[image_upload_test]',
     )));

     $wp_customize->add_setting('themename_theme_options[upload_test]', array(
          'default' => 'arse',
          'capability' => 'edit_theme_options',
          'type' => 'option',
     ));

     $wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, 'upload_test', array(
          'label' => __('Upload Test', THEME),
          'section' => 'themename_color_scheme',
          'settings' => 'themename_theme_options[upload_test]',
     )));


     $wp_customize->add_setting('themename_theme_options[link_color]', array(
          'default' => '000',
          'sanitize_callback' => 'sanitize_hex_color',
          'capability' => 'edit_theme_options',
          'type' => 'option',
     ));

     $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
          'label' => __('Link Color', THEME),
          'section' => 'themename_color_scheme',
          'settings' => 'themename_theme_options[link_color]',
     )));


     $wp_customize->add_setting('themename_theme_options[page_test]', array(
          'capability' => 'edit_theme_options',
          'type' => 'option',
     ));
     
     $wp_customize->add_control('themename_page_test', array(
          'label' => __('Page Test', THEME),
          'section' => 'themename_color_scheme',
          'type' => 'dropdown-pages',
          'settings' => 'themename_theme_options[page_test]',
     ));
     
     $categories = get_categories();
     $cats = array();
     $i = 0;
     foreach($categories as $category){
          if($i==0){
               $default = $category->slug;
               $i++;
          }
          $cats[$category->slug] = $category->name;
     }

     $wp_customize->add_setting('_s_f_slide_cat', array(
          'default' => $default
     ));
     $wp_customize->add_control( 'cat_select_box', array(
          'settings' => '_s_f_slide_cat',
          'label' => 'Select Category:',
          'section' => '_s_f_home_slider',
          'type' => 'select',
          'choices' => $cats,
     ));*/
});
?>