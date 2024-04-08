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

add_shortcode('show_post_title', 'show_post_by_id');


/**
 * Function that handles the AJAX call and add like to the post
 */

function robots_like()
{
    // var_dump($_POST); die();
    if (empty($_POST['action'])) {
        return;
    }

    $pots_id = esc_attr($_POST['post_id']);


    $likes_number = get_post_meta($pots_id, 'likes', true);

    if (empty($likes_number)) {
        $likes_number = 0;
    }

    //add custom logic to prevent bed users

    update_post_meta($pots_id, 'likes', $likes_number + 1);
}

add_action('wp_ajax_nopriv_robots_like', 'robots_like');
add_action('wp_ajax_robots_like', 'robots_like');

/**
 * Dispay related posts to our single robots view
 */

function robots_display_related_posts($pots_id = 0)
{
    if (empty($pots_id)) {
        return;
    }

    $content = '';

    $related_posts = get_field('related_posts', $pots_id);

    if (!empty($related_posts) && is_array($related_posts)) {

        ?> 
        <h3>Related Posts</h3>
        <?php

        foreach ($related_posts as $post) {
            ?>
            <div class="related-post">
                <a href="<?php get_the_permalink($post->ID)?>">
                    <?php echo $post->post_title?>
                </a>
            </div>
            <?php
        }
    }
}
