<?php


$revelar_has_thumbnail = '';

if ( ! get_the_post_thumbnail() ) :
	$revelar_has_thumbnail = 'no-thumbnail';
endif;
?>

				
	<div id="post-<?php the_ID(); ?>" class="news-box">
		<!--<img src="http://fakeimg.pl/326x217/ccc/" alt="" >-->
		<?php 
			if( has_post_thumbnail() ):
				echo get_the_post_thumbnail(\null, 'index-list-thumb');
			endif; 
		?>
		<div class="title">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</div>
	</div>
			

	