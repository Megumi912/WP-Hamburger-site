<?php
add_action('init',function(){
    add_theme_support('post-thumbnails');
    add_theme_support( 'automatic-feed-links' ); 
    add_theme_support( 'title-tag' );

    register_nav_menus( array (
        'footer-menu' => 'フッターメニュー',
        'sidenav' => 'サイドナビ',
    ) );

});

/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'blog'; //任意のスラッグ名
    }
    return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


