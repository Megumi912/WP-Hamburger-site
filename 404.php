<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php get_header(); ?> 
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class ="wrapper">
        <?php get_template_part('includes/header'); ?>
            <main <?php post_class('p-main_articles'); ?>>
                <div class="error">
                    <img class="error_img" src="<?php echo esc_url( get_template_directory_uri() .'/img/404error.jpg' ); ?>" alt="ページは見つかりませんでした">
                    <p class="error__text">お探しのページが見つかりませんでした</p>
                    <p class="error__text">URL :<span><?php echo esc_url(get_pagenum_link()); ?></span></p>
                    <p class="error__text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページはこちら</a></p>
                </div>
            </main>
    </div>   

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>
</html>
























