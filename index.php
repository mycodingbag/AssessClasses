<?php include "header.php" ?>
<?php
  $myFile = "admin/js/log.json";
  $arr_data = array();


  $jsondata = file_get_contents($myFile);
  $arr_data = json_decode($jsondata, true);
  array_push($arr_data,date('Y-m-d H:i:s'));

  $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
  file_put_contents($myFile, $jsondata);


?>


<!-- hero slider -->
<section class="hero-section anime-section overlay">

        <div class="obj-anime">&nbsp;</div>
        <div class="obj-anime">&nbsp;</div>
        <div class="obj-anime">&nbsp;</div>
        <div class="obj-anime">&nbsp;</div>
        <div class="obj-anime">&nbsp;</div>
        <div class="obj-anime">&nbsp;</div>

  <div class="container">

    
    <div class="hero-slider">
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-7 pt-md-5">
            <h1 class="text-primary m-0" data-animation-out="fadeOutLeft" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Welcome to </h1>
            <h1 class="display-2 text-white p-0" data-animation-out="fadeOutLeft" data-delay-out="5" data-duration-in=".7" data-animation-in="fadeInLeft" data-delay-in=".8">Assess Classes</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutLeft" data-delay-out="5" data-duration-in=".9" data-animation-in="fadeInLeft" data-delay-in=".4">   
            </p>
            <a href="about.php" class="btn btn-primary" data-animation-out="fadeOutLeft" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">About Us</a>
          </div>
          <div class="col-lg-5 d-none d-md-block">
            <img src="images/Group 1.png" alt="" width="100%" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInRight" data-delay-in=".1">
          </div>
        </div>
      </div>
      
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-6 pt-md-5">
            <h1 class="text-white display-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Assess Computer Education</h1>
            <p class="text-primary mb-4 b" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">
                We provide all job orinted computer courses at one place, like MS-CIT, Tally, Graphic Designing, Programming or etc.
            </p>
            <a href="courses.php" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Courses Detail</a>
          </div>
          <div class="col-lg-6 pt-5 d-none d-md-block">
            <img src="images/Group 2.png" alt="" width="100%">
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-7 pt-md-5">
            <h1 class="text-white display-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Assess Coaching Classes</h1>
            <p class="text-primary mb-4 b" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">
              one off the best coaching classes for students 5<sup>th</sup> to 10<sup>th</sup> English, Hindi & Marathi Meadium with 11<sup>th</sup> or 12<sup>th</sup> Commerce also.
            </p>

            <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Apply now</a>
          </div>
          <div class="col-lg-5 d-none d-md-block">
            <img src="images/Group 3.png" alt="" width="100%">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /hero slider -->


<div class="jumbotron row m-5 p-4">
  <div class="col-md-2 p-4 text-center">
    <i class="fa fa-graduation-cap fa-5x align-self-center text-dark" aria-hidden="true"></i>
  </div>
  <div class="col">
    <h1 class="display-4 i">Come with us grow with us</h1>
    <p class="">We provide best education service to improve your skill for make your career in this real world.</p>
</div>
</div>



<!-- banner-feature -->
<section class="">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-xl-4 col-lg-5 align-self-end">
        <img class="img-fluid w-100" src="images/Group 4.png" alt="banner-feature">
      </div>
      <div class="col-xl-8 col-lg-7">

          <div class="row feature-blocks ">
            <div class="col">
                <h1 class="mb-5  text-center text-xs-left">Our Service</h1>

                <div class="row justify-content-between">
                    <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-xs-left">
                      <i class="fa fa-laptop fa-5x m-3 text-dark"></i>
                      <h3 class="mb-xl-4 mb-lg-3 mb-4">Computer Classes</h3>
                      <p>There are more than <b>+50 Computer courses</b> available in Assess Classes.</p>
                      <a href="courses.php" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Course Detail</a>
                    </div>
                    <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-xs-left">
                      <i class="fa fa-book fa-5x m-3 text-dark"></i>
                      <h3 class="mb-xl-4 mb-lg-3 mb-4">Coaching Classes</h3>
                      <p>We also teaching <b>school & college students 5th to 10th & 11th to 12th section</b> in Assess classes.</p>
                      <a href="coaching.php" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Coaching Detail</a>
                    </div>
                  </div>

                  <h3 class="text-center">"Assess Classes provide all course at one place."</h3>
            </div>
          </div>
        
      </div>
    </div>
  </div>
</section>
<!-- /banner-feature -->

<!-- about us -->
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title">About Educenter</h2>
        <p>Assess classes it's a place where we make student's future secure and bright. We provid computer center as will as coaching classes.  </p>
        <p>cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
        <a href="about.php" class="btn btn-primary-outline">About Us</a>
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
        <img class="img-fluid w-100" src="images/about/about-us.png" alt="about image">
      </div>
    </div>
  </div>
</section>


<!-- funfacts -->
<section class="section-sm bg-footer ">
    <div class="container">
      <div class="row">
        <!-- funfacts item -->
        <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
          <div class="text-center">
            <h2 class="count text-white" style="font-family:arial" >100%</h2>
            <h5 class="text-white" style="font-family:arial" >Expert Faculty</h5>
          </div>
        </div>
        <!-- funfacts item -->
        <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
          <div class="text-center">
            <h2 class="count text-white" style="font-family:arial">+50,000</h2>
            <h5 class="text-white" style="font-family:arial">Students Trained</h5>
          </div>
        </div>
        <!-- funfacts item -->
        <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
          <div class="text-center">
            <h2 class="count text-white" style="font-family:arial" >12 Years</h2>
            <h5 class="text-white" style="font-family:arial">Experience</h5>
          </div>
        </div>
        <!-- funfacts item -->
        <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
          <div class="text-center">
            <h2 class="count text-white" style="font-family:arial">+50</h2>
            <h5 class="text-white" style="font-family:arial">Job Oriented Courses</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /funfacts -->


<!-- events -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">Events</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <a href="gallery.php" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see all</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
  

  <div class="container">
      <div class="row justify-content-left">

          <?php 

              $i_count = 1;
              
             
              foreach(scandir("images/gallery/") as $filename){
                if(!($filename == '.' || $filename == ".." || $i_count > 3))
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




    </div>
</div>




    <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="gallery.php" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
      </div>
    </div>
  </div>
</section>
<!-- /events -->


<!-- cta -->
<section class="section bg-footer">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h4  class="text-white font-secondary mb-3" style="font-family:arial">Click to Join in Assess classes</h4>
        <h2 class="section-title text-white" style="font-family:arial">We will train you for a better future.</h2>
        
        <a class="btn btn-success" href="#" data-toggle="modal" data-target="#signupModal" data-animation-out="fadeOutRight" >Join Now</a>
      </div>
    </div>
  </div>
</section>
<!-- /cta -->


<!-- related course -->
<section class="section pt-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex m-5 align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">Computer Courses</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <a href="courses.php" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see all</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <!-- course item -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/courses/mscit.png" alt="course thumb">
          <div class="card-body">
            <a href="course-single.html">
              <h4 class="card-title">MS-CIT</h4>
            </a>
            <p class="card-text mb-4"> It is the most popular IT Literacy course in Maharashtra.</p>
            <a href="coursedetail.php?course=mscit.php" class="btn btn-primary btn-sm">Detail</a>
          </div>
        </div>
      </div>
      <!-- course item -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/courses/tally-erp-9.png" alt="course thumb">
          <div class="card-body">
           
            <a href="course-single.html">
              <h4 class="card-title">Tally ERP 9</h4>
            </a>
            <p class="card-text mb-4"> Tally.ERP 9 is one of the most popular accounting software used in India.</p>
            <a href="coursedetail.php?course=tallychamp.php" class="btn btn-primary btn-sm">Detail</a>
          </div>
        </div>
      </div>
      <!-- course item -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/courses/c-plus-plus.png" alt="course thumb">
          <div class="card-body">
            <a href="course-single.html">
              <h4 class="card-title">C & C++ </h4>
            </a>
            <p class="card-text mb-4"> C++ is a general-purpose programming language. C++ is very similar to C.</p>
            <a href="coursedetail.php?course=candcpp.php" class="btn btn-primary btn-sm">Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /related course -->

<?php include "footer.php" ?>



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



<script>
  $(document).ready(function(){

    $("#enquiry_form").on("submit",function(e){
      e.preventDefault();

        $.ajax({
            url: "codeengine.php",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){
                    
                    data = jQuery.parseJSON(data);

                    
                    $('#messagedisplay').append(''+
                      '<div class="alert alert-success alert-dismissible fade show" role="alert"  >'+
                          data.msg+
                          '<button type="button" class="close " data-dismiss="alert" aria-label="Close">'+
                          '<span aria-hidden="true">&times;</span>'+
                        '</button>'+
                      '</div>');
                    
                    

                   $('#messagedisplay .alert').delay(5000).slideUp(200, function() {
                        $(this).alert('close');
                    });

                    $("#enquiry_form")[0].reset();
                    $('#signupModal').modal('hide');
                    
            },
            error: function(){
              console.log('not OK BROW');
            } 	        
        });

    });






    setTimeout(function() {
        $(".alert").alert('close');
    }, 2000);

  });
 
</script>




</body>
</html>