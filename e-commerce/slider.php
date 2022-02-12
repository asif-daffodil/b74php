<?php  
    include_once("./classes/navbar.php");
    use mainNav\nav;
?>
        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <?php
                $query = "SELECT * FROM `slider`";  
                $sliders = nav::query($query);
                while ($slider = $sliders->fetch_object()) {
            ?>
            <div class="item" style="background-image: linear-gradient(rgba(255,255,255,0.6),rgba(255,255,255,0.6)), url(assets/images/sliders/<?= $slider->img;  ?>);">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1"><?= $slider->heading; ?></div>
                  <div class="big-text fadeInDown-1"> <?= $slider->subheading; ?> </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span><?= $slider->description; ?></span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="<?= $slider->link; ?>" class="btn-lg btn btn-uppercase btn-primary shop-now-button"><?= $slider->btntext; ?></a> </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <?php } ?>
          </div>
        </div>