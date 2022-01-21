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
                <p>チーズバーガー</p>
            </div>
        </section>
        
        <!-------------------- ここまで一部共通  -------------------------------------------------->
        
        
        <!-- バーガーメニュー -->
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
            <div class="p-articles_menu">
                <div class="p-articles_img">
                    <img src="img/menu_cheeseburger.png">
                </div>
                <div class="p-articles_text">
                    <h3>
                        <?php the_title(); ?>
                    </h3>                   <!--＜ーーーーーーーーーー後で確認  -->
                    <h4>小見出しが入ります</h4>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <button class="c-menu_detail">詳しく見る</button>
                </div>
            </div>
            
            <div class="p-articles_menu">
                <div class="p-articles_img">
                    <img src="img/menu_cheeseburger.png">
                </div>
                <div class="p-articles_text">
                    <h3>ダブルチーズバーガー</h3>
                    <h4>小見出しが入ります</h4>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <button class="c-menu_detail">詳しく見る</button>
                </div>
            </div>
            
            <div class="p-articles_menu">
                <div class="p-articles_img">
                    <img src="img/menu_cheeseburger.png">
                </div>
                <div class="p-articles_text">
                    <h3>スペシャルチーズバーガー</h3>
                    <h4>小見出しが入ります</h4>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <button class="c-menu_detail">詳しく見る</button>
                </div>
            </div>
        </section>
        
        <section class="c-pagenation">
            <ul class="c-pagenation_list">
                <li>≪ 前へ</li>
                <li>次へ ≫</li>
            </ul>
            <div class="c-pagenation_list-tb">
                <span>page 1/10</span>
                <span>≪</span>
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                </ul>
                <span>≫</span>
            </div>
        </section>
    </div>

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>
    
</html>


