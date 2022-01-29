<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php get_header(); ?> 
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class ="wrapper">
        <?php get_template_part('includes/header'); ?>

        <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
        <!-- トップレイヤー -->
        <section class="l-toplayer_page">
            <div class="l-toplayer_pagefont">
                <h1><?php the_title(); ?></h1>
            </div>
        </section>
        <main class="p-main_articles">
            <?php the_content(); ?>
        </main>
    </div>
    
    <?php endwhile; ?>
    <?php endif; ?>

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>

</html>














