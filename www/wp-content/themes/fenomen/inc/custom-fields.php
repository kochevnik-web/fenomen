<?php
    add_action( 'acf/init', 'add_fenomen_settings' );

    function add_fenomen_settings() {
        if ( function_exists( 'acf_add_options_page' ) ) {
	
            acf_add_options_page( array(
                'page_title' 	  => 'Настройки темы Fenomen',
                'menu_title'	  => 'Настройки Fenomen',
                'menu_slug' 	  => 'fenomen-settings',
                'capability'	  => 'edit_posts',
                'update_button'   => __( 'Сохранить', 'fenomen' ),
                'updated_message' => __( "Настройки сохранены", 'fenomen' ),
                'icon_url'        => 'dashicons-excerpt-view',
            ));
            
        }
    }

    add_action( 'acf/init', 'fenomen_add_acf_fields_settings' );

    function fenomen_add_acf_fields_settings() {
        if ( function_exists( 'acf_add_local_field_group' ) ) {
            acf_add_local_field_group(array(
                'key'    => 'group_fenomen_settings',
                'title'  => 'Настройки для шаблона Fenomen',
                'fields' => array(
                    array(
                        'key'     => 'field_header_fenomen_phone',
                        'label'   => 'Номер телефона',
                        'name'    => 'header_fenomen_phone',
                        'type'    => 'text',
                        'wrapper' => array(
                            'width' => '50',
                        ),
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'options_page',
                            'operator' => '==',
                            'value' => 'fenomen-settings',
                        ),
                    ),
                ),
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'seamless',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'active' => true,
            ));
        }
    }

?>