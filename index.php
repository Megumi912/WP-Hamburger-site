<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php get_header(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class ="wrapper">
        <?php get_template_part('includes/header'); ?>
                
        <!-- トップレイヤー -->
        <section class="l-toplayer">
            <h2>ダミーサイト</h2>
        </section>
        
        <!-------------------- ここまで一部共通  -------------------------------------------------->
        
        
        
        <!-- メインメニュー -->
        <main class="p-mainMenu">
            <div class="p-takeOut">
            <?php $cat = get_category_by_slug('takeout'); ?>
            <a href="<?php echo get_category_link( $cat->cat_ID); ?>">
                <h2>Take Out</h2>
                <div class="p-takeOut_box">
                    <dl class ="p-takeout p-takeout_first">
                        <dt>Take Out</dt>
                        <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
                    </dl>
                    <dl class="p-takeout p-takeout_second">
                        <dt>Take Out</dt>
                        <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
                    </dl>
                </div>
            </a>
            </div>
            <div class="p-eatIn">
            <?php $cat = get_category_by_slug('eatin'); ?>
            <a href="<?php echo get_category_link( $cat->cat_ID); ?>">
                <h2>Eat In</h2>
                <div class="p-eatIn_box">
                    <dl class="p-eatin p-eatin_first">
                        <dt>Eat In</dt>
                        <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
                    </dl>
                    <dl class="p-eatin p-eatin_second">
                        <dt>Eat In</dt>
                        <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
                    </dl>
                </div>
            </a>
            </div>
        </main>
        
        <!-- GoogleMap 表示 -->
        <section class="c-map">
            <h2>見出しが入ります</h2>
            <p>
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
        </section>
    </div>
        
    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>

</html>



