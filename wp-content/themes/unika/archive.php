<?php get_header(); ?>
<section>
<div id="content" class="span9">
 <div class="post">
  <div class="row-fluid">
   <div class="span12">
		<?php while (have_posts()) : the_post(); ?>
		<div class="box-1">
			<article><h1><a href="<?php the_permalink() ?>" title="لینک مستقیم به <?php the_title(); ?>"><?php the_title(); ?></a></h1>
			<hr />
			<?php wpe_excerpt('wpe_excerptlength_archive', 'wpe_excerptmore'); ?>
			</article>
		</div>
		<?php endwhile; ?>
		<?php getpagenavi(); ?>
		<?php wp_reset_query(); ?>
		<br /><?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<ul class="row-fluid postmeta breadcrumb radius">','</ul>');} ?>
   </div>
  </div>
 </div>
</div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>