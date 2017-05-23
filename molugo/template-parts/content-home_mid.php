<?php


$revelar_has_thumbnail = '';

if ( ! get_the_post_thumbnail() ) :
	$revelar_has_thumbnail = 'no-thumbnail';
endif;
?>

				

	<div id="post-<?php the_ID(); ?>" class="news-box">
		<!--<img src="http://fakeimg.pl/50x50/ccc/" alt="" class="mb-h left">-->
		<?php 
			if( has_post_thumbnail() ):
				echo get_the_post_thumbnail(\null, 'index-center-thumb', ['class'=>'mb-h', 'class'=>'left']);
			endif; 
		?>
		<div class="title right">
			<!--<div class="sort pc-h">政治</div>-->
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			<div class="writer mb-h"><?php the_author() ?></div>
			<div class="date"><?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php the_time('d'); ?></div>
		</div>
	</div>	