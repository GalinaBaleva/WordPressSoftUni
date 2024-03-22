<?php

// place for general functions


//Options for debuging
// $var = array(
//     1,
//     2,
//     3,
//     4,
//     5,
//     6,
// );

// echo '<pre>';
// var_dump($var);
// echo '</pre>';

// error_log( 'Custom message in the error log with variable' . $array );


/**
 * Custom shortcode to show the title by ID
 */


function show_post_by_id($atts)
{
    $shortcode_atts = shortcode_atts(
        array(
            'id' => '',
        ),
        $atts
    );
    $title = '';

    if (!empty($shortcode_atts['id'])) {
        $title = get_the_title($shortcode_atts['id']);
    }

    return $title;
}

add_shortcode('show_post_title', 'show_post_title_by_id');
