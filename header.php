<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="AhaGate（アハゲート）は、初心者から中級者までを対象としたオンラインプログラミングスクールです。
  月4回のZoomセッションやLINEでの質問対応を通じて、受講生の自走力と継続力を育成します。
  ビギナーコースではHTML、CSS、JavaScript、PHPなどの基礎を学び、プロコースではLaravelを用いたポートフォリオ制作を行います。
  月額30,000円で入会金や違約金は不要、途中解約も可能です。
  学習習慣がなくても、講師がスケジュール管理をサポートします。詳細は公式サイトをご覧ください。">

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

