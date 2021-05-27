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

<?
  get_footer();
?>