<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="GIbbleではホームページ制作・システム開発を一貫して対応しております。チーム体制となっており各分野の専門を集めることでクライアント様が喜ぶ結果にコミットします。">

  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
  <div class="header" id="home">
    <a href="<?php echo get_permalink(get_page_by_path('home')); ?>/#home">
    <img src="<?php echo get_template_directory_uri(); ?>/asset/img/gibble-logo.PNG" alt="ホームページ開発・システム開発" class="header-logo">
    </a>
    <nav class="nav" id="nav">
      <ul>
        <li><a href="<?php echo get_permalink(get_page_by_path('service')); ?>/#service">Service</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('achievements')); ?>/#achievements">Achievements</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('about')); ?>/#about">About</a></li>
        <li><a href="https://lin.ee/9nzXYMh">Contact</a></li>
      </ul>
    </nav>

  </div>
</header>

