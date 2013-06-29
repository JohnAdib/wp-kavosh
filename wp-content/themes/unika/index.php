<?php get_header(); ?>
<?php get_sidebar(); ?>
<section>
<div id="content" class="span9">
 <div class="post">
	<div class="row-fluid">
		<div class="span12">

			<?php while (have_posts()) : the_post(); ?>
			<div class="row-fluid">
				<div class="span12">
				<article><h1><a href="<?php the_permalink() ?>" title="لینک مستقیم به <?php the_title(); ?>"><?php the_title(); ?></a></h1></article>
				<hr />
				<?php wpe_excerpt('wpe_excerptlength_archive', 'wpe_excerptmore'); ?>
				</div>
			</div>
			<?php endwhile; ?>
			<?php getpagenavi(); ?>
			<?php wp_reset_query(); ?>

		</div>
	</div>
 </div>
</div>
</section>
<?php get_footer(); ?>