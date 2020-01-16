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

?>