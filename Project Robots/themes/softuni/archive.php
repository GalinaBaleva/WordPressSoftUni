<?php get_header (); ?>
<div class="intro row">
    <div class="overlay"></div>
    <div class="col-sm-12">
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">
                <?php the_title (); ?>
            </li>
        </ol>
    </div>
</div> <!-- /.intro.row -->
</div> <!-- /.container -->
<div class="nutral"></div>
</section> <!-- /#header -->

<!-- FAQ -->
<section class="faq">
    <?php if ( have_posts () ) : ?>
        <?php while ( have_posts () ) :
            the_post (); ?>
            <?php get_template_part ( 'partials/content', 'post' ) ?>
        <?php endwhile; ?>

        <div style="text-align:center;">
            <?php
            the_posts_pagination (
                array(
                    'mid_size'  => 2,
                    'prev_text' => __ ( 'previos', 'robots' ),
                    'next_text' => __ ( 'next', 'robots' ),
                ) );
            ?>

            <!-- <?php
            posts_nav_link ( '.', 'previos page', 'next page' )
                ?> -->
        </div>

    <?php else : ?>

        Sorry, there is nothing I can show you!

    <?php endif; ?>
</section>

<?php get_footer (); ?>