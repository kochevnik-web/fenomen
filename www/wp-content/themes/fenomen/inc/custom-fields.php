<?php

    define( 'SETTING_SLUG', 'fenomen-settings' );

    add_action( 'acf/init', 'add_fenomen_settings' );

    function add_fenomen_settings() {
        if ( function_exists( 'acf_add_options_page' ) ) {
	
            acf_add_options_page( array(
                'page_title' 	  => 'Настройки темы Fenomen',
                'menu_title'	  => 'Fenomen',
                'menu_slug' 	  => SETTING_SLUG,
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
                        'key'     => 'field_fenomen_adress',
                        'label'   => 'Адрес',
                        'name'    => 'fenomen_adress',
                        'type'    => 'text',
                        'wrapper' => array(
                            'width' => '33.33',
                        ),
                    ),
                    array(
                        'key'     => 'field_header_fenomen_phone',
                        'label'   => 'Номер телефона',
                        'name'    => 'header_fenomen_phone',
                        'type'    => 'text',
                        'wrapper' => array(
                            'width' => '33.33',
                        ),
                    ),
                    array(
                        'key'     => 'field_fenomen_email',
                        'label'   => 'Email',
                        'name'    => 'fenomen_email',
                        'type'    => 'text',
                        'wrapper' => array(
                            'width' => '33.33',
                        ),
                    ),
                    array(
                        'key'     => 'field_fenomen_instagram',
                        'label'   => 'Ссылка на Instagram',
                        'name'    => 'fenomen_instagram',
                        'type'    => 'text',
                        'wrapper' => array(
                            'width' => '33.33',
                        ),
                    ),
                    array(
                        'key'     => 'field_fenomen_vk',
                        'label'   => 'Ссылка на В Контакте',
                        'name'    => 'fenomen_vk',
                        'type'    => 'text',
                        'wrapper' => array(
                            'width' => '33.33',
                        ),
                    ),
                    array(
                        'key'     => 'field_fenomen_facebok',
                        'label'   => 'Ссылка на В Контакте',
                        'name'    => 'fenomen_facebook',
                        'type'    => 'text',
                        'wrapper' => array(
                            'width' => '33.33',
                        ),
                    ),
                    array(
                        'key'     => 'field_fenomen_contacts_title',
                        'label'   => 'Заголовок блока карты',
                        'name'    => 'fenomen_contacts_title',
                        'type'    => 'text',
                        'wrapper' => array(
                            'width' => '33.33',
                        ),
                    ),
                    array(
                        'key'     => 'field_fenomen_coord',
                        'label'   => 'Координаты',
                        'name'    => 'fenomen_coord',
                        'type'    => 'text',
                        'wrapper' => array(
                            'width' => '33.33',
                        ),
                    ),
                    array(
                        'key'     => 'field_fenomen_map_zoom',
                        'label'   => 'Увеличение карты',
                        'name'    => 'fenomen_map_zoom',
                        'type'    => 'number',
                        'wrapper' => array(
                            'width' => '33.33',
                        ),
                        'min'     => 1,
                        'max'     => 19,
                    ),
                    array(
                        'key'     => 'field_fenomen_open_scholl_link',
                        'label'   => 'Открыть школу ссылка',
                        'name'    => 'fenomen_open_scholl_link',
                        'type'    => 'text',
                        'wrapper' => array(
                            'width' => '33.33',
                        ),
                    ),
                    array(
                        'key'    => 'field_fenomen_head_enquqe_script',
                        'label'  => 'Блок вставки в head',
                        'name'   => 'fenomen_head_enquqe_script',
                        'type'   => 'repeater',
                        'min'    => 0,
                        'max'    => 0,
                        'layout' => 'table',
                        'sub_fields' => array(
                            array(
                                'key'      => 'field_fenomen_head_enquqe_script_name',
                                'label'    => 'Название',
                                'name'     => 'fenomen_head_enquqe_script_name',
                                'type'     => 'text',
                                'required' => 1,
                            ),
                            array(
                                'key'      => 'field_fenomen_head_enquqe_script_area',
                                'label'    => 'Элемент вставки',
                                'name'     => 'fenomen_head_enquqe_script_area',
                                'type'     => 'textarea',
                                'rows'     => 12,
                            ),
                        ),
                    ),
                    array(
                        'key'    => 'field_fenomen_footer_enquqe_script',
                        'label'  => 'Блок вставки в footer',
                        'name'   => 'fenomen_footer_enquqe_script',
                        'type'   => 'repeater',
                        'min'    => 0,
                        'max'    => 0,
                        'layout' => 'table',
                        'sub_fields' => array(
                            array(
                                'key'      => 'field_fenomen_footer_enquqe_script_name',
                                'label'    => 'Название',
                                'name'     => 'fenomen_footer_enquqe_script_name',
                                'type'     => 'text',
                                'required' => 1,
                            ),
                            array(
                                'key'      => 'field_fenomen_footer_enquqe_script_area',
                                'label'    => 'Элемент вставки',
                                'name'     => 'fenomen_footer_enquqe_script_area',
                                'type'     => 'textarea',
                                'rows'     => 12,
                            ),
                        ),
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'options_page',
                            'operator' => '==',
                            'value' => SETTING_SLUG,
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

            acf_add_local_field_group(array(
                'key' => 'acf_event_fields_group',
                'title' => 'Данные турнира',
                'fields' => array(
                    array(
                        'key' => 'field_event_date',
                        'label' => 'Дата проведения',
                        'name' => 'event_date',
                        'type' => 'date_time_picker',
                        'display_format' => 'F j, Y g:i a',
                        'return_format' => 'Y-m-d H:i:s',
                        'first_day' => 1,
                    ),
                    array(
                        'key' => 'field_event_location',
                        'label' => 'Место проведения',
                        'name' => 'event_location',
                        'type' => 'text',
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'event',
                        ),
                    ),
                ),
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => true,
                'description' => '',
            ));
                
        }
    }

    add_action( 'wp_head', 'fenomen_add_head_scripts' );
    add_action( 'wp_footer', 'fenomen_add_head_scripts' );
    function fenomen_add_head_scripts() {
        $hook = doing_filter( 'wp_head' ) ? 'head' : 'footer';
        $opt  = get_option( 'options_fenomen_' . $hook . '_enquqe_script' );
        if ( isset( $opt ) && $opt > 0 ) {
            for( $i = 0; $i < $opt; $i++ ) {
                ?>
                    <!-- <?= get_option( 'options_fenomen_' . $hook . '_enquqe_script_' . $i . '_fenomen_' . $hook . '_enquqe_script_name' ) ?> -->
                        <?= get_option( 'options_fenomen_' . $hook . '_enquqe_script_' . $i . '_fenomen_' . $hook . '_enquqe_script_area' ) ?>
                    <!-- end <?= get_option( 'options_fenomen_' . $hook . '_enquqe_script_' . $i . '_fenomen_' . $hook . '_enquqe_script_name' ) ?> -->
                <?php
            }
        }
    }

    add_action( 'admin_print_styles-toplevel_page_' . SETTING_SLUG, 'fenomen_add_code_styles' );
    function fenomen_add_code_styles() {
        $settings = wp_enqueue_code_editor( array( 'type' => 'text/html' ) );

        if ( $settings === false ) return;

        $id = '';
        $count = get_option( 'options_fenomen_head_enquqe_script' );

        if ( $count > 0 ) {
            for ( $i = 0; $i < $count; $i++ ) {
                $id = 'acf-field_fenomen_head_enquqe_script-row-' . $i . '-field_fenomen_head_enquqe_script_area';

                wp_add_inline_script(
                    'code-editor',
                    sprintf( 'jQuery(function(){wp.codeEditor.initialize("%s", %s );} )', $id, wp_json_encode( $settings ) )
                );
                
            }
        }

        $count = get_option( 'options_fenomen_footer_enquqe_script' );
        if ( $count > 0 ) {
            for ( $i = 0; $i < $count; $i++ ) {
                $id = 'acf-field_fenomen_footer_enquqe_script-row-' . $i . '-field_fenomen_footer_enquqe_script_area';

                wp_add_inline_script(
                    'code-editor',
                    sprintf( 'jQuery(function(){wp.codeEditor.initialize("%s", %s );} )', $id, wp_json_encode( $settings ) )
                );
                
            }
        }
    }

?>