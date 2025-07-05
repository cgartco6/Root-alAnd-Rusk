<?php
/*
Plugin Name: WPML Lite
Description: Simple language toggler
*/

add_shortcode('lang_switcher', function() {
    return '<select onchange="location.href=this.value">
        <option value="?lang=en">English</option>
        <option value="?lang=af">Afrikaans</option>
    </select>';
});
