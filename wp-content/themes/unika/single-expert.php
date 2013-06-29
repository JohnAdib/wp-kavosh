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
				<div class="span9">تاریخ و زمان انتشار  <?php the_time('j M Y ساعت g:i a'); ?> </div>
				<div class="span3 text-left hidden-phone">دسته: <?php $args = array( 'taxonomy' => 'board_cat' ); $categories=get_categories($args); foreach ($categories as $category) { echo '<a href="#">'.$category->name; echo '</a> '; } ?></div>
			</div>

			<div class="entry">
					<?php the_content('بیشتر بخوانید &raquo;'); ?>
					<div class="clear"></div>
					<?php wp_link_pages(array('before' => '<p><strong>صفحه: </strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
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

<div id="sidebar" class="span3">
	<ul>
		<li class="sidebox expert-detail">
			<div class="box-head"><div class="box-head-right"></div><div class="box-head-left"></div><div class="box-head-bg"><h3>مشخصات استاد</h3></div></div>
			<ul>
				<?php the_post_thumbnail('medium'); ?>
				<table class="hovertable">
				
					<tr onmouseover="this.style.backgroundColor='#F9A01B';" onmouseout="this.style.backgroundColor='transparent';">
					<th>نام</th><td>
					<?php the_title(); ?>
					</td>
					</tr>
					<?php $tmp = SmartMetaBox::get('expert_degree'); if ( !empty( $tmp ) ) print "
					<tr onmouseover=\"this.style.backgroundColor='#F9A01B';\" onmouseout=\"this.style.backgroundColor='transparent';\">
						<th>مدرک تحصیلی</th><td>$tmp</td>
					</tr>"; ?>

					<?php $tmp = SmartMetaBox::get('expert_email'); if ( !empty( $tmp ) ) print "
					<tr onmouseover=\"this.style.backgroundColor='#F9A01B';\" onmouseout=\"this.style.backgroundColor='transparent';\">
						<th>رایانامه</th><td class='text-left'>$tmp</td>
					</tr>"; ?>


					<?php $tmp = SmartMetaBox::get('expert_website'); if ( !empty( $tmp ) ) print "
					<tr onmouseover=\"this.style.backgroundColor='#F9A01B';\" onmouseout=\"this.style.backgroundColor='transparent';\">
						<th>وب سایت</th><td class='text-left'>$tmp</td>
					</tr>"; ?>
				</table>
			</ul>
		</li>

		<li class="sidebox expert-scientific">
			<div class="box-head"><div class="box-head-right"></div><div class="box-head-left"></div><div class="box-head-bg"><h3>سوابق علمی</h3></div></div>
			<ul>
				<?php $tmp = SmartMetaBox::get('expert_scientific'); if ( !empty( $tmp ) ) print "$tmp"; ?>
				<table class="hovertable">
				</table>
			</ul>
		</li>
		
		<li class="sidebox expert-executive">
			<div class="box-head"><div class="box-head-right"></div><div class="box-head-left"></div><div class="box-head-bg"><h3>سوابق اجرایی</h3></div></div>
			<ul>
				<?php $tmp = SmartMetaBox::get('expert_executive'); if ( !empty( $tmp ) ) print "$tmp"; ?>
			</ul>
		</li>
		
	</ul>
	<div class="clear"></div>
</div>

<?php get_footer(); ?>