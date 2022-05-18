<?php
 
/**
 * Plugin Name:       Plugin
 * Description:       My First Plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      8.1
 * Author:            Abdelhaq Akrate
 */

function Form() {
    echo '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
    echo '<p>';
    echo 'Your Name * <br />';
    echo '<input type="text" name="cf-name" pattern="[a-zA-Z0-9 ]+" value="' . ( isset( $_POST["cf-name"] ) ? esc_attr( $_POST["cf-name"] ) : '' ) . '" size="40" />';
    echo '</p>';
    echo '<p>';
    echo 'Your Email * <br />';
    echo '<input type="email" name="cf-email" value="' . ( isset( $_POST["cf-email"] ) ? esc_attr( $_POST["cf-email"] ) : '' ) . '" size="40" />';
    echo '</p>';
    echo '<p>';
    echo 'Subject * <br />';
    echo '<input type="text" name="cf-subject" pattern="[a-zA-Z ]+" value="' . ( isset( $_POST["cf-subject"] ) ? esc_attr( $_POST["cf-subject"] ) : '' ) . '" size="40" />';
    echo '</p>';
    echo '<p>';
    echo 'Your Message * <br />';
    echo '<textarea rows="10" cols="35" name="cf-message">' . ( isset( $_POST["cf-message"] ) ? esc_attr( $_POST["cf-message"] ) : '' ) . '</textarea>';
    echo '</p>';
    echo '<p><input type="submit" name="cf-submitted" value="Send"/></p>';
    echo '</form>';
}
function sendEmail() {

    if ( isset( $_POST['cf-submitted'] ) ) {
        $name    = sanitize_text_field( $_POST["cf-name"] );
        $email   = sanitize_email( $_POST["cf-email"] );
        $subject = sanitize_text_field( $_POST["cf-subject"] );
        $message = esc_textarea( $_POST["cf-message"] );
        $to = get_option( 'admin_email' );
        $headers = "From: $name <$email>" . "\r\n";
        if ( wp_mail( $to, $subject, $message, $headers ) ) {
            echo '<div>';
            echo '<p>Thanks For Contacting Us.</p>';
            echo '</div>';
        } else {
            echo 'An Unexpected Error Occurred';
        }
    }
}

function cf_shortcode() {
    ob_start();
    sendEmail();
    Form();

    return ob_get_clean();
}
add_shortcode( 'sitepoint_contact_form', 'cf_shortcode' );