<div class="mobile-menu white-cursor-area">
  <div class="content">
    <div class="body">
      <?
        wp_nav_menu(
            array(
                'container' => false, 
            )
        );
      ?>
    </div>
    <div class="foot">
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
    </div>
  </div>
</div>