<section class="section founder <?=$premium_autohim;?> <?=$adp_elem_order;?>">
  <img src="img/<?=$fou_ph_name;?>" alt="" class="founder-photo <?=$fou_ph_position;?>" />
  <div class="container">
    <div class="founder-content-wrapper <?=$fcw_position;?>">
      <div class="founder-content">
        <div class="separator"></div>
        <h2 class="section-title section-title-founder">          
          <?=$founder_production_title; ?> 
        </h2>
        <?php
          if (!empty($founder_text))  {
            echo '<p class="founder-text">'.$founder_text .'</p>';  
          }        
          if (!empty($founder_text2))  {
            echo '<p class="founder-text founder-text2">'.$founder_text2 .'</p>';  
          }             
        if ($link_type == 'link') {
          echo '<a href="#" class="button-link">';
          echo '<p class="founder-link-1920">Подробнее о компании</p>';
          echo '<p class="founder-link-375">О нашей миссии</p></a>';
        }
        if (!empty($founder_icons_list)) {              
          echo '<ul class="our_production-list">';                   
            for ($n = 1; $n <= count($founder_icons_list); $n++) {
              echo '<li class="clients-list-item">';
              echo '<svg width="30" height="30" class="client-list-icon">';
              echo '<use href="img/sprite.svg#'. $founder_icons_list[$n].'"></use>;';
              echo '</svg>'.$founder_names_list[$n].'</li> ';
            }
            echo '</ul>'; 
          } 
          if ($link_type == 'button') {
            echo'<button type="" class="button download-katalog-button" >'; 
            echo '<svg width="24" height="24" class="client-list-icon">';
            echo '<use href="img/sprite.svg#download"></use>;';
            echo '</svg>';
            echo '<p>Скачать каталог</p>';
            echo '</button>';
          }          
        ?>
      </div>
      <!-- /.founder-content -->
    </div>
    <!-- /.founder-content-wrapper -->
  </div>
</section>