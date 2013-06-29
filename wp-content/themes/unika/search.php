<?php get_header(); ?>

<div id="content" class="span9">

	<div class="post">
		<div class="row-fluid postmeta radius img-polaroid">
			<div class="span12">
				<?php
				$mySearch =& new WP_Query("s=$s & showposts=-1");
				$num = $mySearch->post_count;
				echo $num.' نتیجه برای جستجوی عبارت <b>'; the_search_query();
				?></b> در <?php  get_num_queries(); ?> <?php timer_stop(1); ?> ثانیه یافت شد.
			</div>
		</div>


		<div class="row-fluid">
			<div class="span12">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<div class="box-3">
					<article>
						<h1><a href="<?php the_permalink() ?>" title="لینک مستقیم به <?php the_title(); ?>"><?php the_title(); ?></a></h1>
						<hr />
						<?php wpe_excerpt('wpe_excerptlength_archive', 'wpe_excerptmore'); ?>
						<div class="clear"></div>
					</article>
				</div>
			
				<?php endwhile; ?>
				<?php getpagenavi(); ?>

			<?php else : ?>
				<div class="title">
					<h2>نتیجه ای برای جستجوی عبارت - <?php the_search_query();?> - در این وب سایت یافت نشد.</h2>
				</div>
				<div class="entry">
				<p>پیشنهادات:</p>
					<ul>
					   <li>املای تمام کلمات را بررسی نمایید.</li>
					   <li>از کلمات کلیدی دیگری استفاده نمایید.</li>
					   <li>از کلمات کلیدی عمومی تری استفاده نمایید.</li>
					</ul>
					<div class="clear"></div>
				</div>

			<?php endif; ?>
			</div>
		</div>
	</div>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>