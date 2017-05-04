<?php
/**
 * Front page hook for all WordPress Conditions
 *
 * @since supermag 1.1.0
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'supermag_front_page' ) ) :

    function supermag_front_page() {
        global $supermag_customizer_all_values;
        ?>
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <?php
                if( is_active_sidebar( 'supermag-home' ) ){
                    dynamic_sidebar( 'supermag-home' );
                }
                echo "<div class='clearfix'></div>";
                if ( 1 != $supermag_customizer_all_values['supermag-hide-front-page-content'] ) {

                    if ( 'posts' == get_option( 'show_on_front' ) ) {
                        if ( have_posts() ) : ?>

                            <?php /* Start the Loop */ ?>
                            <?php while ( have_posts() ) : the_post(); ?>

                                <?php

                                /*
                                 * Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content', get_post_format() );
                                ?>

                            <?php endwhile; ?>

                            <?php the_posts_navigation(); ?>

                        <?php else : ?>

                            <?php get_template_part( 'template-parts/content', 'none' ); ?>

                        <?php endif;
                    }
                    else {
                        while ( have_posts() ) : the_post(); ?>

                            <?php get_template_part( 'template-parts/content', 'page' ); ?>

                            <?php
                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                            ?>

                        <?php endwhile; // End of the loop.
                    }
                }
                ?>
            </main>
            <!-- #main -->
        </div><!-- #primary -->
        <?php
    }
endif;
add_action( 'supermag_action_front_page', 'supermag_front_page', 10 );