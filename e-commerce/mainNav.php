  <?php
    include_once("./classes/navbar.php");
    use mainNav\nav;
  ?>
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
                <?php 
                  $query = "SELECT * FROM `product_category`";
                  $selet_menu = nav::query($query);
                  if ($selet_menu->num_rows > 0) { 
                ?>
              <ul class="nav navbar-nav">
                <li class="active dropdown yamm-fw"> <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a> </li>
                <!-- catloop -->
                <?php 
                while ($menu = $selet_menu->fetch_object()) {
                ?>
                <li class="dropdown yamm mega-menu"> <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown"><?= $menu->name; ?></a>
                <?php 
                  $query = "SELECT * FROM `sub_category` WHERE `category_id` = $menu->id";
                  $subCats = nav::query($query);
                  if ($subCats->num_rows > 0) { 
                ?>
                  <ul class="dropdown-menu container">
                    <li>
                      <div class="yamm-content ">
                        <div class="row">
                            <?php  
                                while ($subCat = $subCats->fetch_object()) {
                            ?>
                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                            <h2 class="title"><?= $subCat->name; ?></h2>
                            <?php 
                              $query = "SELECT * FROM `sub_sub_category` WHERE `sub_cat_id` = $subCat->id";
                              $subSubCats = nav::query($query);
                              if ($subSubCats->num_rows > 0) { 
                            ?>
                            <ul class="links">
                                <?php  
                                  while($subSubCat = $subSubCats->fetch_object()){
                                ?>
                              <li><a href="#"><?= $subSubCat->name; ?></a></li>
                              <?php } ?>
                            </ul>
                            <?php } ?>
                          </div>
                          <?php } ?>  
                          <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> <img class="img-responsive" src="assets/images/banners/top-menu-banner.jpg" alt=""> </div>
                          <!-- /.yamm-content --> 
                        </div>
                      </div>
                    </li>
                  </ul>
                  <?php } ?>
                </li>
                <?php }   ?>
                <!-- catloop -->
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Pages</a>
                  <ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
                              <li><a href="home.html">Home</a></li>
                              <li><a href="category.html">Category</a></li>
                              <li><a href="contact.html">Contact</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="dropdown  navbar-right special-menu"> <a href="#">Todays offer</a> </li>
              </ul>
              <?php } ?>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
    </div>
    <!-- /.container-class --> 
    
  </div>
  <!-- /.header-nav --> 