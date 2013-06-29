<?php get_header(); ?>

<div class="container top-30">
 <div class="row-fluid">
  <div class="span5">
   <div id="slider-home" class="radius">
   <?php echo do_shortcode('[slider category="home" numberposts="5"]') ?>
   </div>
   <div id="amozesh">
    <a target="_blank" href="http://94.183.128.209/" data-toggle="tooltip" title="سامانه آموزش موسسه کاوش"><img id="amozesh1" src="<?php echo get_template_directory_uri(); ?>/images/amozesh.png" alt="سامانه آموزش"/></a>
   </div><br />
  </div>
  
  <div class="span7" id="home-left-side">
	<div class="tabbable">
		<div class="tab-content home">
			<div class="tab-pane fade in active " id="tab-news">
				<div class="row-fluid">
					<section>
						<div class="span5">
						<h1>آخرین اخبار و اطلاعیه‌ها</h1>
							<?php query_posts(array('post_type' => 'post', 'posts_per_page' => 7)); //,'offset' =>4 ?>
							<?php while (have_posts()) : the_post(); ?>
							<article>
							<h3><a href="<?php the_permalink() ?>" title="لینک مستقیم به <?php the_title(); ?>"><?php the_title(); ?></a></h3>
							</article>
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>

						</div>
						<div class="span7">
							<?php query_posts(array('post_type' => 'post', 'tag'=>'topnews','posts_per_page' => 4)); ?>
							<?php while (have_posts()) : the_post(); ?>
							<article class="last-news">
								<div class="postThumb">
									<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" >
										<?php if(has_post_thumbnail()) the_post_thumbnail(); else{ echo"<img src='"; bloginfo('template_directory'); echo"/images/post_thumb.jpg' alt='"; the_title(); echo"' />"; } ?>
									</a>
								</div>
								<h2><a href="<?php the_permalink() ?>" title="لینک مستقیم به <?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<?php wpe_excerpt('wpe_excerptlength_home', ' wpe_excerptmore'); ?>
							</article>
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>
						</div>
					</section>
				</div>
			</div>
			
		
			<div class="tab-pane fade in" id="tab-board">
				<div class="row-fluid">
					<section>
						<div class="span5">
						
						<h1>تابلوی اعلانات دانشگاه</h1>
							<?php query_posts(array('post_type' => 'board','posts_per_page' => 7,'offset' =>7)); ?>
							<?php while (have_posts()) : the_post(); ?>
							<article>
								<h3><a href="<?php the_permalink() ?>" title="لینک مستقیم به <?php the_title(); ?>"><?php the_title(); ?></a></h3>
							</article>
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>

						</div>
						<div class="span7">
											
							<?php query_posts(array('post_type' => 'board','posts_per_page' => 7)); ?>
							<?php while (have_posts()) : the_post(); ?>
							<article>
								<h2><a href="<?php the_permalink() ?>" title="لینک مستقیم به <?php the_title(); ?>"><?php the_title(); ?></a> <small>(
								
<time class="col" datetime="<?php echo date('Y-m-d'); ?>"><abbr title= "تاریخ درج: <?php the_time('j M Y ساعت g:i a'); ?>"><?php the_time('j M'); ?></abbr></time>
<time class="col" datetime="2011-09-28"></time>
								
								
								)</small></h2>
								
							</article>
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>

						</div>
					</section>
				</div>		
			</div>
		
		
			<div class="tab-pane fade in" id="tab-circular">
				<div class="row-fluid">
					<section>
						<div class="span5">
						
						<h1>آخرین آئین‌نامه‌ها و بخش‌نامه‌ها</h1>
							<?php query_posts(array('post_type' => 'circular','posts_per_page' => 7,'offset' =>4)); ?>
							<?php while (have_posts()) : the_post(); ?>
							<article>
								<h3><a href="<?php the_permalink() ?>" title="لینک مستقیم به <?php the_title(); ?>"><?php the_title(); ?></a></h3>
							</article>
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>

						</div>
						<div class="span7">
											
							<?php query_posts(array('post_type' => 'circular','posts_per_page' => 4)); ?>
							<?php while (have_posts()) : the_post(); ?>
							<article>
								<h2><a href="<?php the_permalink() ?>" title="لینک مستقیم به <?php the_title(); ?>"><?php the_title(); ?></a></h2>
							</article>
							<?php wpe_excerpt('wpe_excerptlength_home', ' wpe_excerptmore'); ?>
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>

						</div>
					</section>
				</div>
			</div>
		
			<div class="tab-pane fade in" id="tab-student">
				<section>
					<?php wp_nav_menu( array( 'container_id' => '','container_class' => 'menu-custom radius', 'theme_location' => 'student','fallback_cb'=> 'fallbackmenu' ) ); ?>
				</section>
			</div>
			<div class="tab-pane fade in" id="tab-blogroll">
				<section>
					<?php wp_nav_menu( array( 'container_id' => '','container_class' => 'menu-custom radius', 'theme_location' => 'blogroll','fallback_cb'=> 'fallbackmenu' ) ); ?>
				</section>
			</div>
			<div class="tab-pane fade in" id="tab-service">
				<section>
					<?php wp_nav_menu( array( 'container_id' => '','container_class' => 'menu-custom radius', 'theme_location' => 'service','fallback_cb'=> 'fallbackmenu' ) ); ?>
				</section>
			</div>
	
		</div>
	</div>
  
  
  </div>
 </div>
 <hr id="home-line" />
 <div class="row-fluid">
  <div class="span12 tabs-below">
   <ul class="nav nav-tabs radius" id="myTab">
    <li class="active"><a href="#tab-news" data-toggle="tab" title="اخبار و اطلاعیه‌ها">اخبار و اطلاعیه‌ها</a></li>
	<li><a href="#tab-board" data-toggle="tab" title="تابلوی اعلانات آموزشی">تابلوی اعلانات آموزشی</a></li>
    <li><a href="#tab-circular" data-toggle="tab" title="آئین‌نامه‌ها و بخش‌نامه‌ها">آئین‌نامه‌ها و بخش‌نامه‌ها</a></li>
	<li><a href="#tab-student" data-toggle="tab" title="امور دانشجویی">امور دانشجویی</a></li>
	<li><a href="#tab-blogroll" data-toggle="tab" title="سایت های پیشنهادی">سایت های پیشنهادی</a></li>
	<li><a href="#tab-service" data-toggle="tab" title="سرویس‌ها">سرویس‌ها</a></li>
   </ul>
  </div>
 </div>
</div>

<?php get_footer(); ?>