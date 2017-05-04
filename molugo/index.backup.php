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

<?php //if (have_posts()) : ?>
	

	<!--top area-->
	<?php //while (have_posts()) : the_post(); ?>
		<div class="top">
			<div class="left">
				<div class="news-box">
					<img src="http://fakeimg.pl/576x576/aaa/" alt="img">
					<div class="date">
						<span><?php the_time('m'); ?></span>
						<span><?php the_time('d'); ?></span>
						<span><?php the_time('D'); ?></span>
					</div>
					<div class="social">
						<a href="#" class="like"><img src="<?php bloginfo('template_directory') ?>/assets/images/icon-4.png" alt="icon like"></a>
						<a href="#" class="link"><img src="<?php bloginfo('template_directory') ?>/assets/images/icon-3.png" alt="icon link"></a>
					</div>
					<div class="title">
						<div class="sort">政治</div>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>					</div>
				</div>
			</div>
			<div class="right">
				<div class="news-box">
					<img src="http://fakeimg.pl/417x276/ccc/" alt="img" class="mb-h">
					<div class="date pc-h"><?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php the_time('d'); ?></div>
					<div class="social">
						<a href="#" class="like"><img src="<?php bloginfo('template_directory') ?>/assets/images/icon-4.png" alt="icon like"></a>
						<a href="#" class="link"><img src="<?php bloginfo('template_directory') ?>/assets/images/icon-3.png" alt="icon link"></a>
					</div>
					<div class="title">
						<div class="sort">政治</div>
					    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
				<div class="news-box">
					<img src="http://fakeimg.pl/417x276/ccc/" alt="img" class="mb-h">
					<div class="date pc-h"><?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php the_time('d'); ?></div>
					<div class="social">
						<a href="#" class="like"><img src="<?php bloginfo('template_directory') ?>/assets/images/icon-4.png" alt="icon like"></a>
						<a href="#" class="link"><img src="<?php bloginfo('template_directory') ?>/assets/images/icon-3.png" alt="icon link"></a>
					</div>
					<div class="title">
						<div class="sort">政治</div>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
			</div>
		</div>
	<?php //endwhile; ?>



     <!--mid area-->
		<div class="mid">
			<div class="left">
				<div class="header">頭條</div>
				<div class="top-line">
					<div class="news-box">
						<img src="http://fakeimg.pl/50x50/ccc/" alt="" class="mb-h left">
						<div class="title right">
							<div class="sort pc-h">政治</div>
						    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							<div class="writer mb-h"><?php the_author() ?></div>
							<div class="date"><?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php the_time('d'); ?></div>
						</div>
					</div>
					<div class="news-box">
						<img src="http://fakeimg.pl/50x50/ccc/" alt="" class="mb-h left">
						<div class="title right">
							<div class="sort pc-h">政治</div>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							<div class="writer mb-h"><?php the_author() ?></div>
							<div class="date"><?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php the_time('d'); ?></div>
						</div>
					</div>
					<div class="news-box">
						<img src="http://fakeimg.pl/50x50/ccc/" alt="" class="mb-h left">
						<div class="title right">
							<div class="sort pc-h">政治</div>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							<div class="writer mb-h"><?php the_author() ?></div>
							<div class="date"><?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php the_time('d'); ?></div>
						</div>
					</div>
					<div class="news-box">
						<img src="http://fakeimg.pl/50x50/ccc/" alt="" class="mb-h left">
						<div class="title right">
							<div class="sort pc-h">政治</div>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							<div class="writer mb-h"><?php the_author() ?></div>
							<div class="date"><?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php the_time('d'); ?></div>
						</div>
					</div>
					<div class="news-box">
						<img src="http://fakeimg.pl/50x50/ccc/" alt="" class="mb-h left">
						<div class="title right">
							<div class="sort pc-h">政治</div>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							<div class="writer mb-h"><?php the_author() ?></div>
							<div class="date"><?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php the_time('d'); ?></div>
						</div>
					</div>
					<div class="news-box">
						<img src="http://fakeimg.pl/50x50/ccc/" alt="" class="mb-h left">
						<div class="title right">
							<div class="sort pc-h">政治</div>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							<div class="writer mb-h"><?php the_author() ?></div>
							<div class="date"><?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php the_time('d'); ?></div>
						</div>
					</div>
					<div class="news-box">
						<img src="http://fakeimg.pl/50x50/ccc/" alt="" class="mb-h left">
						<div class="title right">
							<div class="sort pc-h">政治</div>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							<div class="writer mb-h"><?php the_author() ?></div>
							<div class="date"><?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php the_time('d'); ?></div>
						</div>
					</div>
					<div class="news-box">
						<img src="http://fakeimg.pl/50x50/ccc/" alt="" class="mb-h left">
						<div class="title right">
							<div class="sort pc-h">政治</div>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							<div class="writer mb-h"><?php the_author() ?></div>
							<div class="date"><?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php the_time('d'); ?></div>
						</div>
					</div>
				</div>
			</div>
			<div class="right sp-topic">
				<div class="header">專題</div>
				<div class="news-box">
					<img src="http://fakeimg.pl/598x399/ccc/" alt="">
					<div class="title">
				    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
			</div>
		</div>




	<!--bottom area-->
		<div class="bottom">
			<div class="col">
				<div class="header">政治</div>
				<div class="news-box">
					<img src="http://fakeimg.pl/326x217/ccc/" alt="" >
					<div class="title">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
				<div class="news-box">
					<img src="http://fakeimg.pl/326x217/ccc/" alt="" >
					<div class="title">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
				<div class="news-box">
					<img src="http://fakeimg.pl/326x217/ccc/" alt="" >
					<div class="title">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="header">社會</div>
				<div class="news-box">
					<img src="http://fakeimg.pl/326x217/ccc/" alt="" >
					<div class="title">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
				<div class="news-box">
					<img src="http://fakeimg.pl/326x217/ccc/" alt="" >
					<div class="title">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
				<div class="news-box">
					<img src="http://fakeimg.pl/326x217/ccc/" alt="" >
					<div class="title">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="header">娛樂</div>
				<div class="news-box">
					<img src="http://fakeimg.pl/326x217/ccc/" alt="" >
					<div class="title">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
				<div class="news-box">
					<img src="http://fakeimg.pl/326x217/ccc/" alt="" >
					<div class="title">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
				<div class="news-box">
					<img src="http://fakeimg.pl/326x217/ccc/" alt="" >
					<div class="title">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
			</div>
		</div>

	
<?php //endif; ?>

	    <div class="footer mb-h">
			<a href="#" class="fb"></a>
			<a href="#" class="email"></a>
			<img src="<?php bloginfo('template_directory') ?>/assets/images/copyright.png" alt="copyright">
		</div>
	</div>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>


	
