<?php get_header(); ?>
                   
                        <div class="intro row">
                            <div class="overlay"></div>
                            <div class="col-sm-12">
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">FAQ</li>
                                </ol>
                            </div>
                        </div> <!-- /.intro.row -->
                    </div> <!-- /.container -->
                    <div class="nutral"></div>
                </section> <!-- /#header -->

            <!-- FAQ -->
                <section class="faq">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : ?>
                            <div class="container page-bgc">
                     <div class="row">
                            <div class="col-sm-12">
                                <div class="title-box">
                                    <h2 class="title mt0">Questions</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <p class="inner-p">
                                    Lorem ipsum dolor sit amet event landing template, consectetur adipisicing elit. Suscipit corrupti facilis event landing template, enim earum numquam minus veritatis nobis accusamus similique, totam?
                                </p>
                            </div>
                        </div>
                    </div>
                        <?php endwhile; ?>

                    <? else : ?>

                        Sorry, there is nothing I can show you!

                    <?php endif; ?>
                </section>

<?php get_footer(); ?>


