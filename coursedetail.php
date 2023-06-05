
<!-- *** Head Section *** -->
<?php include('header.php'); ?>



<!-- page title -->
<section class="page-title-section overlay anime-section" >
        
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
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="#">Courses Detail</a></li>
            <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
          </ul>
          <p class="text-lighten">Assess provide you all computer courses at one place.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- /page title -->


<?php 

    $course_name = $_GET['course'];
    

    switch($course_name)
    {
        case "act.php":
        case "advexcel.php":
        case "dtp.php":
        case "mscit.php":
        case "tallychamp.php":
        case "aspnet.php":
        case "candcpp.php":
        case "java.php":
        case "webdesign.php":
        case "mysql.php":
        case "php.php":
        case "python.php":
            include('courses/'.$course_name);
            break;
        default:
            include('courses/error.php');
    }
   

?>




<!-- *** footer Section *** -->
<?php include('footer.php'); ?>

</body>
</html>
