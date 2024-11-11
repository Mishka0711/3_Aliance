<?php 
$page_title = 'Блог';
$page_now = '../about.php';
$breadcrumb_style = 'breadcrumb_light';
$autohim_title_image_hidden = 'autohim-title-image-hidden';
$separator_w135 = 'separator_w135';
include_once('header-page.php')?>



<section class="section section-all-blog">
      <div class="container all-blog-container">
        <!-- Slider main container -->
        <div class="blog-cards-wrapper">
            <?php              
            for ($n = 1; $n <= 12; $n++) {
              ?>
              <a href="./blog_more.php" class="blog-card all-blog-card"
              ><img src="/img/blog-photo1.jpg" alt="" class="blog-card-image" />
              <h3 class="blog-card-title">
              Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
            <a href="./blog_more.php" class="all-blog-card blog-card"
              ><img src="/img/blog-photo2.jpg" alt="" class="blog-card-image <?php echo $blog_img_ontop; ?>" />
              <h3 class="blog-card-title">
                Сложно сказать, почему жизнь прекрасна
              </h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса
                функционально разнесены на независимые элементы. Безусловно,
                высокотехнологичная...
              </p>
            </a>
            <a href="./blog_more.php" class="all-blog-card blog-card"
              ><img src="/img/blog-photo2.jpg" alt="" class="blog-card-image <?php echo $blog_img_ontop; ?>" />
              <h3 class="blog-card-title">
                Сложно сказать, почему жизнь прекрасна
              </h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса
                функционально разнесены на независимые элементы. Безусловно,
                высокотехнологичная...
              </p>
            </a>                        
            <a href="./blog_more.php" class="all-blog-card blog-card"
              ><img src="/img/blog-photo1.jpg" alt="" class="blog-card-image" />
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text ">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
              <?php   
            }
            ?>                                          
        </div>
        <!-- /.pagination-block -->  
        <!-- /.blog-cards-wrapper -->

      </div>
      <!-- /.container -->
    </section>








<?php include_once('footer.php');?>