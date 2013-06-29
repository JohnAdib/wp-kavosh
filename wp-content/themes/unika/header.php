<!DOCTYPE html>
<!--[if lte IE 7]><script>document.location = 'http://deadbrowser.ir';</script><![endif]-->
<!--[if IE 8]><html id="ie8" lang="fa-IR"><![endif]-->
<!--[if !(IE 8) ]><!--><html lang="fa-IR"><!--<![endif]-->
  <head>
    <base href="<?php bloginfo( 'url' ); ?>/" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>"/>
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/><![endif]-->
    <link type="text/plain" rel="author" href="<?php bloginfo( 'url' ); ?>/humans.txt" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/icon/favicon.png">
    <meta property ="og:url" content="<?php bloginfo( 'url' ); ?>/"/>
    <meta property ="og:image" content="<?php echo get_template_directory_uri(); ?>/images/logo.png"/>
    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>

<div class="container mybox">
 <header>
    <div id="header" class="row-fluid">
       <div id="nano" class="span12">
      
      <ul id="quickmenu" class="nav-list2">
       <li id="ihome" class="pull-left visible-desktop"><a href="<?php bloginfo( 'url' ); ?>/" title="صفحه نخست <?php bloginfo( 'name' ); ?>"></a></li>
       <li id="icontact" class="pull-left hidden-phone"><a href="<?php bloginfo( 'url' ); ?>/contact" title="تماس با ما"></a></li>
       <li id="iabout" class="pull-left hidden-phone"><a href="<?php bloginfo( 'url' ); ?>/university/goal/" title="اهداف <?php bloginfo( 'name' ); ?>"></a></li>
       <li id="irss" class="pull-left"><a href="<?php bloginfo( 'url' ); ?>/feed/" title="خبرخوان"></a></li>
      </ul>
      
      <div class="row-fluid">
        <div class="span1 hidden-phone hidden-tablet">
          <a id="logo-vezarat-oloom" target="_blank" href="http://www.msrt.ir" title="وزارت علوم، تحقیقات و فناوری جمهوری اسلامی ایران"></a>
        </div>
        <div class="span5" lang="en">
          <a id="logo-txt" href="<?php bloginfo( 'url' ); ?>/" title="Kavosh institute of higher education; Ministry of Science, Research and Technology"></a>
        </div>
        <div class="span2 hidden-phone">
          <a class="logo" href="<?php bloginfo( 'url' ); ?>/" title="<?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?>"></a>
        </div>
        <div class="span4 hidden-phone" >
          <a id="logo-txt-en" href="<?php bloginfo( 'url' ); ?>/" title="<?php bloginfo( 'name' ); ?>"></a>
        </div>
      </div>
      
       </div>
    </div>

  <hr/>
   
    <div class="container head-box hidden-phone">
     <div id="menu-box" class="row-fluid">
    <div class="span3 visible-desktop"></div>
    <div class="span6" id="menu-box-inner">
     <div id="submenu-right"></div>
     <div id="submenu-left"></div>
     <nav>
     <?php wp_nav_menu( array( 'container_id' => 'submenu','container_class' => '', 'theme_location' => 'primary','menu_id'=>'mixa' ,'fallback_cb'=> 'fallbackmenu','depth'=> 3, ) ); ?>
     </nav>
    </div>
    <div class="span3 visible-desktop"><?php get_search_form(); ?></div>
     </div>
    
     <div id="ticker-box" class="row-fluid hidden-phone">
    <div class="span2 hidden-phone"></div>
    <div class="span8" id="ticker-box-inner">
      <div id="ticker-right"></div>
      <div id="ticker-left"></div>
      <article>
        <div id="ticker"><?php if(function_exists('ditty_news_ticker')){ditty_news_ticker(62);} //for kavosh.ac.ir=62, local=14 ?></div>
      </article>
    </div>
    <div class="span2 hidden-phone"></div>
     </div>
    </div>
 </header>
 