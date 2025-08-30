<?php
function add_custom_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap',
        array(),
        null
    );

    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css',
        array(),
        '8.0.0'
    );

    // テーマCSS
    wp_enqueue_style(
        'theme-styles',
        get_theme_file_uri('/assets/css/style.css'),
        array(),
        filemtime(get_theme_file_path('/assets/css/style.css'))
    );

    // jQuery
    wp_enqueue_script(
        'jquery',
        'https://code.jquery.com/jquery-3.6.0.js',
        array(),
        '3.6.0',
        true
    );

    // jQuery Cookie
    wp_enqueue_script(
        'jquery-cookie',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js',
        array('jquery'),
        '1.4.1',
        true
    );

    // jQuery inview
    wp_enqueue_script(
        'jquery-inview',
        get_theme_file_uri('/assets/js/jquery.inview.min.js'),
        array('jquery'),
        filemtime(get_theme_file_path('/assets/js/jquery.inview.min.js')),
        true
    );

    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',
        array('jquery'),
        '8.0.0',
        true
    );

    // テーマJS
    wp_enqueue_script(
        'theme-scripts',
        get_theme_file_uri('/assets/js/script.js'),
        array('jquery', 'swiper-js'),
        filemtime(get_theme_file_path('/assets/js/script.js')),
        true
    );
}
add_action('wp_enqueue_scripts', 'add_custom_scripts');

// Google Fonts用 preconnect
function add_google_fonts_preconnect($html, $handle, $href, $media) {
    if ($handle === 'google-fonts') {
        $html = <<<EOT
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
$html
EOT;
    }
    return $html;
}
add_filter('style_loader_tag', 'add_google_fonts_preconnect', 10, 4);


function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );

// ブログ一覧ページ抜粋の「[...]」を「...」に変更
function my_excerpt_more($more) {
  return '&#46;&#46;&#46;';
}
add_filter('excerpt_more', 'my_excerpt_more');
