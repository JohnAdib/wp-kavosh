<?php get_header(); ?>

<div class="container" id="homepage">
 <div class="row-fluid" id="tabs-data">
  <div class="span5">
   <div id="slider-home" class="radius">
   <?php //echo do_shortcode('[slider category="home" numberposts="5"]') ?>
   <?php //echo do_shortcode( '[cycloneslider id="home"]' ); ?>
   <?php if( function_exists('cyclone_slider') ) cyclone_slider('home'); ?>
   </div>
   <div id="amozesh">
    <a target="_blank" href="http://sama.kavosh.ac.ir/" data-toggle="tooltip" title="سامانه آموزش <?php bloginfo( 'name' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/amozesh.png" alt="سامانه آموزش"/></a>
   </div><br />
  </div>
  
  <div class="span7" id="home-left-side">
	<div class="tabbable">
		<div class="tab-content home">
			<div class="tab-pane fade in active" id="tab-news">
				<p class="tab-title">آخرین اخبار و اطلاعیه‌ها</p>
				<hr class="title-line">
				<div class="row-fluid">
					<section>
						<div class="span5">
							<?php query_posts(array('post_type' => 'post', 'posts_per_page' => 6)); //,'offset' =>3 ?>
							<?php while (have_posts()) : the_post(); ?>
							<article>
							<h3><a href="<?php the_permalink() ?>" title="لینک مستقیم به <?php the_title(); ?>"><?php the_title(); ?></a></h3>
							</article>
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>

						</div>
						<div class="span7 visible-desktop">
							<?php query_posts(array('post_type' => 'post', 'tag'=>'topnews','posts_per_page' => 3)); ?>
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
				<a class="btn btn-archive hidden-phone" target="_blank" href="<?php bloginfo( 'url' ); ?>/pr" title="دسترسی به آرشیو اخبار و اطلاعیه‌ها">آرشیو</a>
			</div>
			
		
			<div class="tab-pane fade in" id="tab-board">
				<p class="tab-title">تابلوی اعلانات دانشگاه</p>
				<hr class="title-line">
				<div class="row-fluid">
					<section>
						<div class="span5 visible-desktop">
						
							<?php query_posts(array('post_type' => 'board','posts_per_page' => 6,'offset' =>6)); ?>
							<?php while (have_posts()) : the_post(); ?>
							<article>
								<h3><a href="<?php the_permalink() ?>" title="لینک مستقیم به <?php the_title(); ?>"><?php the_title(); ?></a></h3>
							</article>
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>

						</div>
						<div class="span7">

							<?php query_posts(array('post_type' => 'board','posts_per_page' => 6)); ?>
							<?php while (have_posts()) : the_post(); ?>
							<article>
								<h2>
									<a href="<?php the_permalink() ?>" title="لینک مستقیم به <?php the_title(); ?>"><?php the_title(); ?></a> 
									<small>(<time class="col" datetime="<?php echo date('Y-m-d'); ?>"><abbr title= "تاریخ درج: <?php the_time('j M Y ساعت g:i a'); ?>"><?php the_time('j M'); ?></abbr></time>)</small>
								</h2>
							</article>
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>

						</div>
					</section>
				</div>		
				<a class="btn btn-archive hidden-phone" target="_blank" href="<?php bloginfo( 'url' ); ?>/board" title="دسترسی به آرشیو تابلوی اعلانات">آرشیو</a>
			</div>
		
		
			<div class="tab-pane fade in" id="tab-circular">
				<p class="tab-title">آخرین آئین‌نامه‌ها و بخش‌نامه‌ها</p>
				<hr class="title-line">
				<div class="row-fluid">
					<section>
						<div class="span5 visible-desktop">
						
							<?php query_posts(array('post_type' => 'circular','posts_per_page' => 6,'offset' =>6)); ?>
							<?php while (have_posts()) : the_post(); ?>
							<article>
								<h3><a href="<?php the_permalink() ?>" title="لینک مستقیم به <?php the_title(); ?>"><?php the_title(); ?></a></h3>
							</article>
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>

						</div>
						<div class="span7">

							<?php query_posts(array('post_type' => 'circular','posts_per_page' => 6)); ?>
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
				<a class="btn btn-archive hidden-phone" target="_blank" href="<?php bloginfo( 'url' ); ?>/circular" title="دسترسی به آرشیو آئین‌نامه‌ها و بخش‌نامه‌ها">آرشیو</a>
			</div>
		
			<div class="tab-pane fade in" id="tab-student">
				<section>
					<p class="tab-title">امور دانشجویی</p>
					<hr class="title-line">
					<?php wp_nav_menu( array( 'container_id' => '','container_class' => 'menu-custom radius', 'theme_location' => 'student','fallback_cb'=> 'fallbackmenu' ) ); ?>
				</section>
			</div>
			<div class="tab-pane fade in" id="tab-blogroll">
				<section>
					<p class="tab-title">سایت های پیشنهادی</p>
					<hr class="title-line">
					<?php wp_nav_menu( array( 'container_id' => '','container_class' => 'menu-custom radius', 'theme_location' => 'blogroll','fallback_cb'=> 'fallbackmenu' ) ); ?>
				</section>
			</div>
			<div class="tab-pane fade in" id="tab-service">
				<section>
					<p class="tab-title">سرویس‌ها</p>
					<hr class="title-line">
					<?php wp_nav_menu( array( 'container_id' => '','container_class' => 'menu-custom radius', 'theme_location' => 'service','fallback_cb'=> 'fallbackmenu' ) ); ?>
				</section>
			</div>
			<div class="tab-pane fade in" id="tab-calendar">
				<section>
					<p class="tab-title">تقویم آموزشی نیمسال جاری</p>
					<hr class="title-line">
					<table class="table table-hover table-condensed table-striped">
						<tr class="info">
							<td>شرح فعالیت</td>
							<td>تاریخ شروع</td>
							<td>تاریخ پایان</td>
							<td>توضیح</td>
						</tr>

						<?php query_posts(array('post_type' => 'calendar','order'=>'asc')); ?>
						<?php while (have_posts()) : the_post(); ?>
							<tr>
							<td><?php the_title(); ?></td>

							<?php
								$tmp = SmartMetaBox::get('calendar_start_date'); if ( !empty( $tmp ) ) print "<td>$tmp";
								$options = array('','شنبه', 'یکشنبه', 'دوشنبه','سه شنبه','چهارشنبه','پنج شنبه','جمعه');
								$tmp = SmartMetaBox::get('calendar_start_day'); if ( !empty( $tmp ) ) echo ' ('.$options[$tmp].') ';
								echo "</td>";
							?>

							<?php
								$tmp = SmartMetaBox::get('calendar_end_date'); if ( !empty( $tmp ) ) print "<td>$tmp";
								$options = array('','شنبه', 'یکشنبه', 'دوشنبه','سه شنبه','چهارشنبه','پنج شنبه','جمعه');
								$tmp = SmartMetaBox::get('calendar_end_day'); if ( !empty( $tmp ) ) echo  ' ('.$options[$tmp].') ';
								echo "</td>";
							?>

							<?php $tmp = SmartMetaBox::get('calendar_desc'); if ( !empty( $tmp ) ) print "<td>$tmp</td>"; ?>
							</tr>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					 
					</table>
					
				</section>
				<a class="btn btn-archive hidden-phone" target="_blank" href="<?php bloginfo( 'url' ); ?>/calendar" title="دسترسی به آرشیو اخبار و اطلاعیه‌ها">آرشیو</a>
			</div>	
		</div>
	</div>
  
  
  </div>
 </div>
 <hr id="home-line" />
 <div class="row-fluid">
  <div class="span12 tabs-below">
   <ul class="nav" id="MixaHomeTab">
    <li class="active"><a href="#tab-news" data-toggle="tab" title="اخبار و اطلاعیه‌ها">اخبار و اطلاعیه‌ها</a></li>
	<li><a href="#tab-board" data-toggle="tab" title="تابلوی اعلانات آموزشی">تابلوی اعلانات آموزشی</a></li>
    <li><a href="#tab-circular" data-toggle="tab" title="آئین‌نامه‌ها و بخش‌نامه‌ها">آئین‌نامه‌ها و بخش‌نامه‌ها</a></li>
	<li><a href="#tab-student" data-toggle="tab" title="امور دانشجویی">امور دانشجویی</a></li>
	<li><a href="#tab-blogroll" data-toggle="tab" title="سایت های پیشنهادی">سایت های پیشنهادی</a></li>
	<li><a href="#tab-service" data-toggle="tab" title="سرویس‌ها">سرویس‌ها</a></li>
	<li><a href="#tab-calendar" data-toggle="tab" title="تقویم آموزشی">تقویم آموزشی</a></li>
   </ul>
  </div>
 </div>
</div>

<?php get_footer(); ?>