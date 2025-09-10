<?php
function add_custom_scripts()
{
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

    // GSAP
    wp_enqueue_script(
        'gsap', 
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js', // CDN URL
        array(), 
        '3.13.0', 
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
function add_google_fonts_preconnect($html, $handle, $href, $media)
{
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


function my_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}
add_action("after_setup_theme", "my_setup");

/* リンク
---------------------------------------------------------- */
// functions.php
define('HOME_URL',    esc_url(home_url('/')));
define('CAMPAIGN_URL', esc_url(home_url('/campaign/')));
define('ABOUT_URL',    esc_url(home_url('/about/')));
define('INFO_URL',     esc_url(home_url('/information/')));
define('BLOG_URL',     esc_url(home_url('/blog/')));
define('VOICE_URL',    esc_url(home_url('/voice/')));
define('PRICE_URL',    esc_url(home_url('/price/')));
define('FAQ_URL',      esc_url(home_url('/faq/')));
define('CONTACT_URL',  esc_url(home_url('/contact/')));
define('PRIVACY_URL',  esc_url(home_url('/privacy/')));
define('TERMS_URL',    esc_url(home_url('/terms/')));




/* ブログ一覧ページ抜粋の「[...]」を「...」に変更
---------------------------------------------------------- */
function my_excerpt_more($more)
{
    return '&#46;&#46;&#46;';
}
add_filter('excerpt_more', 'my_excerpt_more');


/* 人気記事一覧
---------------------------------------------------------- */
//記事閲覧数を取得する
function setPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);

    if ($count == "") {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


// クローラーカウントしない場合は追加
function is_bot()
{
    $ua = $_SERVER['HTTP_USER_AGENT'];

    $bot = array(
        'Googlebot',
        'Yahoo! Slurp',
        'Mediapartners-Google',
        'msnbot',
        'bingbot',
        'MJ12bot',
        'Ezooms',
        'pirst; MSIE 8.0;',
        'Google Web Preview',
        'ia_archiver',
        'Sogou web spider',
        'Googlebot-Mobile',
        'AhrefsBot',
        'YandexBot',
        'Purebot',
        'Baiduspider',
        'UnwindFetchor',
        'TweetmemeBot',
        'MetaURI',
        'PaperLiBot',
        'Showyoubot',
        'JS-Kit',
        'PostRank',
        'Crowsnest',
        'PycURL',
        'bitlybot',
        'Hatena',
        'facebookexternalhit',
        'NINJA bot',
        'YahooCacheSystem',
        'NHN Corp.',
        'Steeler',
        'DoCoMo',
    );

    foreach ($bot as $bot) {
        if (stripos($ua, $bot) !== false) {
            return true;
        }
    }

    return false;
}

// 閲覧数取得
function getPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);

    if ($count == "") { //カウントがなければ0をセット
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }

    return $count . ' Views';
}
// 投稿一覧に「閲覧数」カラムを追加
function count_add_column($columns)
{
    $columns['views'] = '閲覧数';
    return $columns;
}
add_filter('manage_posts_columns', 'count_add_column');

// 投稿一覧に「閲覧数」を表示
function count_add_column_data($column, $post_id)
{
    if ($column === 'views') {
        echo getPostViews($post_id); // 閲覧数を取得して表示
    }
}
add_action('manage_posts_custom_column', 'count_add_column_data', 10, 2);

// 閲覧数カラムをソート可能にする
function column_views_sortable($columns)
{
    $columns['views'] = 'views_sort'; // ソートキーを指定
    return $columns;
}
add_filter('manage_edit-post_sortable_columns', 'column_views_sortable');

// 実際のソート処理
function my_add_sort_by_meta($query)
{
    if (is_admin() && $query->is_main_query() && $query->get('orderby') === 'views_sort') {
        $query->set('meta_key', 'post_views_count');
        $query->set('orderby', 'meta_value_num');
    }
}
add_action('pre_get_posts', 'my_add_sort_by_meta');



/* サイドバー
---------------------------------------------------------- */
// 日付アーカイブ
function my_custom_archives()
{
    global $wpdb;

    // 年月ごとの投稿数を取得
    $results = $wpdb->get_results("
        SELECT DISTINCT YEAR(post_date) AS year, MONTH(post_date) AS month, COUNT(ID) as posts
        FROM $wpdb->posts
        WHERE post_type = 'post' AND post_status = 'publish'
        GROUP BY year, month
        ORDER BY year DESC, month DESC
    ");

    $archives = array();
    foreach ($results as $result) {
        $archives[$result->year][] = array(
            'month' => $result->month,
            'posts' => $result->posts,
            'url'   => get_month_link($result->year, $result->month),
        );
    }

    return $archives;
}

/* キャンペーンアーカイブとジャンル一覧の表示件数変更 */
function change_posts_per_page_campaign($query)
{
    if (is_admin() || ! $query->is_main_query())
        return;

    if ($query->is_post_type_archive('campaign') || $query->is_tax('campaign_genre')) {
        $query->set('posts_per_page', 4);
    }
}
add_action('pre_get_posts', 'change_posts_per_page_campaign');


/* 私たちについてギャラリーの表示件数変更 */
function change_posts_per_page_about($query)
{
    if (is_admin() || ! $query->is_main_query())
        return;
    if ($query->is_post_type_archive('about')) {
        $query->set('posts_per_page', -1); // ← -1 だと無限表示
    }
}
add_action('pre_get_posts', 'change_posts_per_page_about');


/* お客様の声ギャラリーの表示件数変更 */
function change_posts_per_page_voice($query)
{
    if (is_admin() || ! $query->is_main_query())
        return;
    if ($query->is_post_type_archive('voice')) {
        $query->set('posts_per_page', 6); // ← -1 だと無限表示
    }
}
add_action('pre_get_posts', 'change_posts_per_page_voice');


/* コンタクトフォーム
---------------------------------------------------------- */
// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
    return false;
}

// サンクスページへリダイレクト
function redirect_to_thanks_page()
{
    if (is_page('contact')) {
        echo <<<EOD
		<script>
		document.addEventListener( 'wpcf7mailsent', function() {
			window.location = '/contact/thanks/';
		});
		</script>
		EOD;
    }
}
add_action('wp_footer', 'redirect_to_thanks_page');
