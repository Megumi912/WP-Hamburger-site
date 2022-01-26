<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header(); ?> 
</head>
<body>
    <div class ="wrapper">
        <?php get_template_part('includes/header'); ?>                       
        <!-- トップレイヤー -->
        <section class="l-toplayer_archive">
            <div class="l-toplayer_font">
                <h2>Menu:</h2>
                <p><?php single_cat_title(); ?></p>
            </div>
        </section>

        <main class="p-main_wrapper">
            <h2>小見出しが入ります</h2>
            <p> 
                テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。
            </p>
        </main>
        
        <section class="p-articles_menuList">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="p-articles_menu">
                    <div class="p-articles_img">
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu_cheeseburger.png">
                        <?php endif; ?>
                    </div>
                <div class="p-articles_text">
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                    <button class="c-menu_detail"><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </section>
        <?php wp_pagenavi(); ?>        
    </div>
    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
</body>
    
</html>





