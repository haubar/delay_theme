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

	

	<div class="wrapper index">

	
	<!--top area-->
		<div class="top">
			<div class="left">
			<?php $top_cat_pro = '娛樂'; ?>
			<?php query_posts( 'category_name='.$top_cat_pro.'&posts_per_page=1' ); ?>
				
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
							get_template_part( 'template-parts/content', 'home_top_left' );
						?>
					<?php endwhile; ?>
				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>
			</div>
			<div class="right">
			<?php $top_cat_sec = '專題'; ?>
			<?php query_posts( 'category_name='.$top_cat_sec.'&posts_per_page=2' ); ?>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
							get_template_part( 'template-parts/content', 'home_top_right' );
						?>
					<?php endwhile; ?>
				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>
			</div>
		</div>



     <!--mid area-->
		<div class="mid">
			<div class="left">
			<?php $mid_cat = '頭條'; ?>
			<?php query_posts( 'category_name='.$mid_cat.'&posts_per_page=8' ); ?>
				<div class="header"><?php echo $mid_cat; ?></div>
				<div class="top-line">
					<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
							get_template_part( 'template-parts/content', 'home_mid' );
						?>
					<?php endwhile; ?>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="right sp-topic">
			<?php $mid_cat_pro = '專題'; ?>
			<?php query_posts( 'category_name='.$mid_cat_pro.'&posts_per_page=1' ); ?>
				<div class="header"><?php echo $mid_cat_pro; ?></div>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
							get_template_part( 'template-parts/content', 'home_mid_pro' );
						?>
					<?php endwhile; ?>
				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>
			</div>
		</div>




	<!--bottom area-->
	<div class="bottom">
		
		<?php $array_cat = ['社會', '國際', '最新']; ?>
		<?php foreach ($array_cat as $key => $value) { ?>
			<div class="col">
			<?php query_posts( 'category_name='.$value.'&posts_per_page=3' ); ?>
			<div class="header"><?php echo $value; ?></div>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
							get_template_part( 'template-parts/content', 'home_bottom' );
						?>
					<?php endwhile; ?>
				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>
			</div>
		<?php } ?>	

	</div>

	

	    <div class="footer mb-h">
			<a href="#" class="fb"></a>
			<a href="#" class="email"></a>
			<img src="<?php bloginfo('template_directory') ?>/assets/images/copyright.png" alt="copyright">
		</div>
	</div>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>


	
