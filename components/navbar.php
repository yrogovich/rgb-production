<div class="navbar">
  <div class="container-wide">
    <div class="navbar-row">
      <a href="<?=esc_url( home_url( '/' ) )?>" class="logo navbar-logo">
        <img src="<?bloginfo('template_url')?>/img/logo.svg" alt="logo">
      </a>

      <a href="tel:<?=PHONE?>" class="navbar-phone"><?=PHONE?></a> 

      <ul class="navbar-list">
        <li><a href="#"><i class="icon-plus-rounded"></i><?=esc_html__('Стать клиентом', 'rgb')?></a></li>
        <li><a href="#"><?=esc_html__('Услуги', 'rgb')?></a></li>
        <li><a href="#"><?=esc_html__('Проекты', 'rgb')?></a></li>
      </ul>

      <div class="navbar-burger" data-trigger-menu>
        <div class="text"><?=esc_html__('Меню', 'rgb')?></div>
        <div class="line line-first"></div>
        <div class="line line-second"></div>
      </div>
    </div>
  </div>
</div>