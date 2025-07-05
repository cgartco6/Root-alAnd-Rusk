<?php
/*
Plugin Name: Tidio Chatbot Connector
Description: Live chat + AI integration
*/

add_action('wp_footer', 'inject_tidio_chat');
function inject_tidio_chat() {
    echo "<script src='//code.tidio.co/your-public-id.js'></script>";
}
