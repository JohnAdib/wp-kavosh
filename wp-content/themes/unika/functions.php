<?php 

//include ( 'aq_resizer.php' );
//include ( 'ditty-news-ticker/ditty-news-ticker.php' );
//include ( 'wp-orbit-slider/index.php' );
include ( 'metabox_class.php' );

/* Load scripts */

function lod_scripts() {
	global $post;

	//wp_enqueue_style( 'style', get_stylesheet_uri() );
	//wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ),  true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


}
add_action( 'wp_enqueue_scripts', 'lod_scripts' );


/**
 * Add default posts and comments RSS feed links to head
*/
 
//add_theme_support( 'automatic-feed-links' );
	
	
/* SIDEBARS */
if ( function_exists('register_sidebar') )
{	
register_sidebar(array(
	'name' => 'Sidebar',
	'description' => 'نوار کناری در تمامی صفحات بجز صفحات مخصوص تعیین شده نمایش داده خواهد شد. در حقیفت این نوار کناری اصلی وب سایت است.',
    'before_widget' => '<li class="sidebox %2$s">',
    'after_widget' => '</li>',
	'before_title' => '<div class="box-head"><div class="box-head-right"></div><div class="box-head-left"></div><div class="box-head-bg"><h3>',
    'after_title' => '</h3></div></div>',
	));

// register_sidebar(array(
// 	'name' => 'Sidebar-Circular',
// 	'description' => 'نوار کناری قابل نمایش در آرشیو و نمایش آئین‌نامه‌ها و بخش‌نامه‌ها',
//     'before_widget' => '<li class="sidebox %2$s">',
//     'after_widget' => '</li>',
// 	'before_title' => '<div class="box-head"><div class="box-head-right"></div><div class="box-head-left"></div><div class="box-head-bg"><h3>',
//     'after_title' => '</h3></div></div>',
// 	));

// register_sidebar(array(
// 	'name' => 'Sidebar-Board',
// 	'description' => 'نوار کناری قابل نمایش در آرشیو و نمایش تابلو اعلانات آموزشی',
//     'before_widget' => '<li class="sidebox %2$s">',
//     'after_widget' => '</li>',
// 	'before_title' => '<div class="box-head"><div class="box-head-right"></div><div class="box-head-left"></div><div class="box-head-bg"><h3>',
//     'after_title' => '</h3></div></div>',
// 	));
// register_sidebar(array(
// 	'name' => 'Sidebar-Expert',
// 	'description' => 'نوار کناری قابل نمایش در آرشیو و نمایش مشخصات اساتید',
//     'before_widget' => '<li class="sidebox %2$s">',
//     'after_widget' => '</li>',
// 	'before_title' => '<div class="box-head"><div class="box-head-right"></div><div class="box-head-left"></div><div class="box-head-bg"><h3>',
//     'after_title' => '</h3></div></div>',
// 	));
}	
	
	
	

if ( ! function_exists( 'mixa_comment' ) ) :
/**
 * Template for comments and pingbacks.
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
function mixa_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'بازخورد', 'web2feel' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( '(ویرایش)', ' ' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer>
				<div class="comment-author vcard">
					<?php echo get_avatar( $comment, 80 ); ?>
					<?php printf( '%s <span class="says">گفته:</span>', sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
				</div><!-- .comment-author .vcard -->
				
				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em>دیدگاه شما در انتظار تایید است</em>
				<?php endif; ?>

				<div class="comment-meta commentmetadata">
					
					<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time pubdate datetime="<?php comment_time( 'c' ); ?>">
					<?php
						/* translators: 1: date, 2: time */
						printf( __( '%1$s در ساعت %2$s', 'web2feel' ), get_comment_date(), get_comment_time() ); ?>
					</time></a>
					<?php edit_comment_link( '(ویرایش)', ' ' );
					?>
				</div><!-- .comment-meta .commentmetadata -->
			</footer>

			<div class="comment-content cf">
				<?php comment_text(); ?>
				<div class="reply">
					<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</div><!-- .reply -->
			</div>

			
			<div class="space"></div>
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for mixa_comment()

	


/* CUSTOM MENUS */	

register_nav_menus( array(
		'primary'  => 'منوی اصلی',
		'circular' => 'آیین نامه‌های آموزشی',
		'student'  => 'امور دانشجویی',
		'blogroll' => 'سایت های پیشنهادی',
		'service'  => 'سرویس ها',
	) );

function fallbackmenu(){ ?>
			<div id="menu-service" class="radius">
				<ul><li>با استفاده از بخش فهرست موجود در بخش نمایش، فهرست ایجاد شده خودتان را تنظیم کنید...</li></ul>
			</div>
<?php }	


/* FEATURED THUMBNAILS */

if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );
	//add_image_size( 'news-thumb', 92, 92, true );
	add_image_size( 'slider', 450, 300, true );
	set_post_thumbnail_size( 75, 75, true); // default Post Thumbnail dimensions

}



/* PAGE NAVIGATION */

function getpagenavi(){
	?>
	<div id="navigation" class="clearfix">
	<?php if(function_exists('wp_pagenavi')) : ?>
	<?php wp_pagenavi() ?>
	<?php else : ?>
	        <div class="alignright"><?php next_posts_link('&laquo; مطالب قدیمی تر') ?></div>
	        <div class="alignleft"><?php previous_posts_link('مطالب جدیدتر &raquo;') ?></div>
	        <div class="clear"></div>
	<?php endif; ?>

	</div>

	<?php
	}
	

/* Excerpt length	 */
	
function wpe_excerptlength_archive($length) {
    return 40;
}
function wpe_excerptlength_index($length) {
    return 25;
}
function wpe_excerptlength_home($length) {
    return 14;
}

function wpe_excerptmore($more) {
return '...';
}

function wpe_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
        add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
}

/*-------------------------------------------------------------------- Create Custom Post Type ------------------------- */
//******************************************************* Change Post Name
 function edit_admin_menus() {
    global $menu;
    global $submenu;
     
    $menu[5][0] = 'اخبار';
    $submenu['edit.php'][5][0] = 'تمام اخبار';
    $submenu['edit.php'][10][0] = 'افزودن خبر';
	
	remove_menu_page('edit-comments.php'); // Remove the Comment Menu 
	remove_submenu_page('plugins.php','plugin-editor.php'); // Remove the Plugin Editor submenu 
}
add_action( 'admin_menu', 'edit_admin_menus' );

//******************************************************* Circular
// function create_circular() {
//     register_post_type( 'circular',
//         array(
//             'labels' => array(
//                 'name' => 'آئین‌نامه‌ها و بخش‌نامه‌ها',
//                 'singular_name' => 'آئین‌نامه‌ها و بخش‌نامه‌ها',
//                 'add_new' => 'افزودن آئین‌نامه یا بخش‌نامه',
//                 'add_new_item' => 'افزودن آئین‌نامه یا بخش‌نامه',
//                 'edit' => 'ویرایش',
//                 'edit_item' => 'ویرایش آئین‌نامه',
//                 'new_item' => 'یک آئین‌نامه یا بخشنامه جدید',
//                 'view' => 'نمایش',
//                 'view_item' => 'نمایش این آئین‌نامه یا بخش‌نامه',
//                 'search_items' => 'جستجوی آئین‌نامه یا بخش‌نامه',
//                 'not_found' => 'هیچ آئین‌نامه یا بخش‌نامه یافت نشد',
//                 'not_found_in_trash' => 'هیچ آیتمی در سطل زباله نیست',
//                 'parent' => 'آئین‌نامه زیرمجموعه',
// 				'menu_name' => 'آئین‌نامه'
//             ),
 
//             'public' => true,
//             'menu_position' => 6,
//             'supports' => array( 'title', 'editor' ),
// 			'taxonomies' => array( 'page-category' ),
//             'menu_icon' => get_template_directory_uri() . "/images/ul-bg1.png",
//             'has_archive' => true
//         )
//     );
// } add_action( 'init', 'create_circular' );


// function create_circular_taxonomies() {
//     register_taxonomy(
//         'circular_cat',
//         'circular',
//         array(
//             'labels' => array(
//                 'name' => 'دسته‌بندی نامه‌ها',
//                 'add_new_item' => 'افزودن دسته تازه',
//                 'new_item_name' => "افزودن دسته تازه"
//             ),
//             'show_ui' => true,
//             'show_tagcloud' => false,
//             'hierarchical' => true
//         )
//     );
// } add_action( 'init', 'create_circular_taxonomies', 0 );

//******************************************************* Board
// function create_board() {
//     register_post_type( 'board',
//         array(
//             'labels' => array(
//                 'name' => 'تابلو اعلانات',
//                 'singular_name' => 'تابلو اعلانات',
//                 'add_new' => 'افزودن',
//                 'add_new_item' => 'افزودن به تابلو اعلانات',
//                 'edit' => 'ویرایش',
//                 'edit_item' => 'ویرایش اعلان',
//                 'new_item' => 'یک اعلان جدید',
//                 'view' => 'نمایش',
//                 'view_item' => 'نمایش این اعلان',
//                 'search_items' => 'جستجوی تابلو اعلانات',
//                 'not_found' => 'هیچ موردی یافت نشد',
//                 'not_found_in_trash' => 'هیچ آیتمی در سطل زباله نیست',
//                 'parent' => 'اعلان زیرمجموعه',
// 				'menu_name' => 'تابلو اعلانات'
//             ),
 
//             'public' => true,
//             'menu_position' => 6,
//             'supports' => array( 'title', 'editor' ),
// 			'taxonomies' => array( 'page-category' ),
//             'menu_icon' => get_template_directory_uri() . "/images/ul-bg1.png",
//             'has_archive' => true
//         )
//     );
// } add_action( 'init', 'create_board' );


// function create_board_taxonomies() {
//     register_taxonomy(
//         'board_cat',
//         'board',
//         array(
//             'labels' => array(
//                 'name' => 'دسته‌های اعلانات',
//                 'add_new_item' => 'افزودن دسته تازه',
//                 'new_item_name' => "افزودن دسته تازه"
//             ),
//             'show_ui' => true,
//             'show_tagcloud' => false,
//             'hierarchical' => true
//         )
//     );
// } add_action( 'init', 'create_board_taxonomies', 0 );

//******************************************************* Expert
function create_expert() {
    register_post_type( 'expert',
        array(
            'labels' => array(
                'name' => 'اساتید',
                'singular_name' => 'اساتید',
                'add_new' => 'افزودن',
                'add_new_item' => 'افزودن مشخصات استاد',
                'edit' => 'ویرایش',
                'edit_item' => 'ویرایش استاد',
                'new_item' => 'یک مورد جدید',
                'view' => 'نمایش',
                'view_item' => 'نمایش مشخصات این استاد',
                'search_items' => 'جستجوی لیست اساتید',
                'not_found' => 'هیچ موردی یافت نشد',
                'not_found_in_trash' => 'هیچ آیتمی در سطل زباله نیست',
                'parent' => 'مورد زیرمجموعه',
				'menu_name' => 'اساتید'
            ),
 
            'public' => true,
            'menu_position' => 6,
            'supports' => array( 'title', 'editor','thumbnail' ),
			'taxonomies' => array( 'page-category' ),
            'menu_icon' => get_template_directory_uri() . "/images/ul-bg1.png",
            'has_archive' => true
        )
    );
} add_action( 'init', 'create_expert' );


function create_expert_taxonomies() {
    register_taxonomy(
        'expert_cat',
        'expert',
        array(
            'labels' => array(
                'name' => 'گروه‌بندی اساتید',
                'add_new_item' => 'افزودن گروه تازه',
                'new_item_name' => "افزودن گرئه تازه"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
} add_action( 'init', 'create_expert_taxonomies', 0 );


/************************************** Add Smart Meta Box to Expert page ********************/
	add_smart_meta_box('smart_meta_box_meetings', array(
	'title'     => 'ورود جزئیات اطلاعات اساتید',
	'pages'		=> array('expert'),
	'context'   => 'normal',
	'priority'  => 'high',
	'fields'    => array(

	array(
	'name' => 'مدرک تحصیلی',
	'id' => 'expert_degree',
	'default' => '',
	'desc' => '<br />توضیحات اضافی مرتبط با مدارک تحصیلی خود را در این کادر بنویسید.<br />برای ساختن فرم تماس اختصاصی، از منوی سمت راست در بخش تماس فرم سفارشی را ساخته، سپس آدرس آن را در مکان مورد نظر(معمولا در انتهای صفحه) قرار دهید.',
	'type' => 'textarea',
	),
	
	array(
	'name' => 'ایمیل',
	'id' => 'expert_email',
	'default' => '',
	'desc' => 'ایمیل استاد جهت نمایش عموم',
	'type' => 'text',
	),

	array(
	'name' => 'وب سایت',
	'id' => 'expert_website',
	'default' => 'http://khazar.ac.ir',
	'desc' => 'آدرس کامل وب سایت یا وبلاگ استاد<br /><br /><hr />',
	'type' => 'text',
	),

	array(
	'name' => 'سوابق علمی',
	'id' => 'expert_scientific',
	'default' => '',
	'desc' => '',
	'type' => 'textarea',
	),

	array(
	'name' => 'سوابق اجرایی',
	'id' => 'expert_executive',
	'default' => '',
	'desc' => '',
	'type' => 'textarea',
	),
	
	)
	));


	add_filter( 'manage_edit-expert_columns', 'my_edit_expert_columns' ) ;
	function my_edit_expert_columns( $columns ) {
		$columns = array(
			'cb' => '<input type="checkbox" />',
			'title' => 'نام استاد' ,
			'expert_email' => 'ایمیل استاد',
			'expert_website' => 'وب سایت' ,
			'date' => 'تاریخ درج'
		);
		return $columns;
	}

	add_action( 'manage_expert_posts_custom_column', 'my_manage_expert_columns', 10, 2 );
	function my_manage_expert_columns( $column, $post_id ) {
		global $post;
		switch( $column ) {
			case 'expert_email' :
				$tmp = SmartMetaBox::get('expert_email');
				if ( empty( $tmp ) )
					echo '---';
				else
					echo $tmp;
				break;

			case 'expert_website' :
				$tmp = SmartMetaBox::get('expert_website');
				if ( empty( $tmp ) )
					echo '---';
				else
					echo $tmp;
				break;
			/* Just break out of the switch statement for everything else. */
			default :
				break;
		}
	}
			
	add_filter( 'manage_edit-expert_sortable_columns', 'my_expert_sortable_columns' );
	function my_expert_sortable_columns( $columns ) {
		$columns['expert_email'] = 'expert_email';
		$columns['expert_website'] = 'expert_website';
		return $columns;
	}





//******************************************************* Calendar
function create_calendar() {
    register_post_type( 'calendar',
        array(
            'labels' => array(
                'name' => 'تقویم آموزشی',
                'singular_name' => 'تقویم آموزشی',
                'add_new' => 'افزودن جزئیات تقویم',
                'add_new_item' => 'افزودن جزئیات نیمسال',
                'edit' => 'ویرایش',
                'edit_item' => 'ویرایش جزئیات تقویم نیمسال ',
                'new_item' => 'یک اعلان جدید',
                'view' => 'نمایش',
                'view_item' => 'نمایش جزئیات نیمسال',
                'search_items' => 'جستجوی در لیست',
                'not_found' => 'هیچ موردی یافت نشد',
                'not_found_in_trash' => 'هیچ آیتمی در سطل زباله نیست',
                'parent' => 'اعلان زیرمجموعه',
				'menu_name' => 'تقویم آموزشی'
            ),
 
            'public' => true,
            'menu_position' => 6,
            'supports' => array( 'title' ),
			'taxonomies' => array( 'page-category' ),
            'menu_icon' => get_template_directory_uri() . "/images/ul-bg1.png",
            'has_archive' => true
        )
    );
} add_action( 'init', 'create_calendar' );


function create_calendar_taxonomies() {
    register_taxonomy(
        'term',
        'calendar',
        array(
            'labels' => array(
                'name' => 'نیمسال آموزشی',
                'add_new_item' => 'افزودن نیمسال جدید',
                'new_item_name' => "افزودن نیمسال جدید"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
} add_action( 'init', 'create_calendar_taxonomies', 0 );

/************************************** Add Smart Meta Box to Calendar page ********************/
	add_smart_meta_box('smart_meta_box_calendar', array(
	'title'     => 'جزئیات نیمسال تحصیلی - نام رویداد را در کادر بالا بنویسید',
	'pages'		=> array('calendar'),
	'context'   => 'normal',
	'priority'  => 'high',
	'fields'    => array(

	array(
		'name' => 'روز شروع',
		'id' => 'calendar_start_day',
		'type' => 'select',
		'options' => array('','شنبه', 'یکشنبه', 'دوشنبه','سه شنبه','چهارشنبه','پنج شنبه','جمعه')
	),	

	array(
	'name' => 'تاریخ شروع',
	'id' => 'calendar_start_date',
	'default' => '',
	'desc' => '<hr />',
	'type' => 'text',
	),
	
	array(
	'name' => 'روز پایان',
	'id' => 'calendar_end_day',
	'type' => 'select',
	'options' => array('','شنبه', 'یکشنبه', 'دوشنبه','سه شنبه','چهارشنبه','پنج شنبه','جمعه')
	),
	
	array(
	'name' => 'تاریخ پایان',
	'id' => 'calendar_end_date',
	'default' => '',
	'desc' => '<hr />',
	'type' => 'text',
	),
	
	
	array(
	'name' => 'توضیح',
	'id' => 'calendar_desc',
	'default' => '',
	'desc' => '<br />توضیحات اضافی مرتبط با رویداد را در این کادر بنویسید. برای مثال مدت زمان رویداد: <b>به مدت 5 روز</b>',
	'type' => 'textarea',
	),
	
	)
	));

	add_filter( 'manage_edit-calendar_columns', 'my_edit_calendar_columns' ) ;
	function my_edit_calendar_columns( $columns ) {
		$columns = array(
			'cb' => '<input type="checkbox" />',
			'title' => 'نام رویداد' ,
			'calendar_start_date' => 'تاریخ شروع',
			'calendar_end_date' => 'تاریخ پایان',
			'calendar_desc' => 'توضیح'
		);
		return $columns;
	}

	add_action( 'manage_calendar_posts_custom_column', 'my_manage_calendar_columns', 10, 2 );
	function my_manage_calendar_columns( $column, $post_id ) {
		global $post;
		switch( $column ) {
			case 'calendar_start_date' :
				$tmp = SmartMetaBox::get('calendar_start_date');
				if ( empty( $tmp ) )
					echo '---';
				else
					echo $tmp;
				break;

			case 'calendar_end_date' :
				$tmp = SmartMetaBox::get('calendar_end_date');
				if ( empty( $tmp ) )
					echo '---';
				else
					echo $tmp;
				break;
				
			case 'calendar_desc' :
				$tmp = SmartMetaBox::get('calendar_desc');
				if ( empty( $tmp ) )
					echo '---';
				else
					echo $tmp;
				break;
			/* Just break out of the switch statement for everything else. */
			default :
				break;
		}
	}
			
	add_filter( 'manage_edit-calendar_sortable_columns', 'my_calendar_sortable_columns' );
	function my_calendar_sortable_columns( $columns ) {
		$columns['calendar_start_date'] = 'calendar_start_date';
		$columns['calendar_end_date'] = 'calendar_end_date';
		return $columns;
	}





/************************************** ReArange menu in admin pane **************************/
function custom_menu_order($menu_ord){
    if (!$menu_ord) return true;
    return array(
        'index.php', // Dashboard
        'separator1', // *********************************************First separator
        'edit.php', // Posts
		'edit.php?post_type=board', // Board
		'edit.php?post_type=circular', // Circular
		'edit.php?post_type=expert', // Expert
		'edit.php?post_type=calendar', // Calendar
        'separator2', // *********************************************Second separator
        'edit.php?post_type=page', // Pages
		'edit.php?post_type=slider', // Slider
		'edit.php?post_type=cycloneslider', // Cyclone Slider
		'edit.php?post_type=ditty_news_ticker', // News Ticker
		'wp-polls/polls-manager.php', // Poll
        'wpcf7', // Contact Form 7
        'upload.php', // Media
        'separator-last', // *********************************************Last separator
        'users.php', // Users
        'link-manager.php', // Links
        'edit-comments.php', // Comments
        'themes.php', // Appearance
        'plugins.php', // Plugins
        'tools.php', // Tools
        'options-general.php', // Settings
		'wpseo_dashboard', // Wordpress Seo
		'wp-jalali', // Wordpress Seo
		
    );
}
add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
add_filter('menu_order', 'custom_menu_order');




// Print Fiendly Template Page ***************************************

	//add my_print to query vars
	function add_print_query_vars($vars) {
		// add my_print to the valid list of variables
		$new_vars = array('print');
		$vars = $new_vars + $vars;
		return $vars;
	}

	add_filter('query_vars', 'add_print_query_vars');

	add_action("template_redirect", 'my_template_redirect_2322');

	// Template selection
	function my_template_redirect_2322()
	{
		global $wp;
		global $wp_query;
		if (isset($wp->query_vars["print"]))
		{
			include(TEMPLATEPATH . '/print.php');
			die();

		}
}


/*-----------------------------------------------------------------------------Dashboard Settings------------------------- */
// show theme information on dashboard
function wpc_dashboard_widget_function() {
	echo "<ul>
	<li>زمان انتشار: تیر ماه 1392</li>
	<li>نام طرح: <a href='http://Mixa.ir/unika' title='Unika'>یونیکا</a></li>
	<li>طراح پوسته: <a href='http://Mixa.ir' title='Mixa Group'>تیم میکسا</a></li>
	<li>پشتیبان هاست: <a href='http://Mixa.ir' title='گروه هاستینگ میکسا'>Mixa Server</a></li>
	</ul>";
}
function wpc_add_dashboard_widgets() {
	wp_add_dashboard_widget('wp_dashboard_widget', 'اطلاعات فنی پوسته', 'wpc_dashboard_widget_function');
}
add_action('wp_dashboard_setup', 'wpc_add_dashboard_widgets' );

/** changing default wordpres email settings */
 
add_filter('wp_mail_from', 'new_mail_from');
add_filter('wp_mail_from_name', 'new_mail_from_name');
 
function new_mail_from($old) {
 return 'Info@Kavosh.ac.ir';
}
function new_mail_from_name($old) {
 return 'Kavosh Institute';
}



/**Add filter for registration email subject and message **/
add_filter('wp_mail','my_custom_registration_mail');
 
function my_custom_registration_mail($email) {
    if (isset ($email['subject']) && substr_count($email['subject'],'Your username and password')>0 ) {
    if (isset($email['message'])) {
 
        $messg = "با سلام و احترام\n اطلاعاتی مبنی بر درخواست عضویت شما در وب سایت ما دریافت شده است که جزئیات آن به شرح زیر می باشد.\r\n";
        $messg .= $email['message'];
        $messg .= "شما هم اکنون قادر خواهید بود در بخش مدیریت این وب سایت فعالیت کنید.\n";
        $email['message'] = $messg;
        $email['subject'] = "ثبت نام کاربر جدید در وب سایت "."موسسه کاوش";
    }
    }
    return ($email);
}



// hide unused metabox from wordpress dashboard
function wpc_dashboard_widgets() {
	global $wp_meta_boxes;

// Remove the quickpress widget
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
// Incoming links
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
// Plugins
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
// Right Now
	//unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
// recent drafts
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
// recent comments
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
// Wordpress News	
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
// Wordpress weblog
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	
}
add_action('wp_dashboard_setup', 'wpc_dashboard_widgets');

function remove_footer_admin ()
{
 echo "به پنل مديريت <a href='"; bloginfo('url'); echo"' Title='"; bloginfo('description'); echo"'>"; bloginfo('name'); echo"</a> خوش آمديد | طراحي و توسعه داده شده توسط <a href='http://mixa.ir' Title='Mixa Team'>تیم میکسا</a>";
} add_filter('admin_footer_text', 'remove_footer_admin');

/*-------------------------------------------------------------------------Security Settings------------------------------ */
// remove error mesages from wordpress login page for security reason
// add_filter('login_errors', create_function('$a', "return null;"));

// remove theme edit from theme option tab
function remove_editor_menu() { remove_action('admin_menu', '_add_themes_utility_last', 101); }
add_action('_admin_menu', 'remove_editor_menu', 1);

add_action( 'admin_init', 'hide_update_msg', 1 );
function hide_update_msg(){! current_user_can( 'install_plugins' ) and remove_action( 'admin_notices', 'update_nag', 3 );}

/*-----------------------------------------------------------------------Improve Performance Settings-------------------- */
// use shortcode in widget
add_filter('widget_text', 'do_shortcode');

// remove unused information from header
add_action('init', 'remheadlink');
function remheadlink()
{
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
}

// Remove rel category for html5 comptability
add_filter( 'the_category', 'add_nofollow_cat' );
function add_nofollow_cat( $text ){$text = str_replace('rel="category tag"', "", $text); return $text;}

// make clickable links in content
// add_filter( 'the_content', 'make_clickable', 12);
// add_filter( 'the_content', 'make_clickable', 9);

function disableAutoSave(){wp_deregister_script('autosave');}
add_action( 'wp_print_scripts', 'disableAutoSave' );


// **************************************************** Login Page

/* Login Form */

// add_filter('login_headerurl', 'change_wp_login_url',9999);
// add_filter('login_headertitle', 'change_wp_login_title',9999);
// add_action('login_head', 'custom_login_css',9999);
// add_action( 'login_head', 'login_fadein',9999);

/* Login Form Functions */
// function login_fadein() {
// echo '<script type="text/javascript">// <![CDATA[
// jQuery(document).ready(function() { jQuery("#loginform,#nav").css("display", "none");jQuery("#loginform,#nav").fadeIn(3500);});
// // ]]></script>';
// }
// function change_wp_login_url() {
// 	return get_bloginfo(url);
// }
// function change_wp_login_title() {
// 	return 'پنل مدیریت وب سایت '.get_option('blogname').' | طراحی و توسعه توسط تیم میکسا';
// }

// function custom_login_css() {
// echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/css/login.css" />';
// }


