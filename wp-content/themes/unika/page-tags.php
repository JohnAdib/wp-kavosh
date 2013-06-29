<?php /* Template Name: Tags */ ?>
<?php get_header(); ?>
<div class="post">

	<div class="title">
		<h1><?php wp_title(''); ?></h1>
	</div>
	<blockquote class="alert alert-info">این صفحه تنها برای جذب موتورهای جستجو به سمت <a href="<?php bloginfo('url'); ?>"><?php bloginfo('show'); ?></a> در نظر گرفته شده است، هرچند شما بازدیدکننده گرامی نیز می توانید با استفاده از کلیدواژه مناسب به محتوای مورد نیاز خود برسید.</blockquote>
	<div class="entry">
		<?php wp_tag_cloud('number=0'); ?>
		<br /><br /><br /><br /><br /><br /><h2 class="pull-left">This page created by <a href="http://www.mixa.ir" title="تیم میکسا">Mixa</a> for <a href="http://www.google.com" title="گوگل">Google</a></h2>
	</div>

</div>
<?php get_footer(); ?>