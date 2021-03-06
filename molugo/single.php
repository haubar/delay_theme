<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage delay report
 * @since delay 1.0
 */

  get_header(); ?>

  	<div class="banner mb-h">
<?php //echo get_firest_image(); ?>
		<!--<img src="https://fakeimg.pl/1000x363/aaa/">-->
		<?php 
			if( has_post_thumbnail() ):
				echo get_the_post_thumbnail(\null, 'single-thumb');
			endif; 
		?>
		<div class="sort"><?php echo get_the_category()[0]->cat_name; ?></div>
	</div>
  	<div class="wrapper default">

	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
	?>
     <div class="title"><?php the_title(); ?></div>
		
		<div class="main">
			<div class="date">
				<span><?php the_time('m'); ?></span>
				<span><?php the_time('d'); ?></span>
				<span><?php the_time('D'); ?></span>
			</div>
			<div class="other">
				<div class="writer">作者<span><?php the_author() ?></span></div>
				<div class="view"><img src="<?php bloginfo('template_directory') ?>/assets/images/icon-12.png" alt=""><?php if(function_exists('the_views')) { the_views(); } ?></div>
				<div class="img-src">圖片來源：<a href="<?php the_field('image_source_url') ?>" target='_blank'><?php the_field('image_source_name') ?></a></div>
			</div>
			<!--<div class="social pc-h">
				<a href="#" class="like"><img src="<?php //bloginfo('template_directory') ?>/assets/images/icon-4.png" alt="icon like"></a>
				<a href="#" class="link"><img src="<?php //bloginfo('template_directory') ?>/assets/images/icon-3.png" alt="icon link"></a>
			</div>-->
			<dl class="content">
				<?php the_content('Read the rest of this entry &raquo;'); ?>

				<?php the_tags('<p class="tags">', ', ', '</p>'); ?>
			</dl>
			<div class="more">
				<!--<div class="social">
					<a href="#" class="like"><img src="<?php //bloginfo('template_directory') ?>/assets/images/icon-4.png" alt="icon like"></a>
					<a href="#" class="link"><img src="<?php //bloginfo('template_directory') ?>/assets/images/icon-3.png" alt="icon link"></a>
				</div>-->
				<div class="title">延伸閱讀</div>
				<?php related_posts() ?>
			</div>
			<div class="writer-intro">
				<div class="title">
					<img src="<?php bloginfo('template_directory') ?>/assets/images/icon-14.png">
					作者介紹
				</div>
				<div class="intro">
					<?php echo get_avatar(get_the_author_meta('ID'), 100);?>
					<div class="name"><?php the_author() ?></div>
					<div class="txt"><?php the_author_meta('description');?></div>
				</div>

			</div>
			<!--<div class="recom">
				<div class="title">
					<img src="<?php bloginfo('template_directory') ?>/assets/images/icon-15.png">
					編輯推薦
				</div>
				<div class="col">
					<img src="https://fakeimg.pl/312x112/aaa/">
					<a class="txt" href="#">爲宣戰主權 灰貓竟然這樣對待電腦</a>
				</div>
				<div class="col">
					<img src="https://fakeimg.pl/312x112/aaa/">
					<a class="txt" href="#">爲宣戰主權 灰貓竟然這樣對待電腦</a>
				</div>
			</div>-->
		</div>

	<?php endwhile; ?>

	<?php //wp_pagenavi(); ?>

		<div class="footer mb-h">
			<a href="https://www.facebook.com/delayreport" class="fb"></a>
			<a href="#" class="email"></a>
			<a href="<?php the_permalink() ?>" class="link"></a>
			<img src="<?php bloginfo('template_directory') ?>/assets/images/copyright.png" alt="copyright">
		</div>
	</div>


<?php get_footer(); ?>
