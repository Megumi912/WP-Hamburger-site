<section>
    <div class="p-sidebar">
        <nav>
            <ul class="p-sidebar_navlink">
                <li class="p-navlink_menu">
                <?php wp_nav_menu( array(
                    'theme_location'  => 'sidenav',
                )); ?>
                </li>                
            </ul>
        </nav>
    </div>
</section>

<!-- 参考　https://blog.8bit.co.jp/?p=17948 -->

<!-- メニューボタン -->
<button class="c-hamburger js-hamburger" id="js-hamburger">Menu</button>
<p class="pc-hamburger">Menu</p>
<div id="c-hamburger_line_btn">
    <span class="hamburger_line hamburger_line1"></span>
    <span class="hamburger_line hamburger_line2"></span>
</div>
<div class="p-sidebar_bg" id="p-sidebar_bg"></div>


