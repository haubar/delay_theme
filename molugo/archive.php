<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage delay report
 * @since delay 1.0
 */

  get_header(); 
  
  ?>

		<div class="wrapper list">

	<?php if (have_posts()) : ?>
        <?php  while ( have_posts() ) : the_post(); ?>

        <div class="news-box">
			<img src="http://fakeimg.pl/367x210/aaa/" alt="img" class="left">
			<div class="left">
				<div class="date pc-h"><?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php the_time('d'); ?></div>
				<div class="date mb-h">
					<span><?php the_time('m'); ?>/<?php the_time('d'); ?></span>
					<span><?php the_time('D'); ?></span>
					<span>78:78</span>
				</div>
				<div class="other">
					<div class="writer"><?php the_author() ?></div>
					<div class="view"><img src="<?php bloginfo('template_directory') ?>/assets/images/icon-12.png" alt="">978</div>
				</div>
				<div class="title">
					<div class="sort pc-h">政治</div>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</div>
			</div>
			<div class="social mb-h">
				<a href="#" class="like"><img src="<?php bloginfo('template_directory') ?>/assets/images/icon-4.png" alt="icon like"></a>
				<a href="#" class="link"><img src="<?php bloginfo('template_directory') ?>/assets/images/icon-3.png" alt="icon link"></a>
			</div>
		</div>
		
		<?php  endwhile;  ?>
    <?php endif; ?>

		   <div class="footer mb-h">
			<a href="#" class="fb"></a>
			<a href="#" class="email"></a>
			<img src="<?php bloginfo('template_directory') ?>/assets/images/copyright.png" alt="copyright">
		</div>
	</div>

   <?php get_footer(); ?>
	