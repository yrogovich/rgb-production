  <footer class="section footer white-cursor-area">
    <div class="container-wide">
      <div class="row">
        <ul class="menu">
          <li>
            <a href="#"><?=esc_html__('О компании', 'rgb')?></a>
          </li>
          <li>
            <a href="#"><?=esc_html__('Услуги', 'rgb')?></a>
          </li>
          <li>
            <a href="#"><?=esc_html__('Проекты', 'rgb')?></a>
          </li>
          <li>
            <a href="#">
              <i class="icon-plus-rounded"></i>
              <?=esc_html__('Стать клиентом', 'rgb')?>
            </a>
          </li>
        </ul>

        <ul class="list">
          <li>
            <a href="tel:<?=PHONE?>"> 
              <i class="icon-phone"></i>
              <?=PHONE?>
            </a>
          </li>
          <li>
            <a href="mailto:<?=EMAIL?>"> 
              <i class="icon-mail"></i>
              <?=EMAIL?>
            </a>
          </li>
          <li>
            <a href="<?=FACEBOOK?>" rel="nofollow" target="_blank"> 
              <i class="icon-fb"></i>
              FaceBook
            </a>
          </li>
          <li>
          <a href="<?=YOUTUBE?>" rel="nofollow" target="_blank"> 
            <i class="icon-youtube"></i>
            YouTube
          </a>
          </li>
        </ul>      

        <div class="copyright">© <?=esc_html__(COPYRIGHT, 'rgb')?></div>

        <a href="<?=get_home_url()?>" class="logo footer-logo">
          <img src="<?bloginfo('template_url')?>/img/logo.svg" alt="logo">
        </a>
      </div>
    </div>
  </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>