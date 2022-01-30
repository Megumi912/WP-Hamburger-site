<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php get_header(); ?> 
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class ="wrapper">
        <?php get_template_part('includes/header'); ?>    
        <section class="l-toplayer_archive">
            <div class="l-toplayer_font">
                <h2>Search:</h2>
                <p><?php echo the_search_query() ?></p>
            </div>
        </section>

        <p class="c-serch_result">
            「<?php echo the_search_query() ?>」の検索結果は<?php echo $wp_query->found_posts; ?>件です。
        </p>
        
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
        
        <!-- 参考:https://blotame.com/2021/03/19/searchform/ -->
        <section class="p-articles_menuList">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="p-articles_menu">
                    <div class="p-articles_img">
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php else: ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/menu_cheeseburger.png">
                        <?php endif; ?>
                    </div>
                <div class="p-articles_text">
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                    <button class="c-menu_detail"><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
                </div>
            </div>
            <?php wp_link_pages(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </section>
        <?php wp_pagenavi(); ?>
    </div>
    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
</body>

</html>














