<div class="clear"></div>
<hr id="footer-line"/>
<footer>
	<div id="footer">
	   <div class="row-fluid">
		<div class="span8">
		<p id="credit">تمام حقوق این وب سایت برای <a href="#AboutModal" title="<?php bloginfo('description'); ?>"  data-toggle="modal"><abbr title="آدرس: مازندران - محمودآباد -  خیابان امام  - موسسه آموزش عالی کاوش. تلفن تماس: 7734250-0122"><?php bloginfo('name'); ?></abbr></a> محفوظ است.</p>
		</div>
		<div class="span4">
		<p id="powered-by-mixa">Designed By <a href="#MixaModal" title="طراحی و اجرا توسط ارمایل" data-toggle="modal">Ermile &copy;</a> | <a id="html5-valid" href="http://validator.w3.org/check?uri=referer" title='HTML5 Valid' target="_blank"> HTML5 Valid</a></p>
		</div>
	   </div>
	</div>
	<?php if(is_user_logged_in()) { ?>
	<a id="nav-admin" href="<?php bloginfo('url'); echo "/wp-admin"; ?>" target="_blank" title="برای ورود به بخش مدیریت کلیک کنید"><img src="<?php bloginfo('template_directory'); echo"/images/navigate-admin.png"; ?>" alt="انتقال به پنل مدیریت" ></a>
	<?php } ?>
</footer>
</div><!-- #container -->

<!-- Mixa Modal -->
<div id="MixaModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="MixaModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 id="MixaModalLabel">طراحی و اجرا توسط ارمایل</h4>
  </div>
  <div class="modal-body">
	<a id="html5-badge" target="_blank" href="http://www.w3.org/html/logo/" title="HTML5 Powered with CSS3 / Styling, Graphics, 3D &amp; Effects, Multimedia, and Semantics"></a>
    <p>وب سایت موسسه آموزش عالی کاوش با افتخار در تیرماه 1392 توسط <a target="_blank" href="https://ermile.com/fa" title="طراحی و اجرا توسط ارمایل | Ermile" >ارمایل &copy;</a> طراحی و اجرا شد.</p>
	<p>در طراحی این وب سایت از آخرین تکنولوژی های وب نظیر اچ‌تی‌ام‌ال نسخه 5 و سی‌اس‌اس نسخه 3 استفاده شده است. هم چنین طراحی این وب سایت به صورت پاسخگو (Responsive) بوده و شما را قادر میسازد تا با هر مقیاسی قادر به مشاهده صحیح وب سایت باشید.</p>
	<canvas class="pull-center" id="MixaCanvas" width="200" height="100">Ermile</canvas>
	<p>با تشکر؛ <a target="_blank" href="https://ermile.com/fa" title="Ermile | ارمایل" rel="license">ارمایل &copy;</a></p>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">بستن</button>
  </div>
</div>

<!-- About Modal -->
<div id="AboutModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="AboutModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h1 id="AboutModalLabel"><?php bloginfo('name'); ?></h1>
  </div>
  <div class="modal-body">
	<a class="logo" href="<?php bloginfo( 'url' ); ?>/" title="<?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?>"></a>
	<address>
		<strong>آدرس</strong>: مازندران - محمودآباد -  خیابان امام  - موسسه آموزش عالی کاوش<br /><br/>
		<strong>تلفن تماس</strong>: 7734250-0122<br /><br/>
		<strong>رایانامه</strong>: <a class="align-left" href="mailto:info@kavosh.ac.ir" title="ایمیل موسسه کاوش">info@kavosh.ac.ir</a>
	</address>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">بستن</button>
  </div>
</div>


<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript">
// <![CDATA[
jQuery(document).ready(function() { jQuery("#nano").css("display", "none");jQuery("#nano").fadeIn(2500);});
jQuery(document).ready(function() { jQuery(".tabs-below").css("display", "none");jQuery(".tabs-below").fadeIn(3000);});
// ]]>
</script>

</body>
</html>