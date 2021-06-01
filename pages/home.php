<? 
  // Template name: Главная

  get_header();
?>

<header class="header header-home white-cursor-area">
  <?get_template_part('components/navbar')?>

  <div class="container-wide">
    <h1><?=esc_html__('Агентство маркетинговых коммуникаций RGB', 'rgb')?></h1>
    <p><?=esc_html__('Стратегия, креатив, брендинг, видео, реклама, интернет', 'rgb')?></p>

    <div class="scroll-down">
      <svg width="38" height="56" viewBox="0 0 38 56" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect class="mouse" x="0.5" y="0.5" width="37" height="55" rx="18.5" stroke="white"/>
        <rect class="mouse-wheel" x="18" y="14" width="2" height="9" rx="1" fill="white"/>
      </svg>
      <div class="line"></div>
    </div>
   
  </div>
</header>

<div class="section" id="about">
  <div class="container">
    <div class="h2"><?=esc_html__('О компании', 'rgb')?></div>

    <div class="row-6">
      <div class="column-about">
        <div class="digits">
          <div class="digits-block">
            <span class="digits-block__digit">10</span> <?=esc_html__('лет опыта', 'rgb')?>
          </div>
          <div class="digits-block">
            <span class="digits-block__digit">9</span> <?=esc_html__('ключевых направлений', 'rgb')?>
          </div>
          <div class="digits-block">
            <span class="digits-block__digit">300+</span> <?=esc_html__('проектов', 'rgb')?>
          </div>
        </div>

        <p><?=esc_html__('RGB — это агентство маркетинговых коммуникаций полного цикла. Мы создаем и развиваем бренды, разрабатываем стратегии позиционирования, креативные рекламные кампании, видео-материалы и интернет-решения.', 'rgb')?></p>

        <div class="quotes"><?=esc_html__('Мы создаем уникальный опыт коммуникации рынка с брендом', 'rgb')?></div>

        <div class="btn btn-gigant"><?=esc_html__('Давайте сделаем что-нибудь классное вместе!', 'rgb')?></div>
      </div>
      <div class="column-services">
          <div class="h4"><?=esc_html__('Услуги', 'rgb')?></div>

          <?get_template_part('components/services')?>
      </div>
    </div>
  </div>
</div>
<!-- /#about.section -->

<?get_template_part('components/portfolio')?>

<div class="section" id="trust">
  <div class="container">
    <div class="row">
      <div class="content">
        <div class="h2"><?=__('Нам доверяют', 'rgb')?></div>

        <div class="h6"><?=__('Мы — <br> продолжение Вашей команды', 'rgb')?></div>

        <a href="#" class="link">
          <i class="icon-plus-rounded"></i><?=__('Стать клиентом', 'rgb')?>
        </a>
      </div>

      <div class="brands">
        <div class="brand">
          <img data-src="<?bloginfo('template_url')?>/img/brands/cocacola.svg" alt="coca-cola" class="lazy">
        </div>
        <div class="brand">
          <img data-src="<?bloginfo('template_url')?>/img/brands/sber.svg" alt="sber" class="lazy">
        </div>
        <div class="brand">
          <img data-src="<?bloginfo('template_url')?>/img/brands/nestle.svg" alt="nestle" class="lazy">
        </div>
        <div class="brand">
          <img data-src="<?bloginfo('template_url')?>/img/brands/cocacola.svg" alt="coca-cola" class="lazy">
        </div>
        <div class="brand">
          <img data-src="<?bloginfo('template_url')?>/img/brands/sber.svg" alt="sber" class="lazy">
        </div>
        <div class="brand">
          <img data-src="<?bloginfo('template_url')?>/img/brands/nestle.svg" alt="nestle" class="lazy">
        </div>
        <div class="brand">
          <img data-src="<?bloginfo('template_url')?>/img/brands/cocacola.svg" alt="coca-cola" class="lazy">
        </div>
        <div class="brand">
          <img data-src="<?bloginfo('template_url')?>/img/brands/sber.svg" alt="sber" class="lazy">
        </div>
        <div class="brand">
          <img data-src="<?bloginfo('template_url')?>/img/brands/nestle.svg" alt="nestle" class="lazy">
        </div>
        <div class="brand">
          <img data-src="<?bloginfo('template_url')?>/img/brands/cocacola.svg" alt="coca-cola" class="lazy">
        </div>
        <div class="brand">
          <img data-src="<?bloginfo('template_url')?>/img/brands/sber.svg" alt="sber" class="lazy">
        </div>
        <div class="brand">
          <img data-src="<?bloginfo('template_url')?>/img/brands/nestle.svg" alt="nestle" class="lazy">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /#trust.section -->

<?
  get_footer();
?>