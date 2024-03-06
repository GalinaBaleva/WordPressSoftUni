<?php
/**
 * Plugin Name: My First Plagin
 */

//  var_dump( 'hello from our plugin');

//Hooks

//actions

function my_first_action(){
    ?>
<div>
    <?php echo "hello, from my action"; ?>
</div>
<?php
}

add_action( 'wp_body_open', 'my_first_action' );

//filter

/**
 * A function that modifies the title of the post
 */

function modify_the_title( $title){
    $title = $title . ' Has been modifided!';

    return $title;
}

add_filter('the_title', 'modify_the_title');

function modify_body_class($calasses){
    $my_custom_class = array(
        'my-custum-body-class'
    );
    $calasses = array_merge($calasses, $my_custom_class);
    return $calasses;
}

add_filter('body_class', 'modify_body_class');

/**
 * Adding meta in head
 */

 function add_og_tag(){
    ?>
<meta name="og:title" value='test value'>
<?php
 }

 add_action('wp_head', 'add_og_tag');

 function my_footer_hook(){
    var_dump('in the footer');
 }

 add_action( 'wp_footer', 'my_footer_hook');

 function insert_div_to_the_content( $content){
    
    if(! is_single()){
        return $content;
    }

    $div = '<div style="background: red;">Our Custom Div here</div>';
    $content = $content . $div;

    $content = $content . show_last_two_posts();
    return $content;
 }

 add_filter( 'the_content', 'insert_div_to_the_content');

 function post_word_count( $content){
        
    if(! is_single()){
        return $content;
    }

    $word_conunt = str_word_count($content);
    ?>
<div>
    This post has <?php echo $word_conunt; ?> words in it.
</div>

<?php
    return $content;
 }
 add_action('the_content', 'post_word_count');

 //is_admit is NOT security hook

 function is_adnit_in_action(){
    if(is_admin()){
        var_dump('this is the dashboard');
    } else {
        var_dump('thi is NOT the dashboard');
    }
 }

 add_action('admin_init', 'is_adnit_in_action'); 


 /**
  * This function will show the last two posts;
  */

  function show_last_two_posts(){
    
    $args = array(
        'post_type'=> 'post',
        'post_status' => 'published',
        'post_per_page' => 2
    );

    $last_two_posts = new WP_Query( $args );

    ?>

 <?php if($last_two_posts->have_posts()) : ?>
<ul>
    <?php while($last_two_posts->have_posts()  ) : $last_two_posts->the_post(); ?>
    <li>
        <a href="<?php echo get_the_permalink(); ?>">
            <?php echo the_title(); ?>
        </a>
    </li>
    <?php endwhile; ?>
</ul>
<?php endif; ?>

<?php
wp_reset_postdata(); 

  }