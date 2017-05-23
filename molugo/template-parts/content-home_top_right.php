<?php
/**
 * Template part for displaying posts on the home page.
 *
 * @package Revelar
 */

$revelar_has_thumbnail = '';

if ( ! get_the_post_thumbnail() ) :
	$revelar_has_thumbnail = 'no-thumbnail';
endif;
?>

	<div id="post-<?php the_ID(); ?>" class="news-box">
		<!--<img src="http://fakeimg.pl/417x276/ccc/" alt="img" class="mb-h">-->
		<?php 
			if( has_post_thumbnail() ):
				echo get_the_post_thumbnail(\null, 'index-slave-thumb', ['class' => 'mb-h']);
			endif; 
		?>
		<div class="date pc-h"><?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php the_time('d'); ?></div>
		<div class="title">
			<div class="sort"><?php echo get_the_category()[0]->cat_name; ?></div>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</div>
	</div>