    <footer class="footer">
        <div class="container">
            <div class="footer__wrapper">
                <a href="#header" class="footer__link"><img src="<?php the_field('footer-logo'); ?>" alt="footer-logo"
                        class="footer__logo"></a>
                <nav class="footer__nav">
                    <ul class="footer__menu-list">
                        <li class="footer__menu-item"><a href="#about" class="footer__menu-link scroll-to">О нас</a>
                        </li>
                        <li class="footer__menu-item"><a href="#galery" class="footer__menu-link scroll-to">Галерея</a>
                        </li>
                        <li class="footer__menu-item"><a href="#contact"
                                class="footer__menu-link scroll-to">Контакты</a></li>
                    </ul>
                </nav>
                <div class="footer__pay">
                    <div class="footer__pay-title">Мы принимаем</div>
                    <img src="<?php the_field('footer__pay-icon'); ?>" alt="" class="footer__pay-icon">
                </div>
            </div>
            <div class="footer__copy"><?php the_field('footer__copy'); ?></div>
        </div>
    </footer>
    <!-- //footer -->

	<?php wp_footer(); ?>

    <!-- script animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- script animation -->

    <script src="<?php echo get_template_directory_uri (); ?>/js/main.js"></script>
</body>

</html>