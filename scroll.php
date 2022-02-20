<?php

/**
 * Plugin Name:     Scroll to Top
 * Plugin URI:      https://f-rahim.github.io/plugins/scroll-to-top
 * Author:          Abdur Rahim
 * Author URI:      https://facebook.com/devrahim26
 * Description:     This plugin can help to add a "Scroll to Top" button in your website bottom. This plugin is a easy to install and no Admin configeration needed. So Just Install and Active. Than just take a look on your or Client website "Bottom-Right" Corner. Thank's for installing.
 * Tags:            Scroll to Top Button, scroll to top, simple scroll to top button
 * Version:         1.0.0
 */

add_action( "wp_footer", "scroll_to_top" );
function scroll_to_top() {?>

    <div id='scroll-top' class="scroll-top show-button">
        <a href="#">
            <img src="<?php echo plugins_url( "assets/images/up-arrow.png", __FILE__ ); ?>" alt="Scroll TO Top">
        </a>
    </div>

<?php }

add_action( "wp_enqueue_scripts", "scroll_to_top_style_and_scripts" );
function scroll_to_top_style_and_scripts() {
    wp_enqueue_style( "scroll-to-top", plugins_url( "assets/css/scroll-to-top.css", __FILE__ ) );

    // jquery script's
    wp_enqueue_script( "scroll-to-top", plugins_url( "assets/js/scroll-to-top.js", __FILE__ ), array( "jquery" ), "", true );
}