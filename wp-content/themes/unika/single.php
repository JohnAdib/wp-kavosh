<?php get_header(); ?>
<section>
	<div id="content" class="span9">

		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div class="post">
		 <article>
			<div class="title">
				<h1><a href="<?php the_permalink() ?>" title="لینک مستقیم به <?php the_title(); ?>"><?php the_title(); ?></a></h1>
			</div>
			<div class="row-fluid postmeta radius">
				<div class="span10">تاریخ و زمان انتشار  <?php the_time('j M Y ساعت g:i a'); ?> </div>
				<div class="span2 text-left hidden-phone"><a href = "<?php bloginfo('url'); echo '/?print='; the_ID(); ?>">نسخه چاپی</a></div>
			</div>

			<div class="entry">
					<?php the_content('بیشتر بخوانید &raquo;'); ?>
					<div class="clear"></div>
					<?php wp_link_pages(array('before' => '<p><strong>صفحه: </strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>

			<div class="row-fluid postmeta radius">
				<div class="span4">دسته: <?php the_category(', '); ?> </div>
				<div class="span8 text-left hidden-phone"><?php the_tags('کلیدواژه: ',', '); ?></div>
			</div>
			<br /><?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<ul class="row-fluid postmeta breadcrumb radius">','</ul>');} ?>
		 </article>
		</div>

		<?php endwhile; else: ?>
				<h1 class="title">یافت نشد</h1>
				<p>متاسفیم، ولی شما به دنبال مطلبی هستید که در اینجا نیست. با جستجو پیدایش کنید</p>
		<?php endif; ?>

	</div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>