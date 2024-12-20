<div class="section section-trademark <?=$section_trademark_var2;?>">
  <div class="container">
    
    <?php 
    if (!empty($block_title)) {
      echo '<div class="separator"></div>';
      echo '<h2 class="section-title section-title_full">'
      . $block_title .'
    </h2>';}
    ?>
    <h2 class="section-title section-title_375px">собственные марки</h2>
    <div class="trademark-cards">
      <a href="./AG-Tech.php" class="trademark-card">
        <svg class="trademark-card-logo">
          <use href="img/sprite.svg#AGTECH"></use>
        </svg>
        <h3 class="trademark-card-title">Автохимия AG-Tech</h3>
        <p class="trademark-card-text">
          Для современного мира разбавленное изрядной долей эмпатии,
          рациональное мышление создаёт предпосылки для поставленных
          обществом задач.
        </p>
    </a>
      <a href="#" class="trademark-card">
        <svg class="trademark-card-logo">
          <use href="img/sprite.svg#AP"></use>
        </svg>
        <h3 class="trademark-card-title">Автохимия AP</h3>
        <p class="trademark-card-text">
          Для современного мира разбавленное изрядной долей эмпатии,
          рациональное мышление создаёт предпосылки для поставленных
          обществом задач.
        </p>
      </a>
    </div>
    <!-- /.trademark-cards -->
  </div>
  <!-- /.container -->
</div>
<!-- /.section section trademark -->