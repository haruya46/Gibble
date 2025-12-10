<?php
// テーマの機能追加ファイル functions.php

// ナビゲーションメニューを登録
function theme_setup() {
  // ヘッダーメニューを登録
  register_nav_menus([
    'header-menu' => 'ヘッダーメニュー',
  ]);
}
// アイキャッチ画像を有効化
add_theme_support('post-thumbnails');
function theme_enqueue_styles() {
  // 共通スタイル
  wp_enqueue_style('common-style', get_template_directory_uri() . '/style.css', [], filemtime(get_template_directory() . '/style.css'));

  // 固定ページごとのスタイル
  if (is_page('home')) {
    wp_enqueue_style('home-style', get_template_directory_uri() . '/asset/css/home.css', [], filemtime(get_template_directory() . '/asset/css/home.css'));

  }
  // 固定ページ共通のスタイル（page.php 用）
  if (is_page()) {
    wp_enqueue_style('page-style', get_template_directory_uri() . '/asset/css/page.css', [], filemtime(get_template_directory() . '/asset/css/page.css'));
  }

  // 投稿ページ（single.php）用
  if (is_single() && 'post' === get_post_type()) {
    wp_enqueue_style('single-style', get_template_directory_uri() . '/asset/css/single.css', [], filemtime(get_template_directory() . '/asset/css/single.css'));
  }

}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// カスタム投稿タイプ：service
function service() {
  register_post_type('service', array(
      'labels' => array(
          'name' => 'サービス',
          'singular_name' => 'サービス',
          'add_new' => '新規追加',
          'add_new_item' => 'サービスを追加',
          'edit_item' => 'サービス名を編集',
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-portfolio',
      'supports' => array('title','thumbnail'), // 必要に合わせて
      'rewrite' => array('slug' => 'service'),
  ));
}
add_action('init', 'service');


function create_achievements_post_type() {
  register_post_type('achievements', array(
      'labels' => array(
          'name' => 'Achievements',
          'singular_name' => 'Achievement',
          'add_new' => '新規追加',
          'add_new_item' => 'Achievements を追加',
          'edit_item' => 'Achievements を編集',
      ),
      'public' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-awards',
      'supports' => array('title', 'editor', 'thumbnail'),
      'has_archive' => true,
      'show_in_rest' => true,
  ));
}
add_action('init', 'create_achievements_post_type');

// メタボックス登録
function achievements_add_meta_boxes() {
  add_meta_box(
      'achievements_meta_box',
      'リンク設定',
      'achievements_meta_box_html',
      'achievements',
      'normal',
      'default'
  );
}
add_action('add_meta_boxes', 'achievements_add_meta_boxes');

// メタボックスHTML
function achievements_meta_box_html($post) {
  $link_url = get_post_meta($post->ID, 'achievements_link_url', true);
  ?>
  <p>
      <label>リンクURL：</label><br>
      <input type="text" name="achievements_link_url" 
             value="<?php echo esc_attr($link_url); ?>" 
             style="width:100%;">
  </p>
  <?php
}

// 保存処理
function achievements_save_meta_boxes($post_id) {
  if (array_key_exists('achievements_link_url', $_POST)) {
      update_post_meta($post_id, 'achievements_link_url', sanitize_text_field($_POST['achievements_link_url']));
  }
}
add_action('save_post', 'achievements_save_meta_boxes');


function create_about_post_type() {
  register_post_type('about', array(
      'labels' => array(
          'name' => 'About',
          'singular_name' => 'About',
      ),
      'public' => true,
      'menu_position' => 5,
      'supports' => array('title', 'editor', 'thumbnail'),
      'has_archive' => false,
      'menu_icon' => 'dashicons-id',
  ));
}
add_action('init', 'create_about_post_type');