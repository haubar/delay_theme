<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage delay report
 * @since delay 1.0
 */

  get_header(); ?>

	<div class="wrapper list">

		<?php if ( have_posts() ) : ?>
        
        <?php while ( have_posts() ) : the_post(); ?>

		<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
		?>

	   <?php endwhile; ?>

		<?php else : ?>

        <div class="news-box">
			
			<div class="left">
				<p>很抱歉,找不到你所搜尋的文章,你可以試著用

                其他關鍵字再次搜尋。</p>
                
			</div>
			<?php get_search_form(); ?>
			<div class="social mb-h">
				<a href="#" class="like"><img src="<?php bloginfo('template_directory') ?>/assets/images/icon-4.png" alt="icon like"></a>
				<a href="#" class="link"><img src="<?php bloginfo('template_directory') ?>/assets/images/icon-3.png" alt="icon link"></a>
			</div>
		</div>


        <?php endif; ?>



<?php get_footer(); ?>