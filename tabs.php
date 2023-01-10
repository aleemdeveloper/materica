
 <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link tbs active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">2012</button>
    <button class="nav-link tbs" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">2008</button>
    <button class="nav-link tbs" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">2006</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  <br> 
    <div class="row gallery">
      
    <?php
      for ($x = 1; $x <= 70; $x+=1) {
        ?>
        
          <div class="col-lg-3 col-md-12 mb-4 mb-lg-0 thumb">
            <a href="images/materica06/img_0<?php echo $x ?>.jpg">
              <figure><img  class="w-100 h-75 shadow-1-strong rounded img-thumbnail" src="images/materica06/img_0<?php echo $x ?>.jpg" ></figure>
            </a>
       
          </div>
        
      <?php }?>
      </div><br>
      </div><br>

  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  <br>
    <div class="row">
      
    <?php
      for ($x = 1; $x <= 26; $x+=1) {
        ?>
        
          <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
            
            <img  class="w-100 h-75 shadow-1-strong rounded mb-4" src="images/materica08/img_0<?php echo $x ?>.jpg" class="img-fluid">
       
          </div>
        
      <?php }?>
      </div><br>
      </div>


  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
  <br>
    <div class="row">
      
    <?php
      for ($x = 1; $x <= 222; $x+=1) {
        ?>
        
          <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
            
          <?php
            if ($x<100) {
          ?>
            <img  class="w-100 h-75 shadow-1-strong rounded mb-4" src="images/materica12/img_0<?php echo $x ?>.jpg" class="img-fluid">
           <?php } ?>
           
           <?php
             if($x>=100) {
         ?> 
         <img  class="w-100 h-75 shadow-1-strong rounded mb-4" src="images/materica12/img_<?php echo $x ?>.jpg" class="img-fluid">
         <?php } ?>
          </div>
        
      <?php }?>
      </div><br>
  </div>

