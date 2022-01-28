<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header(); ?> 
</head>
<body>
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
















