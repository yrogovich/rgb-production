<? 
  // Template name: Услуги
  
  get_header();
?>

<header class="header header-common">
  <?get_template_part('components/navbar')?>
</header>

<div class="section">
  <div class="container">
    <div class="section-title">
      <div class="h2">Услуги</div>
      <div class="back-text">Services</div>
    </div>

    <?get_template_part('components/services')?>
  </div>
</div>

<?
  get_footer();
?>