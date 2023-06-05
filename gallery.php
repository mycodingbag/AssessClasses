

<!-- *** Head Section *** -->
<?php include('header.php'); ?>


        <!-- page title -->
<section class="page-title-section overlay anime-section">
   
  <div class="obj-anime">&nbsp;</div>
  <div class="obj-anime">&nbsp;</div>
  <div class="obj-anime">&nbsp;</div>
  <div class="obj-anime">&nbsp;</div>
  <div class="obj-anime">&nbsp;</div>
  <div class="obj-anime">&nbsp;</div>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" >Gallary</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">See all the events we conducted in assess classes.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->


<section class="section">
  <div class="container">
      <div class="row justify-content-left">

          <?php 

              $i_count = 1;

              foreach(scandir("images/gallery/") as $filename){
                if(!($filename == '.' || $filename == ".."))
                {
                  $r_key =  array_rand(glob('images/gallery/'.$filename.'/*.*'));
                  $files = glob('images/gallery/'.$filename.'/*.*');
                  

                  ?>

                  <!-- event -->
                    <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                      <div class="card border-0 rounded-0 hover-shadow">
                        <div class="card-img position-relative" style="min-hight:500px;overflow:hidden;">
                          <img class="card-img-top rounded-0" src="<?php echo $files[$r_key];?>" alt="event thumb">
                          <!-- <div class="card-date"><span>18</span><br>December</div> -->
                        </div>
                        <div class="card-body">
                          <!-- location -->
                          <p><i class="ti-location-pin text-primary mr-2"></i>Antop hill, Mumbai</p>
                          <a href="<?php echo $files[$r_key];?>" class="group<?php echo $i_count; ?>"><h4 class="card-title"><?php echo $filename; ?></h4></a>
                        </div>
                      </div>
                    </div>



                  <?php
                   $i_count++;
                }
              }

          ?>



      <div>
  </div>
</section>







<!-- *** Head Section *** -->
<?php include('footer.php'); ?>



<script src="js/magnigic-popup.js"></script>
<script>

$(document).ready(function(){

  <?php 

    $i_count = 1;

    foreach(scandir("images/gallery/") as $filename){
      

      if(!($filename == '.' || $filename == ".."))
      {
        ?>
        $(".group<?php echo $i_count; ?>").magnificPopup({
          items:[
        <?php
        foreach(glob('images/gallery/'.$filename.'/*.*') as $imgfile){
          ?>
            {
              src:'<?php echo $imgfile; ?>'
            },
          <?php
          
        }
        ?>
            ],
            gallery: {
              enabled: true
            },
            type: 'image'
          });
        <?php
        $i_count++;
      }
    }
  
  ?>

});

    

</script>

</body>
</html>