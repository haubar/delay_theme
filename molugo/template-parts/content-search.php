

		<div id="post-<?php the_ID(); ?>" class="news-box">
			<!--<img src="http://fakeimg.pl/367x210/aaa/" alt="img" class="left">-->
			<?php 
				if( has_post_thumbnail() ):
					echo get_the_post_thumbnail(\null, 'list-thumb', ['class' => 'left'] );
				endif; 
			?>
			<div class="left">
				<div class="date pc-h"><?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php the_time('d'); ?></div>
				<div class="date mb-h">
					<span><?php the_time('m'); ?>/<?php the_time('d'); ?></span>
					<span><?php the_time('w'); ?></span>
					
				</div>
				<div class="other">
					<div class="writer"><?php the_author() ?></div>
					<div class="view"><img src="<?php bloginfo('template_directory') ?>/assets/images/icon-12.png" alt=""><?php if(function_exists('the_views')) { the_views(); } ?></div>
				</div>
				<div class="title">
					<div class="sort pc-h"><?php echo get_the_category()[0]->cat_name; ?></div>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</div>
			</div>
			<!--<div class="social mb-h">
				<a href="#" class="like"><img src="<?php //bloginfo('template_directory') ?>/assets/images/icon-4.png" alt="icon like"></a>
				<a href="#" class="link"><img src="<?php //bloginfo('template_directory') ?>/assets/images/icon-3.png" alt="icon link"></a>
			</div>-->
		</div>
		
	