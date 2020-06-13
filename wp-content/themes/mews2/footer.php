<footer class="footer regular-text">
  <div class="footer__wrapper wrapper">
    <div class="footer__block footer__logo-block">
      <div class="footer__logo">
        <img src="<?php echo get_template_directory_uri()?>/img/logo.svg" alt="">
      </div>
    </div>
    <div class="footer__block">
      <div class="footer__menu">
        <nav>
        <?php
          wp_nav_menu(array(
            'theme_location' => 'footer',
            'container' => 'ul',
            'menu_class' => 'footer__menu-mobile-cont'
          ));
        ?>
      </div>
    </div>
    <div class="footer__block">
      <div class="footer__contacts">
        <div class="footer__contacts-adress">
          <a target="_blank" href="https://yandex.ru/maps/214/dolgoprudniy/house/ulitsa_komarova_28/Z04Ycg9jTkEGQFtvfXV4cHpqYw==/?ll=37.483741%2C55.991697&sll=37.622504%2C55.753215&sspn=1.532593%2C0.523551&z=16.82">г. Долгопрудный,<br>ул. Комарова, 28</a>
        </div>
        <div class="footer__contacts-phone">
          <div class="footer__contacts-phone">
            <a href="tel:+7985554433">+7 (985) 776 76 19</a>
          </div>
          <div class="footer__contacts-phone">
            <a href="tel:+7985554433">+7 (985) 776 76 19</a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__block">
      <div class="footer__social">
        <div class="footer__social-text">Подписывайтесь<br>на наши соц.сети</div>
        <div class="footer_social-logoes">
          <a href="https://vk.com/club61734333"><img src="<?php echo get_template_directory_uri()?>/img/vk-logo.svg" alt="vk.com"></a>
          <a href="https://vk.com/club61734333"><img src="<?php echo get_template_directory_uri()?>/img/insta-logo.svg" alt="instagram"></a>
          <a href="https://vk.com/club61734333"><img src="<?php echo get_template_directory_uri()?>/img/fb-logo.svg" alt="facebook"></a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__developers">Designed & developed by © Para-Z</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
