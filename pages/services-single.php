<? 
  // Template name: Услуга
  
  get_header();
?>

<header class="header header-single">
  <?get_template_part('components/navbar')?>

  <div class="container-wide row">
    <div class="column-text">
      <h1 class="h2">Креативные решения</h1>
      <div class="subtitle">Генерируем идеи, создаем оригинальные решения для удовлетворения ваших клиентов и более доверительной коммуникации с рынком:</div>

      <ul class="primary-list">
        <li>Нейминг (разработка названий)</li>
        <li>Слоган (рекламный или корпоративный девиз)</li>
        <li>Креативные концепции</li>
        <li>Сценарии видео и аудио-продукции</li>
        <li>Игровые механики активностей</li>
        <li>Партизанский маркетинг (нестандартные решения)</li>
        <li>Копирайтинг (рекламные и информационные тексты)</li>
        <li>Авторский надзор и сопровождение</li>
      </ul>

      <div class="btns">
        <a href="<?=get_home_url(null, 'services')?>" class="btn btn-link-prev">Все услуги</a>
        <a href="#" class="btn btn-primary">Получить консультацию</a>
      </div>
    </div>
    <div class="column-image">
      <img data-src="<?bloginfo('template_url')?>/img/rocket.jpg" class="lazy" alt="rocket">
    </div>
  </div>
</header>

<?get_template_part('components/portfolio')?>

<?
  get_footer();
?>