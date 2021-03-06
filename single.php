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
                <?php 
                $id = get_post_thumbnail_id();
                $img = wp_get_attachment_image_src($id, 'large');
                ?>
                <section class="l-toplayer_single" style="background-image: url('<?php echo $img[0]; ?>')">
                    <div class="l-toplayer_singlefont">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </section>
                <main <?php post_class('p-main_articles'); ?>>
                    <?php the_content(); ?>
                </main>
            <?php endwhile; ?>
            <?php endif; ?>
    </div>   

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>
</html>





















