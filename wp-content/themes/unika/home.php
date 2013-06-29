<?php get_header(); ?>

<div class="container" id="homepage">
 <div class="row-fluid" id="tabs-data">
  <div class="span5">
   <div id="slider-home" class="radius">

    <div id="myCarousel" class="carousel slide">
      <ol class="carousel-indicators hidden">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <div class="carousel-inner">
        <div class="active item">
         <img src="<?php bloginfo('template_directory'); ?>/images/kavosh_slider.jpg" alt="<?php bloginfo( 'name' ); ?>" />
         <div class="carousel-caption">
          <h4><?php bloginfo('description'); ?></h4>
         </div>
        </div>
    <?php query_posts(array('post_type' => 'post', 'category_name'=>'slider', 'posts_per_page' => 3)); //,'offset' =>3 ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="item">
            <?php if(has_post_thumbnail()) the_post_thumbnail('slider'); else{ echo"<img src='"; bloginfo('template_directory'); echo"/images/post_thumb.jpg' alt='"; the_title(); echo"' />"; } ?>
         <div class="carousel-caption">
          <h4><a href="<?php the_permalink() ?>" title="لینک مستقیم به <?php the_title(); ?>"><?php the_title(); ?></a></h4>
         </div>
        </div>

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
      </div>

      <a class="carousel-control right" href="#myCarousel" data-slide="next">&lsaquo;</a>
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">&rsaquo;</a>
    </div>


   </div>
   <div id="amozesh">
    <a target="_blank" href="http://sama.kavosh.ac.ir/samaweb" data-toggle="tooltip" title="سامانه آموزش <?php bloginfo( 'name' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/amozesh.png" alt="سامانه آموزش"/></a>
   </div><br />
  </div>

  <div class="span7" id="home-left-side">
    <div class="tabbable">
        <div class="tab-content home">
            <div class="tab-pane fade in active" id="tab-news">
                <p class="tab-title">آخرین اخبار و اطلاعیه‌ها</p>
                <hr class="title-line">
                <div class="row-fluid">
                    <section>
                        <div class="span5">
                            <?php query_posts(array('post_type' => 'post', 'category_name'=>'news', 'posts_per_page' => 10)); //,'offset' =>3 ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <article>
                            <h3><a href="<?php the_permalink() ?>" title="لینک مستقیم به <?php the_title(); ?>"><?php the_title(); ?></a></h3>
                            </article>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>

                        </div>
                        <div class="span7 visible-desktop">
                            <?php query_posts(array('post_type' => 'post', 'category_name'=>'topnews','posts_per_page' => 5)); ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <article class="last-news">
                                <div class="postThumb">
                                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" >
                                        <?php if(has_post_thumbnail()) the_post_thumbnail(); else{ echo"<img src='"; bloginfo('template_directory'); echo"/images/post_thumb.jpg' alt='"; the_title(); echo"' />"; } ?>
                                    </a>
                                </div>
                                <h2><a href="<?php the_permalink() ?>" title="لینک مستقیم به <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                                <?php wpe_excerpt('wpe_excerptlength_home', ' wpe_excerptmore'); ?>
                            </article>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                    </section>
                </div>
                <a class="btn btn-archive hidden-phone" target="_blank" href="<?php bloginfo( 'url' ); ?>/news" title="دسترسی به آرشیو اخبار و اطلاعیه‌ها">آرشیو</a>
            </div>


            <div class="tab-pane fade in" id="tab-circular">
                <section>
                    <p class="tab-title">دانلود آخرین نسخه‌ی آئین‌نامه‌ها و بخش‌نامه‌ها</p>
                    <hr class="title-line">
                    <?php wp_nav_menu( array( 'container_id' => '','container_class' => 'menu-custom radius', 'theme_location' => 'circular','fallback_cb'=> 'fallbackmenu' ) ); ?>
                </section>
            </div>

            <div class="tab-pane fade in" id="tab-student">
                <section>
                    <p class="tab-title">امور دانشجویی</p>
                    <hr class="title-line">
                    <?php wp_nav_menu( array( 'container_id' => '','container_class' => 'menu-custom radius', 'theme_location' => 'student','fallback_cb'=> 'fallbackmenu' ) ); ?>
                </section>
            </div>
            <div class="tab-pane fade in" id="tab-blogroll">
                <section>
                    <p class="tab-title">سایت های پیشنهادی</p>
                    <hr class="title-line">
                    <?php wp_nav_menu( array( 'container_id' => '','container_class' => 'menu-custom radius', 'theme_location' => 'blogroll','fallback_cb'=> 'fallbackmenu' ) ); ?>
                </section>
            </div>
            <div class="tab-pane fade in" id="tab-service">
                <section>
                    <p class="tab-title">سرویس‌ها</p>
                    <hr class="title-line">
                    <?php wp_nav_menu( array( 'container_id' => '','container_class' => 'menu-custom radius', 'theme_location' => 'service','fallback_cb'=> 'fallbackmenu' ) ); ?>
                </section>
            </div>
            <div class="tab-pane fade in" id="tab-calendar">
                <section>
                    <p class="tab-title">تقویم آموزشی نیمسال جاری</p>
                    <hr class="title-line">
                    <table class="table table-hover table-condensed table-striped">
                        <tr class="info">
                            <td>شرح فعالیت</td>
                            <td>تاریخ شروع</td>
                            <td>تاریخ پایان</td>
                            <td>توضیح</td>
                        </tr>

                        <?php query_posts(array('post_type' => 'calendar','order'=>'asc')); ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <tr>
                            <td><?php the_title(); ?></td>

                            <?php
                                $tmp = SmartMetaBox::get('calendar_start_date'); if ( !empty( $tmp ) ) print "<td>$tmp";
                                $options = array('','شنبه', 'یکشنبه', 'دوشنبه','سه شنبه','چهارشنبه','پنج شنبه','جمعه');
                                $tmp = SmartMetaBox::get('calendar_start_day'); if ( !empty( $tmp ) ) echo ' ('.$options[$tmp].') ';
                                echo "</td>";
                            ?>

                            <?php
                                $tmp = SmartMetaBox::get('calendar_end_date'); if ( !empty( $tmp ) ) print "<td>$tmp";
                                $options = array('','شنبه', 'یکشنبه', 'دوشنبه','سه شنبه','چهارشنبه','پنج شنبه','جمعه');
                                $tmp = SmartMetaBox::get('calendar_end_day'); if ( !empty( $tmp ) ) echo  ' ('.$options[$tmp].') ';
                                echo "</td>";
                            ?>

                            <?php $tmp = SmartMetaBox::get('calendar_desc'); if ( !empty( $tmp ) ) print "<td>$tmp</td>"; ?>
                            </tr>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>

                    </table>

                </section>
            </div>
        </div>
    </div>


  </div>
 </div>
 <div class="row-fluid">
  <div class="span12 tabs-below">
   <ul class="nav" id="MixaHomeTab">
    <li class="active"><a href="#tab-news" data-toggle="tab" title="اخبار و اطلاعیه‌ها">اخبار و اطلاعیه‌ها</a></li>
    <li><a href="#tab-circular" data-toggle="tab" title="آئین‌نامه‌ها و بخش‌نامه‌ها">آئین‌نامه‌ها و بخش‌نامه‌ها</a></li>
    <li><a href="#tab-student" data-toggle="tab" title="امور دانشجویی">امور دانشجویی</a></li>
    <li><a href="#tab-blogroll" data-toggle="tab" title="سایت های پیشنهادی">سایت های پیشنهادی</a></li>
    <li><a href="#tab-service" data-toggle="tab" title="سرویس‌ها">سرویس‌ها</a></li>
    <li><a href="#tab-calendar" data-toggle="tab" title="تقویم آموزشی">تقویم آموزشی</a></li>
   </ul>
  </div>
 </div>
</div>

<?php get_footer(); ?>