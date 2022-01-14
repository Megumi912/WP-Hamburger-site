


(function ($) {

})(jQuery);

    function toggleNav() {
    var body = document.body;
    var hamburger = document.getElementById('js-hamburger');
    var hamburgerBt = document.getElementById('c-hamburger_line_btn');
    var blackbg = document.getElementById('p-sidebar_bg');

    hamburger.addEventListener('click', function() {
      body.classList.toggle('nav_open'); //メニュークリックでnav-openというクラスがbodyに付与
    });
    hamburgerBt.addEventListener('click', function() {
      body.classList.remove('nav_open'); //もう一度クリックで解除
    });
    blackbg.addEventListener('click', function() {
      body.classList.remove('nav_open'); //もう一度クリックで解除
    });
}
toggleNav();














