<section class="section our_production-section <?=$our_production_section_var2;?>">  
  <div class="container">
    <div class="our_production-content-wrapper <?=$grid_img_position;?> <?=$adp_elem_order; ?> ">
      <div class="our_production-title <?=$our_production_title_var2;?>">
        <div class="separator"></div>
        <h2 class="section-title section-title-our_production">
        <?=$our_production_title; ?>   
        </h2>
      </div>
      <!-- /.our-production-title -->
        <?php 
         if (!empty($our_production_text))  {
          echo '<div class="our_production-content '.$production_content_var2 .'">';
          echo '<p class="our_production-text">'.$our_production_text .'</p>';  
        }        
          if (!empty($our_production_text2))  {
            echo '<p class="our_production-text our_production-text2">'.$our_production_text2 .'</p>';  
          }
          if (!empty($our_list_params)) {              
          echo '<ul class="our_production-list">';
          foreach ($our_list_params as $svg_id => $listitem_name) {
            echo '<li class="clients-list-item">';
            echo '<svg width="30" height="30" class="client-list-icon">';
            echo '<use href="img/sprite.svg#'. $svg_id.'"></use>;';
            echo '</svg>'.$listitem_name.'</li> ';
            };
            echo '</ul>'; 
          } 
          if (!empty($our_production_text))  {
            echo '</div>'; 
          }
        ?>         
        
      
      <!-- /.our_production -->
      <div class="our_production-img">
        <img src="img/<?=$our_ph_name;?>" alt="" class="our_production-photo" />
    </div>
      <!-- /.img-container -->
      
    </div>

    <!-- /.ounder-content-wrapper -->
  
  </div>
</section>
