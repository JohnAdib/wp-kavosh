<?php /* Template Name: SiteArchive */ ?>
<?php get_header(); ?>
<div class="post">

	<div class="title">
		<h1><?php wp_title(''); ?></h1>
	</div>
    <blockquote class="alert alert-info">برای جستجو در اخبار <a href="<?php bloginfo('url'); ?>"><?php bloginfo('show'); ?></a> می‌توانید از آرشیو در نظر گرفته‌شده استفاده نمایید است. همچنین از دسته‌بندی‌ها نیز می توانید استفاده لازم را ببرید.</blockquote>
	<div class="entry">	
		<h2>آرشیو ماهیانه اخبار </h2>
		<ul><?php if (function_exists('wp_get_jarchives')) wp_get_jarchives('type=monthly&show_post_count=1'); else wp_get_archives('type=monthly&show_post_count=1'); ?></ul>
		<h2>تمام موضوعات اخبار</h2><ul><?php wp_list_cats('sort_column=name&optioncount=1') ?></ul>
		<br /><br /><br /><br /><br /><br /><h2 class="pull-left">This page created by <a href="http://www.mixa.ir" title="تیم میکسا">Mixa</a> for <a href="http://www.google.com" title="گوگل">Google</a></h2>
	</div>
	
</div>
<?php get_footer(); ?>