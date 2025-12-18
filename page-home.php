<?php get_header(); ?>
<main class="main">
    <div class="top">
        <p><?php bloginfo('description'); ?></p>
    </div>

    <div class="service" id="service">
        <h2 class="service-title">Service</h2>
        <div class="service-content">
            <!-- ここはカスタム投稿タイプ -->
            <?php
            // カスタム投稿タイプ service を取得
            $service_query = new WP_Query(array(
                'post_type' => 'service',
                'posts_per_page' => -1, // 全件取得
                'orderby' => 'date',
                'order' => 'DESC',
            ));
            ?>
            <?php while ($service_query->have_posts()) : $service_query->the_post(); ?>
            <div class="service-item">
                <div class="service-item-img">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium', ['class' => 'service-item-img']); ?>
                    <?php endif; ?>
                </div>
                <p><?php the_title(); ?></p>
            </div>
            <?php endwhile; ?>
            <!-- ここまで -->
        </div>
    </div>

    <?php
$achievements = new WP_Query(array(
    'post_type' => 'achievements',
    'posts_per_page' => -1
));

if ($achievements->have_posts()) :
    $total = $achievements->found_posts;
    $index = 1;
?>
<div class="achievements" id="achievements">
    <h2 class="achievements-title">Achievements</h2>

    <!-- 件数表示（タイトル直下） -->
    <div class="achievements-dots">
    <?php for ($i = 0; $i < $total; $i++): ?>
        <span class="dot <?php echo $i === 0 ? 'active' : ''; ?>"></span>
    <?php endfor; ?>
    </div>

    <div class="achievements-slider">
        <?php while ($achievements->have_posts()) : $achievements->the_post();
            $link = get_post_meta(get_the_ID(), 'achievements_link_url', true);
        ?>
        <div class="achievements-item">

            <div class="achievements-img-wrap">
                <?php if ($link): ?>
                    <iframe
                        src="<?php echo esc_url($link); ?>"
                        class="achievements-iframe"
                        loading="lazy">
                    </iframe>
                <?php endif; ?>
            </div>

            <div class="achievements-area">
                <p class="achievements-item-title"><?php the_title(); ?></p>

                <?php if ($link): ?>
                    <a href="<?php echo esc_url($link); ?>" target="_blank">
                        サイトリンクに飛ぶ
                    </a>
                <?php endif; ?>

                <div class="achievements-content">
                    <?php the_content(); ?>
                </div>
            </div>

        </div>
        <?php $index++; endwhile; ?>
    </div>
</div>

<?php
    wp_reset_postdata();
endif;
?>




<?php
$about_query = new WP_Query(array(
    'post_type' => 'about',
    'posts_per_page' => -1
));

if ($about_query->have_posts()) :
?>
<div class="about" id="about">
    <h2 class="about-title">About</h2>

    <?php while ($about_query->have_posts()) : $about_query->the_post(); ?>
        <div class="about-area">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="about-img">
            <?php endif; ?>

            <div class="about-comment">
                <p><?php the_title(); ?></p>
                <p><?php the_content(); ?></p>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<?php
    wp_reset_postdata();
endif;
?>







    <div class="contact">
        <h2 class="contact-title">Contact</h2>
        <div class="contact-area">
            <p class="contact-text">ラインよりお問い合わせを承っております！<br>まずは気軽にご相談からお待ちしております！</p>
            <a href="https://lin.ee/9V4yVsx"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png" alt="友だち追加"  border="0" class="contact-link"></a>

        </div>

    </div>

</main>
<?php get_footer(); ?>