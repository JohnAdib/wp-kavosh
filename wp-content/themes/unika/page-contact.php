<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

<div id="content" class="span9">
	<div id="CenterCol">
	 <!-- Begin .postBox -->
	 <div class="postBox">
	  <div class="postBoxMidInner clearfix">
	   <h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></h1>
	   <?php the_content(); ?>
	  </div>
	 </div>
	<!-- End .postBox -->
	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>