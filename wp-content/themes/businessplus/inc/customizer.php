<?php
/**
 * businessplus Theme Customizer
 *
 * @package businessplus
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
//регистроация кастомайзера в файле customizer.php
function businessplus_customize_register( $wp_customize ) {
	//header phone
	$wp_customize->add_setting( 'phone' , array(
		'default'   => __('', 'businessplus'),	//значение по умолчанию
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'phone', array(
		'label'      => __( 'Phone number', 'businessplus' ),
		'section'    => 'title_tagline',
		'settings'   => 'phone',
		)));


	//создание панели blog_panel - ид панели
	$wp_customize->add_panel( 'blog_panel', array(
		'title' => 'Blog post page', //название панели
		'priority' => 10,
		));
	//добавляем настройки для секции. content_title - ид настроек.
	$wp_customize->add_setting( 'content_title' , array(
		'default'   => __('bloh name', 'businessplus'),	//значение по умолчанию
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_setting( 'content_subtitle' , array(
		'default'   => __('', 'businessplus'),	//значение по умолчанию
		'transport' => 'refresh', //метож презагрузки страницы
		));
	//добавляем секцию в кастомайзер. content_section - ид секции.
	$wp_customize->add_section( 'content_section' , array(
		'title'      => __( 'Title blog page', 'businessplus' ), //название секции + текстдомейн для поддержки локлизации темы
		'priority'   => 30, //порядок выведения секции в кастомайзере
		'panel'			 => 'blog_panel',
		));
	//добавление контролов в секцию
	$wp_customize->add_control(
	'content_title', //ид настройки
	array(
		'label'    => __( 'Title', 'businessplus' ), //название контрола
		'section'  => 'content_section', //ид секции
		'settings' => 'content_title', //ид настройки
		'type'     => 'text', //тип контрола
		));
	$wp_customize->add_control(
	'content_subtitle', //ид настройки
	array(
		'label'    => __( 'Subtitle', 'businessplus' ), //название контрола
		'section'  => 'content_section', //ид секции
		'settings' => 'content_subtitle', //ид настройки
		'type'     => 'text', //тип контрола
		));


	//footer copyright
	$wp_customize->add_setting( 'copyright' , array(
		'default'   => __('Copyright', 'businessplus'),	//значение по умолчанию
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'copyright', array(
		'label'      => __( 'Copyright', 'businessplus' ),
		'section'    => 'title_tagline',
		'settings'   => 'copyright',
		)));



	//single post
	$wp_customize->add_panel( 'single_post_panel', array(
		'title' => 'Single Post', //название панели
		'priority' => 20,
		));
	$wp_customize->add_section( 'content_post_section' , array(
		'title'      => __( 'Content', 'businessplus' ),
		'priority'   => 20, //порядок выведения секции в кастомайзере
		'panel'			 => 'single_post_panel',
		));
	$wp_customize->add_setting( 'content_post_title' , array(
		'default'   => __('', 'businessplus'),	//значение по умолчанию
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_setting( 'content_post_subtitle' , array(
		'default'   => __('', 'businessplus'),	//значение по умолчанию
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_setting( 'authot_quote' , array(
		'default'   => __('', 'businessplus'),	//значение по умолчанию
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_control(
	'content_post_title', //ид настройки
	array(
		'label'    => __( 'Subtitle', 'businessplus' ), //название контрола
		'section'  => 'content_post_section', //ид секции
		'settings' => 'content_post_title', //ид настройки
		'type'     => 'text', //тип контрола
		));
	$wp_customize->add_control(
	'content_post_subtitle', //ид настройки
	array(
		'label'    => __( 'Subtitle', 'businessplus' ), //название контрола
		'section'  => 'content_post_section', //ид секции
		'settings' => 'content_post_subtitle', //ид настройки
		'type'     => 'text', //тип контрола
		));
	$wp_customize->add_control(
	'authot_quote', //ид настройки
	array(
		'label'    => __( 'Author Quote', 'businessplus' ), //название контрола
		'section'  => 'content_post_section', //ид секции
		'settings' => 'authot_quote', //ид настройки
		'type'     => 'text', //тип контрола
		));

	//home panel
	$wp_customize->add_panel( 'home_panel', array(
		'title' => 'Home Page', //название панели
		'priority' => 10,
		));

	$wp_customize->add_section( 'home_header' , array(
		'title'      => __( 'Home header', 'businessplus' ),
		'priority'   => 80, //порядок выведения секции в кастомайзере
		'panel'			 => 'home_panel',
		));
	$wp_customize->add_setting( 'home_header_bg' , array(
		'default'   => __('', 'businessplus'),	//значение по умолчанию
		'type' 			=> 'theme_mod',
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_header_bg', array(  'label'        => __( 'Image home', 'businessplus' ),  'section'    => 'home_header',  'settings'   => 'home_header_bg', )));


//about
	$wp_customize->add_section( 'home_about' , array(
		'title'      => __( 'About Us', 'businessplus' ),
		'priority'   => 90, //порядок выведения секции в кастомайзере
		'panel'			 => 'home_panel',
		));
	$wp_customize->add_setting( 'home_about_title' , array(
		'default'   => __('', 'businessplus'),	//значение по умолчанию
		'type' 			=> 'theme_mod',
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_setting( 'home_about_subtitle' , array(
		'default'   => __('', 'businessplus'),	//значение по умолчанию
		'type' 			=> 'theme_mod',
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_setting( 'home_about_button' , array(
		'default'   => __('', 'businessplus'),	//значение по умолчанию
		'type' 			=> 'theme_mod',
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_setting('home_about_bgcolor', array( 'default'=> '#ffd500'));
	$wp_customize->add_control(
	'home_about_title', //ид настройки
	array(
		'label'    => __( 'Title', 'businessplus' ), //название контрола
		'section'  => 'home_about', //ид секции
		'settings' => 'home_about_title', //ид настройки
		'type'     => 'text', //тип контрола
		));
	$wp_customize->add_control(
	'home_about_subtitle', //ид настройки
	array(
		'label'    => __( 'Subtitle', 'businessplus' ), //название контрола
		'section'  => 'home_about', //ид секции
		'settings' => 'home_about_subtitle', //ид настройки
		'type'     => 'textarea', //тип контрола
		));
	$wp_customize->add_control(
	'home_about_button', //ид настройки
	array(
		'label'    => __( 'Button', 'businessplus' ), //название контрола
		'section'  => 'home_about', //ид секции
		'settings' => 'home_about_button', //ид настройки
		'type'     => 'text', //тип контрола
		));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_about_bgcolor', array(
		'label'      => __( 'Background color ', 'businessplus' ),
		'section'    => 'home_about',
		'settings'   => 'home_about_bgcolor',
		)));
	//about customize the end

	//services
	$wp_customize->add_section( 'home_services' , array(
		'title'      => __( 'Services', 'businessplus' ),
		'priority'   => 40, //порядок выведения секции в кастомайзере
		'panel'			 => 'home_panel',
		));
	$wp_customize->add_setting( 'home_services_title' , array(
		'default'   => __('', 'businessplus'),	//значение по умолчанию
		'type' 			=> 'theme_mod',
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_setting( 'home_services_subtitle' , array(
		'default'   => __('', 'businessplus'),	//значение по умолчанию
		'type' 			=> 'theme_mod',
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_setting( 'home_services_button' , array(
		'default'   => __('', 'businessplus'),	//значение по умолчанию
		'type' 			=> 'theme_mod',
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_control(
	'home_services_title', //ид настройки
	array(
		'label'    => __( 'Title', 'businessplus' ), //название контрола
		'section'  => 'home_services', //ид секции
		'settings' => 'home_services_title', //ид настройки
		'type'     => 'text', //тип контрола
		));
	$wp_customize->add_control(
	'home_services_subtitle', //ид настройки
	array(
		'label'    => __( 'Subtitle', 'businessplus' ), //название контрола
		'section'  => 'home_services', //ид секции
		'settings' => 'home_services_subtitle', //ид настройки
		'type'     => 'textarea', //тип контрола
		));
	$wp_customize->add_control(
	'home_services_button', //ид настройки
	array(
		'label'    => __( 'Button', 'businessplus' ), //название контрола
		'section'  => 'home_services', //ид секции
		'settings' => 'home_services_button', //ид настройки
		'type'     => 'text', //тип контрола
		));
	//services customize the end

	//clients
	$wp_customize->add_section( 'home_clients' , array(
		'title'      => __( 'Clients', 'businessplus' ),
		'priority'   => 50, //порядок выведения секции в кастомайзере
		'panel'			 => 'home_panel',
		));
	$wp_customize->add_setting( 'home_clients_title' , array(
		'default'   => __('', 'businessplus'),	//значение по умолчанию
		'type' 			=> 'theme_mod',
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_setting( 'home_clients_button' , array(
		'default'   => __('', 'businessplus'),	//значение по умолчанию
		'type' 			=> 'theme_mod',
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_setting( 'home_clients_subtitle' , array(
		'default'   => __('', 'businessplus'),	//значение по умолчанию
		'type' 			=> 'theme_mod',
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_control(
	'home_clients_title', //ид настройки
	array(
		'label'    => __( 'Title', 'businessplus' ), //название контрола
		'section'  => 'home_clients', //ид секции
		'settings' => 'home_clients_title', //ид настройки
		'type'     => 'text', //тип контрола
		));
	$wp_customize->add_control(
	'home_clients_subtitle', //ид настройки
	array(
		'label'    => __( 'Subtitle', 'businessplus' ), //название контрола
		'section'  => 'home_clients', //ид секции
		'settings' => 'home_clients_subtitle', //ид настройки
		'type'     => 'textarea', //тип контрола
		));
	$wp_customize->add_control(
	'home_clients_button', //ид настройки
	array(
		'label'    => __( 'Button', 'businessplus' ), //название контрола
		'section'  => 'home_clients', //ид секции
		'settings' => 'home_clients_button', //ид настройки
		'type'     => 'text', //тип контрола
		));
	//clients the end

	//news
	$wp_customize->add_section( 'home_news' , array(
		'title'      => __( 'News', 'businessplus' ),
		'priority'   => 50, //порядок выведения секции в кастомайзере
		'panel'			 => 'home_panel',
		));
	$wp_customize->add_setting( 'home_news_title' , array(
		'default'   => __('', 'businessplus'),	//значение по умолчанию
		'type' 			=> 'theme_mod',
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_setting( 'home_news_button' , array(
		'default'   => __('', 'businessplus'),	//значение по умолчанию
		'type' 			=> 'theme_mod',
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_setting( 'home_news_subtitle' , array(
		'default'   => __('', 'businessplus'),	//значение по умолчанию
		'type' 			=> 'theme_mod',
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_control(
	'home_news_title', //ид настройки
	array(
		'label'    => __( 'Title', 'businessplus' ), //название контрола
		'section'  => 'home_news', //ид секции
		'settings' => 'home_news_title', //ид настройки
		'type'     => 'text', //тип контрола
		));
	$wp_customize->add_control(
	'home_news_subtitle', //ид настройки
	array(
		'label'    => __( 'Subtitle', 'businessplus' ), //название контрола
		'section'  => 'home_news', //ид секции
		'settings' => 'home_news_subtitle', //ид настройки
		'type'     => 'textarea', //тип контрола
		));
	$wp_customize->add_control(
	'home_news_button', //ид настройки
	array(
		'label'    => __( 'Button', 'businessplus' ), //название контрола
		'section'  => 'home_news', //ид секции
		'settings' => 'home_news_button', //ид настройки
		'type'     => 'text', //тип контрола
		));
	//news the end
	//partners
	$wp_customize->add_section( 'home_partners' , array(
		'title'      => __( 'Partners', 'businessplus' ),
		'priority'   => 50, //порядок выведения секции в кастомайзере
		'panel'			 => 'home_panel',
		));
	$wp_customize->add_setting( 'home_partners_title' , array(
		'default'   => __('', 'businessplus'),	//значение по умолчанию
		'type' 			=> 'theme_mod',
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_setting( 'home_partners_subtitle' , array(
		'default'   => __('', 'businessplus'),	//значение по умолчанию
		'type' 			=> 'theme_mod',
		'transport' => 'refresh', //метож презагрузки страницы
		));
	$wp_customize->add_control(
	'home_partners_title', //ид настройки
	array(
		'label'    => __( 'Title', 'businessplus' ), //название контрола
		'section'  => 'home_partners', //ид секции
		'settings' => 'home_partners_title', //ид настройки
		'type'     => 'text', //тип контрола
		));
	$wp_customize->add_control(
	'home_partners_subtitle', //ид настройки
	array(
		'label'    => __( 'Subtitle', 'businessplus' ), //название контрола
		'section'  => 'home_partners', //ид секции
		'settings' => 'home_partners_subtitle', //ид настройки
		'type'     => 'textarea', //тип контрола
		));
	//partners the end
}
add_action( 'customize_register', 'businessplus_customize_register' );

//about bg color
function businessplus_customize_css(){
	?>
	<style type="text/css">
		.home-about {background-color: <?php echo get_theme_mod('home_about_bgcolor'); ?>;}
	</style>
	<?php
}
add_action( 'wp_head', 'businessplus_customize_css');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function businessplus_customize_preview_js() {
	wp_enqueue_script( 'businessplus_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'businessplus_customize_preview_js' );
