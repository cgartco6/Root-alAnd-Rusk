<?php
/*
Plugin Name: AI Content Generator
Description: Generates product descriptions and emails using OpenAI
*/

add_action('save_post_product', 'auto_generate_product_description', 10, 3);
function auto_generate_product_description($post_ID, $post, $update) {
    $title = get_the_title($post_ID);
    $prompt = "Generate a detailed product description for: $title";

    $response = wp_remote_post('https://api.openai.com/v1/completions', array(
        'headers' => array(
            'Authorization' => 'Bearer YOUR_API_KEY',
            'Content-Type'  => 'application/json',
        ),
        'body' => json_encode(array(
            'model' => 'text-davinci-003',
            'prompt' => $prompt,
            'max_tokens' => 150,
        )),
    ));

    $body = json_decode(wp_remote_retrieve_body($response));
    if (!empty($body->choices[0]->text)) {
        wp_update_post(array(
            'ID' => $post_ID,
            'post_content' => trim($body->choices[0]->text)
        ));
    }
}
