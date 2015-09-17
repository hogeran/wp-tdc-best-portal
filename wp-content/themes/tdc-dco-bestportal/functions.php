<?php
    /** 
        @package functions
        @category functions
        @since tdc-dco-bestportal 0.1
    */



        function Tdc_Dco_Hack_Wp_Title_For_Home( $title )
        {
            if( empty( $title ) && ( is_home() || is_front_page() ) ) {
                // return __( 'DCO', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
                return __( 'DCO', 'theme_domain' );
            }
                return $title;
         }
        add_filter( 'wp_title', 'Tdc_Dco_Hack_Wp_Title_For_Home' );



        function Tdc_Dco_Theme_Setup(){

            add_theme_support('menus');

            register_nav_menu('main_menu', 'Main Menu');
            register_nav_menu('foot_menu', 'Foot Menu');

        }
        add_action('init', 'Tdc_Dco_Theme_Setup');
?>