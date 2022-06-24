<?php

/**
 * underscore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package underscore
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function underscore_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on underscore, use a find and replace
		* to change 'underscore' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('underscore', get_template_directory() . '/languages');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'underscore'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'underscore_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'underscore_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function underscore_content_width()
{
	$GLOBALS['content_width'] = apply_filters('underscore_content_width', 640);
}
add_action('after_setup_theme', 'underscore_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function underscore_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'underscore'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'underscore'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'underscore_widgets_init');

/**
 * theme scripts and styles.
 */
function underscore_scripts()
{
	wp_enqueue_style('output', get_template_directory_uri() . '/dist/output.css', false, '1.1', 'all');
	wp_enqueue_style('accordion', get_template_directory_uri() . '/dist/home/accordion.css', false, '1.1', 'all');
	wp_enqueue_style('swiperSlider', get_template_directory_uri() . '/dist/home/swiperSlider.css', false, '1.1', 'all');
	wp_enqueue_style('tabEducationContent', get_template_directory_uri() . '/dist/home/tabEducationContent.css', false, '1.1', 'all');
	wp_enqueue_style('authModal', get_template_directory_uri() . '/dist/public/css/authModal.css', false, '1.1', 'all');
	wp_enqueue_style('searchModal', get_template_directory_uri() . '/dist/public/css/searchModal.css', false, '1.1', 'all');

	/* adding scripts */
	wp_enqueue_script('index', get_template_directory_uri() . '/dist/home/index.js', array('jquery'), 1.1, true);
	wp_enqueue_script('accordions', get_template_directory_uri() . '/dist/home/accordions.js', array('jquery'), 1.1, true);
	wp_enqueue_script('swiperSlider', get_template_directory_uri() . '/dist/home/swiperSlider.js', array('jquery'), 1.1, true);
	wp_enqueue_script('tabEducationContent', get_template_directory_uri() . '/dist/home/tabEducationContent.js', array('jquery'), 1.1, true);
	wp_enqueue_script('authModal', get_template_directory_uri() . '/dist/public/js/authModal.js', array('jquery'), 1.1, true);
	wp_enqueue_script('searchModal', get_template_directory_uri() . '/dist/public/js/searchModal.js', array('jquery'), 1.1, true);

	/*
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	*/
}
add_action('wp_enqueue_scripts', 'underscore_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}


/* codestar */
// Check core class for avoid errors
if (class_exists('CSF')) {

	// Set a unique slug-like ID
	$prefix = 'my_options';
	// Create options
	CSF::createOptions($prefix, array(
		'menu_title' => 'theme options',
		'menu_slug'  => 'theme-options',
	));

	// Create a section
	CSF::createSection($prefix, array(
		'title'  => 'تنظیمات صفحه اصلی',
		'fields' => array(
			//start mainpage options
			array(
				'id'            => 'opt-accordion-1',
				'type'          => 'accordion',
				'title'         => 'تنظیمات صفحه اصلی',
				'accordions'    => array(
					/*header section*/
					array(
						'title'     => 'قسمت هدر',
						'icon'      => 'fa fa-gear',
						'fields'    => array(
							array(
								'id'    => 'opt-text-1',
								'type'  => 'text',
								'title' => 'متن تماس را وارد کنید',
							),
							array(
								'id'    => 'opt-text-2',
								'type'  => 'text',
								'title' => 'شماره تماس را وارد کنید',
							),
						)
					),
					/*slider section*/
					array(
						'title'     => 'اسلاید صفحه اصلی',
						'icon'      => 'fa fa-gear',
						'fields'    => array(
							array(
								'id'    => 'opt-textarea',
								'type'  => 'textarea',
								'title' => 'شعار مجموعه را وارد کنید',
							),
							array(
								'id'    => 'opt-media-1',
								'type'  => 'media',
								'title' => 'عکس اسلاید را وارد کنید',
							),
							array(
								'id'    => 'opt-media-2',
								'type'  => 'media',
								'title' => 'عکس بک گراند اسلاید را وارد کنید',
							),
							array(
								'id'    => 'opt-text-3',
								'type'  => 'text',
								'title' => 'تایتل آزمون',
							),
							array(
								'id'    => 'opt-textarea-1',
								'type'  => 'textarea',
								'title' => 'توضیحات آزمون',
							),
							array(
								'id'    => 'opt-text-4',
								'type'  => 'text',
								'title' => 'متن دکمه آزمون',
							),
							array(
								'id'    => 'opt-link-1',
								'type'  => 'link',
								'title' => 'لینک دکمه ورود به آزمون',
							),
							array(
								'id'    => 'opt-text-5',
								'type'  => 'text',
								'title' => 'متن آیکون اسلاید سمت راست',
							),
							array(
								'id'    => 'opt-text-6',
								'type'  => 'text',
								'title' => 'متن آیکون اسلاید وسط',
							),
							array(
								'id'    => 'opt-text-7',
								'type'  => 'text',
								'title' => 'متن آیکون اسلاید سمت چپ',
							),
						)
					),
					/*video section*/
					array(
						'title'     => 'تنظیمات ویدیو صفحه اصلی',
						'icon'      => 'fa fa-gear',
						'fields'    => array(
							array(
								'id'    => 'video',
								'type'  => 'media',
								'title' => 'ویدیو را آپلود کنید',
							),
							array(
								'id'    => 'video-poster',
								'type'  => 'media',
								'title' => 'پوستر ویدیو را آپلود کنید',
							),
							array(
								'id'    => 'video-title',
								'type'  => 'text',
								'title' => 'تایتل ویدیو را وارد کنید',
							),
							array(
								'id'    => 'video-description',
								'type'  => 'textarea',
								'title' => 'توضیحات ویدیو را وارد کنید',
							),
							array(
								'id'    => 'video-desc-button-text',
								'type'  => 'text',
								'title' => 'متن دکمه توضیحات ویدیو را وارد کنید',
							),
							array(
								'id'    => 'video-desc-image',
								'type'  => 'media',
								'title' => 'عکس قسمت توضیحات ویدیو را وارد کنید',
							),
						)
					),
					/*testimonial section*/
					array(
						'title'     => 'تنظیمات دیدگاه های سایت',
						'icon'      => 'fa fa-gear',
						'fields'    => array(
							array(
								'id'    => 'testimonial-title',
								'type'  => 'text',
								'title' => 'تایتل دیدگاه ها را وارد کنید',
							),
							array(
								'id'    => 'testimonial-desc',
								'type'  => 'textarea',
								'title' => 'توضیحات دیدگاه ها را وارد کنید',
							),
							array(
								'id'    => 'testimonial-desc-image-right',
								'type'  => 'media',
								'title' => 'عکس سمت راست توضیحات  دیدگاه',
							),
							array(
								'id'    => 'testimonial-desc-image-left',
								'type'  => 'media',
								'title' => 'عکس سمت چپ توضیحات  دیدگاه',
							),
							//start group
							array(
								'id'        => 'testimonial-group',
								'type'      => 'group',
								'title'     => 'دیدگاه های سایت',
								'fields'    => array(
									array(
										'id'    => 'author-name',
										'type'  => 'text',
										'title' => 'نام نویسنده را وارد کنید',
									),
									array(
										'id'    => 'author-position',
										'type'  => 'text',
										'title' => 'سمت نوینده را وارد کنید',
									),
									array(
										'id'    => 'author-desc',
										'type'  => 'textarea',
										'title' => 'توضیحات نویسنده را وارد کنید',
									),
									array(
										'id'    => 'author-voice',
										'type'  => 'media',
										'title' => ',ویس نویسند را أپلود کنید',
									),
								),
							),
							//end group
							array(
								'id'    => 'testimonial-author-image-right',
								'type'  => 'media',
								'title' => 'عکس نویسنده سمت چپ',
							),
							array(
								'id'    => 'testimonial-author-image-left',
								'type'  => 'media',
								'title' => 'عکس نویسنده سمت راست',
							),
							array(
								'id'    => 'testimonial-author-image-center',
								'type'  => 'media',
								'title' => 'عکس نویسنده وسط',
							),
						)
						//end testimonial field
					),
					/* brands section */
					array(
						'title'     => 'تنظیمات برند ها',
						'icon'      => 'fa fa-gear',
						'fields'    => array(
							array(
								'id'    => 'brand-txt-title',
								'type'  => 'text',
								'title' => 'تایتل برند ها را وارد کنید',
							),
							array(
								'id'    => 'right-badge-txt',
								'type'  => 'text',
								'title' => 'عنوان برند سمت راست',
							),
							array(
								'id'    => 'right-badge-icon',
								'type'  => 'media',
								'title' => 'آیکون برند سمت راست',
							),
							array(
								'id'    => 'right-badge-number',
								'type'  => 'text',
								'title' => 'شمارنده برند سمت راست',
							),
							array(
								'id'    => 'left-badge-txt',
								'type'  => 'text',
								'title' => 'عنوان برند سمت چپ',
							),
							array(
								'id'    => 'left-badge-icon',
								'type'  => 'media',
								'title' => 'آیکون برند سمت چپ',
							),
							array(
								'id'    => 'left-badge-number',
								'type'  => 'text',
								'title' => 'شمارنده برند سمت چپ',
							),
							array(
								'id'    => 'center-badge-txt',
								'type'  => 'text',
								'title' => 'عنوان برند وسط',
							),
							array(
								'id'    => 'center-badge-icon',
								'type'  => 'media',
								'title' => 'آیکون برند وسط',
							),
							array(
								'id'    => 'center-badge-number',
								'type'  => 'text',
								'title' => 'شمارنده برند وسط',
							),
						)
					),
					//FAQ section
					array(
						'title'     => 'تنظیمات سوالات متداول',
						'icon'      => 'fa fa-gear',
						'fields'    => array(
							array(
								'id'    => 'faq-title',
								'type'  => 'text',
								'title' => 'تایتل سوالات متداول را وارد کنید',
							),
							array(
								'id'    => 'faq-btn-txt',
								'type'  => 'text',
								'title' => 'متن دکمه سوالات متداول را وارد کنید',
							),
							array(
								'id'    => 'faq-btn-link',
								'type'  => 'link',
								'title' => 'لینک دکمه سوالات متداول را وارد کنید',
							),
							//accordion field
							array(
								'id'     => 'faq-accordion',
								'type'   => 'group',
								'title'  => 'سوالات متداول',
								'fields' => array(
									array(
										'id'    => 'faq-question',
										'type'  => 'text',
										'title' => 'سوال',
									),
									array(
										'id'    => 'faq-answer',
										'type'  => 'textarea',
										'title' => 'پاسخ',
									),
								)
							),
							//end accordion field
							array(
								'id'    => 'faq-image',
								'type'  => 'media',
								'title' => 'عکس سوالات متداول',
							),
						)
					),
					//Posts section
					array(
						'title'     => 'تنظیمات مطالب',
						'icon'      => 'fa fa-gear',
						'fields'    => array(
							array(
								'id'    => 'articles-txt',
								'type'  => 'text',
								'title' => 'عنوان بخش مقالات',
							),
							array(
								'id'    => 'articles-txt-top',
								'type'  => 'text',
								'title' => 'عنوان مقاله بالا',
							),
							array(
								'id'    => 'articles-txt-center',
								'type'  => 'text',
								'title' => 'عنوان مقاله وسط',
							),
							array(
								'id'    => 'articles-txt-bottom',
								'type'  => 'text',
								'title' => 'عنوان مقاله پایین',
							),
							array(
								'id'    => 'article-btn-txt',
								'type'  => 'text',
								'title' => 'متن دکمه مقالات را وارد کنید',
							),
							array(
								'id'    => 'article-btn-link',
								'type'  => 'link',
								'title' => 'لینک دکمه مقالات را وارد کنید',
							),
						)
					),
					//Contact section
					array(
						'title'     => 'تنظیمات تماس با ما',
						'icon'      => 'fa fa-gear',
						'fields'    => array(
							array(
								'id'    => 'contact-image',
								'type'  => 'media',
								'title' => 'عکس تماس با ما را وارد کنید',
							),
							array(
								'id'    => 'contact-location-txt',
								'type'  => 'text',
								'title' => 'متن آدرس را وارد کنید',
							),
							array(
								'id'    => 'contact-location-desc',
								'type'  => 'textarea',
								'title' => 'متن توضیحات آدرس را وارد کنید',
							),
							array(
								'id'    => 'contact-num-txt',
								'type'  => 'text',
								'title' => 'متن شماره تماس را وارد کنید',
							),
							array(
								'id'    => 'contact-num-number',
								'type'  => 'text',
								'title' => 'شماره تماس را وارد کنید',
							),
							array(
								'id'    => 'contact-email-txt',
								'type'  => 'text',
								'title' => 'متن ایمیل را وارد کنید',
							),
							array(
								'id'    => 'contact-email',
								'type'  => 'text',
								'title' => 'ایمیل را وارد کنید',
							),
							array(
								'id'    => 'contact-ctf-txt',
								'type'  => 'text',
								'title' => 'متن مجوز ها را وارد کنید',
							),
							array(
								'id'    => 'footer-right-txt',
								'type'  => 'text',
								'title' => 'کپی رایت سمت راست',
							),
							array(
								'id'    => 'footer-left-txt',
								'type'  => 'text',
								'title' => 'کپی رایت سمت چپ',
							),
						)
					),
				)
				//end accordion
			),
		),
		//end mainpage options		
	));


	//Exams section
	CSF::createSection($prefix, array(
		'title'  => 'تنظیمات آزمون ها',
		'fields' => array(
			// A text field
			array(
				'id'        => 'exams-section',
				'type'      => 'group',
				'title'     => 'تعریف آزمون ها',
				'fields'    => array(
					array(
						'id'    => 'ExamTitle',
						'type'  => 'text',
						'title' => 'نام آزمون را وارد کنید',
					),
					array(
						'id'    => 'ExamImage',
						'type'  => 'media',
						'title' => 'تصویر آزمون را وارد کنید',
					),
					array(
						'id'    => 'ExamDesc',
						'type'  => 'textarea',
						'title' => 'توضیحات آزمون را وارد کنید',
					),
					array(
						'id'     => 'Questions',
						'type'   => 'repeater',
						'title'  => 'سوال آزمون را وارد کنید ',
						'fields' => array(
							array(
								'id'    => 'question',
								'type'  => 'text',
								'title' => 'سوال'
							),
							array(
								'id'    => 'MainAnswer',
								'type'  => 'text',
								'title' => 'جواب اصلی',
							),
							array(
								'id'     => 'Answers',
								'type'   => 'repeater',
								'title'  => 'پاسخ ها',
								'fields' => array(
									array(
										'id'    => 'answer',
										'type'  => 'text',
										'title' => 'جواب'
									),
									array(
										'id'    => 'AnswerWeight',
										'type'  => 'text',
										'title' => 'وزن پاسخ',
									),
								),
							),
						),
					),
					array(
						'type'    => 'heading',
						'content' => 'تنظیمات محاسبه نتیجه آزمون',
					),
					array(
						'id'    => 'MinNumberToDown',
						'type'  => 'text',
						'title' => 'وزن حداقل به پایین',
					),
					array(
						'id'    => 'MinNumberToDownMsg',
						'type'  => 'text',
						'title' => 'پیام حداقل به پایین',
					),
					array(
						'id'    => 'MinNumber',
						'type'  => 'text',
						'title' => 'وزن حداقل',
					),
					array(
						'id'    => 'MaxNumber',
						'type'  => 'text',
						'title' => 'وزن حداکثر',
					),
					array(
						'id'    => 'MinToMaxMsg',
						'type'  => 'text',
						'title' => 'پیام حداقل تا حداکثر',
					),
					array(
						'id'    => 'MaxNumberToUp',
						'type'  => 'text',
						'title' => 'وزن حداکثر به بالا',
					),
					array(
						'id'    => 'MaxNumberToUpMsg',
						'type'  => 'text',
						'title' => 'پیام حداکثر به بالا',
					),
				),
			),
		)
	));



	//About us section
	CSF::createSection($prefix, array(
		'title'  => 'تنظیمات درباره ما',
		'fields' => array(
			// A text field
			array(
				'id'        => 'about-us-section',
				'type'      => 'group',
				'title'     => 'ایجاد قسمت درباره ما',
				'fields'    => array(
					array(
						'id'    => 'AboutUsTitle',
						'type'  => 'text',
						'title' => 'عنوان درباره ما',
					),
					array(
						'id'    => 'AboutUsDescTitle',
						'type'  => 'text',
						'title' => 'عنوان توضیحات درباره ما',
					),
					array(
						'id'    => 'AboutUsImage',
						'type'  => 'media',
						'title' => 'تصویر درباره ما را وارد کنید',
					),
					array(
						'id'    => 'AboutUsDesc',
						'type'  => 'textarea',
						'title' => 'توضیحات درباره ما',
					),
					array(
						'id'    => 'AboutUsDesc2',
						'type'  => 'textarea',
						'title' => 'توضیحات درباره ما2',
					),
					array(
						'id'    => 'AboutUsDesc3',
						'type'  => 'textarea',
						'title' => 'توضیحات درباره ما3',
					),

				),
			),
		)
	));


	//About us section
	CSF::createSection($prefix, array(
		'title'  => 'تنظیمات تماس با ما',
		'fields' => array(
			// A text field
			array(
				'id'        => 'contact-us-section',
				'type'      => 'group',
				'title'     => 'ایجاد قسمت تماس با ما',
				'fields'    => array(
					array(
						'id'    => 'AddressTitle',
						'type'  => 'text',
						'title' => 'عنوان آدرس',
					),
					array(
						'id'    => 'AddressDesc',
						'type'  => 'textarea',
						'title' => 'توضیحات آدرس',
					),

					array(
						'id'    => 'CallNumberTitle',
						'type'  => 'text',
						'title' => 'عنوان شماره های تماس ',
					),
					array(
						'id'    => 'CallNumber',
						'type'  => 'text',
						'title' => 'شماره تماس',
					),
					array(
						'id'    => 'CallNumber2',
						'type'  => 'text',
						'title' => 'شماره تماس دوم',
					),

				),
			),
		)
	));


	//backup section
	CSF::createSection($prefix, array(
		'title'  => 'ایجاد بک آپ',
		'fields' => array(
			array(
				'type' => 'backup',
			),
		)
	));


	//Creat Contact us endpoint
	add_action('rest_api_init', function () {
		function DspContactUs()
		{
			$options_data = get_option('my_options');
			$endpoint_data = $options_data['contact-us-section'];
			return $endpoint_data;
		}

		register_rest_route('/ashkan/v1', 'contactus', [
			'methods' => 'GET',
			'callback' => 'DspContactUs'
		]);
	});



	//Creat About us endpoint
	add_action('rest_api_init', function () {
		function DspAboutUs()
		{
			$options_data = get_option('my_options');
			$endpoint_data = $options_data['about-us-section'];
			return $endpoint_data;
		}

		register_rest_route('/ashkan/v1', 'aboutus', [
			'methods' => 'GET',
			'callback' => 'DspAboutUs'
		]);
	});



	//create exams endpoint
	add_action('rest_api_init', function () {
		function DspExamApi()
		{
			$options_data = get_option('my_options');
			$endpoint_data = $options_data['exams-section'];
			return $endpoint_data;
		}

		register_rest_route('/ashkan/v1', 'exams', [
			'methods' => 'GET',
			'callback' => 'DspExamApi'
		]);
	});
}
