<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();

$container = get_theme_mod('understrap_container_type');
?>

<?php if (is_front_page() && is_home()) : ?>
    <?php get_template_part('global-templates/hero'); ?>
<?php endif; ?>

    <div class="wrapper" id="index-wrapper">

        <div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

            <div class="row">

                <main class="site-main" id="main">


                    <section>                   <!-- Section "Room for improvements" -->
                        <div class="row">

                            <div class="col-lg-6 col-md-12 room-img">

                                <?php

                                $image = get_field('img-sect');

                                if( !empty($image) ): ?>

                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                <?php endif; ?>

                            </div>

                            <div class="col-lg-6 col-md-12 title-sect">

                                <h2><?php the_field('title'); ?></h2>
                                <p><?php the_field('sub_title'); ?></p>

                            </div>

                        </div>                        <!-- /.row -->

                        <div class="row">

                            <div class="col-lg-3 room-item">
                                <h3>Slow reaction</h3>
                                <p>We are flexible and fast-reaction digital agency.</p>
                            </div>

                            <div class="col-lg-3 room-item">
                                <h3>Looks like other</h3>
                                <p>There is no staying in any one place.</p>
                            </div>


                            <div class="col-lg-3 room-item">
                                <h3>User unfriendly</h3>
                                <p>For at one and the same time everything has to be done everywhere.</p>
                            </div>

                            <div class="col-lg-3 room-item">
                                <h3>Chaotic connections</h3>
                                <p>There is no staying in anu one place</p>
                            </div>

                        </div>                        <!-- /.row -->
                    </section>          <!-- End of Section "Room for improvements" -->

                    <section>           <!--Section "We help"-->

                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <h2>We help</h2>
                                <p>We are flexible and fast-reaction digital agency.
                                    There is no staying in any one place; for at one and the same time everything has to
                                    be done everywhere.</p>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <img src="<?php bloginfo("template_url"); ?>/img/man-with-comp.png" alt="Man works">
                            </div>
                        </div>

                        <div class="row">

                            <?php $args = [
                                'post_type' => 'team'
                            ];
                            query_posts($args);
                            while (have_posts()) : the_post(); ?>

                                <div class="col-lg-4">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php the_content() ?></p>
                                </div>

                            <?php
                            endwhile; // End of the loop.?>

                        </div>

                    </section>          <!--End of Section "We help"-->


                    <section>           <!--Section "Cases"-->

                        <h2>Cases</h2>
                        <p>Medical market</p>

                        <div class="row">

                            <?php $args = [
                                'post_type' => 'case',
                                'posts_per_page' => 2,
                                'order' => 'ASC'
                            ];
                            query_posts($args);
                            while (have_posts()) : the_post(); ?>

                                <div class="col-lg-5">

                                    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">


                                        <div class="img-case-sect"><?php the_post_thumbnail('spec_thumb'); ?></div>

                                        <div class="title-case">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                        <div class="case-content"><?php the_content(); ?></div>


                                    </article><!-- #post-## -->

                                </div>
                                <!-- /.col-5 -->

                            <?php
                            endwhile; // End of the loop.?>


                            <div class="col-lg-2">
                                <div class="read-all-button">
                                    <a href="<?php echo get_page_link(46); ?>">
                                        ALL PROJECTS
                                    </a>
                                </div>
                            </div>
                            <!-- /.col-lg-2 -->
                        </div>
                        <!-- /.row -->


                    </section>          <!--End of Section "Cases"-->


                </main><!-- #main -->


            </div><!-- #primary -->


        </div><!-- .row -->

    </div><!-- Container end -->

    </div><!-- Wrapper end -->

<?php get_footer(); ?>