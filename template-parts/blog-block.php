<section class="section section-blog">
      <div class="container">
        <div class="separator"></div>
        <h2 class="section-title section-title-blog <?php echo $section_title_blog_main; ?>">
        <?php echo $blog_title; ?> 
        </h2>
        <?php 
          echo '<div class="blog-text-content">';         
          if (!empty($blog_p_text)) {            
          echo '<p class="founder-text blog-text">' . $blog_p_text . '</p>'; 
          }   
          if (!empty($blog_p_text2)) {
            echo '<p class="founder-text blog-text blog-text2">' . $blog_p_text2 . '</p>'; 
            }   
            echo '</div>';                       
        ?>
        <!-- Slider main container -->
        <div class="blog-slider <?php echo $blog_overflow_visible; ?>">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <a href="./blog_more.php" class="swiper-slide blog-card"
              ><img src="./img/blog-photo1.jpg" alt="" class="blog-card-image <?php echo $blog_img_ontop; ?>" />
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
            <a href="./blog_more.php" class="swiper-slide blog-card"
              ><img src="./img/blog-photo2.jpg" alt="" class="blog-card-image <?php echo $blog_img_ontop; ?>" />
              <h3 class="blog-card-title">
                Сложно сказать, почему жизнь прекрасна
              </h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса
                функционально разнесены на независимые элементы. Безусловно,
                высокотехнологичная...
              </p>
            </a>
            <a href="./blog_more.php" class="swiper-slide blog-card"
              ><img src="./img/blog-photo2.jpg" alt="" class="blog-card-image <?php echo $blog_img_ontop; ?>" />
              <h3 class="blog-card-title">
                Сложно сказать, почему жизнь прекрасна
              </h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса
                функционально разнесены на независимые элементы. Безусловно,
                высокотехнологичная...
              </p>
            </a>
            <a href="./blog_more.php" class="swiper-slide blog-card"
              ><img src="./img/blog-photo1.jpg" alt="" class="blog-card-image <?php echo $blog_img_ontop; ?>" />
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>            
          </div>
          
 
          <div class="blog-slider-footer">



          <?php 
          if ($link_all_blog == 'link') {         
            echo '<a href="./all-blog.php" class="button-link">Весь блог</a>';
            }
          ?> 

            <!-- кнопки вперед назад -->
            <div class="blog-buttons primary-buttons-wrapper">
              <div class="blog-button-prev primary-button-prev">
                <svg class="button-arrow-wh" width="36" height="24">
                  <use href="img/sprite.svg#arrow-prev"></use>
                </svg>
              </div>
              <div class="blog-button-next primary-button-prev">
                <svg class="button-arrow-wh" width="36" height="24">
                  <use href="img/sprite.svg#arrow-next"></use>
                </svg>
              </div>
            </div>
            <!-- blog-buttons -->
          </div>
          <!-- /.blog-slider-footer -->
       
        </div>
      </div>
      <!-- /.container -->
    </section>