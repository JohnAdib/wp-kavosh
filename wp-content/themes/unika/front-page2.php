<?php /* Template Name: Old Browser */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fa">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php bloginfo( 'name' ); ?></title>
  <meta name="description" content="<?php bloginfo( 'name' ); ?><?php bloginfo( 'description' ); ?>" />
  <meta name="author" content="Mixa Team" />

   <style type="text/css">
		<!--
		body {
		background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg-login.jpg) !important;
		direction: rtl;
		font-family: Tahoma;
		font-size: 13px;
		line-height: 1.6em;
		background: #eaece7;
		}
		#msgContainer {
		width: 700px;
		padding: 20px;
		margin-left: auto;
		margin-right: auto;
		background: white;
		border: 1px solid #CCC;
		margin-top: 30px;
		}
		#msgContainer p a:hover {
		color: white;
		background: #44E;
		text-decoration: none;
		}
		#logo,#amozesh {
		width: 300px;
		height: 80px;
		margin-left: auto;
		margin-right: auto;
		}
		#amozesh{width: 355px;padding: 5px;}
		#logo img,#amozesh img {
		border:none;
		}
		#logo-txt{float:left;}
		a{text-decoration: none;}
		-->
   </style>
 </head>
 <body>
  <div id="logo"><a href="<?php bloginfo( 'url' ); ?>/" title="<?php bloginfo( 'name' ); ?>"><img id="logo-txt" src="<?php echo get_template_directory_uri(); ?>/images/logo-txt.png" alt="<?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?>"/></a></div>
  <div id="msgContainer">
   <img id="logo-txt" src="<?php echo get_template_directory_uri(); ?>/images/logo-arm.png" alt="<?php bloginfo( 'description' ); ?>"/>
   <p>مراجعه کننده عزيز،</p>
   <p>وب سایت موسسه آموزش عالی کاوش محمودآباد در حال تغییر است. به زودی از نسخه جدید وب سایت رونمایی خواهد شد.</p>
   <p>تا زمان تکمیل روند انتقال به وب سایت جدید می توانید از طریق لینک زیر به <a target="_blank" href="http://94.183.128.209/" title="سامانه آموزش موسسه کاوش">سامانه آموزش</a> دسترسی داشته باشید.</p>
   <div id="amozesh">
    <a target="_blank" href="http://94.183.128.209/" title="سامانه آموزش موسسه کاوش"><img src="<?php echo get_template_directory_uri(); ?>/images/amozesh.png" alt="سامانه آموزش موسسه کاوش"/></a>
   </div>
  </div>
 </body>
</html>