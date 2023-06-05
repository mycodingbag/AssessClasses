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
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Contact Us</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Do you have other questions? Don't worry, there aren't any dumb questions. Just fill out the form below and we'll get back to you as soon as possible.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!--- Section Get in touch -->
<section class="section">
    <div class="container">
        <h1 class="text-uppercase text-center m-5">Get in Touch</h1>
        <div class="row">
            <div class="col-md-4 pb-5 text-center">
                <i class="fa fa fa-phone fa-5x p-4 pl-5 pr-5 m-5 text-white bg-dark" aria-hidden="true" style="border-radius:50%"></i>
                <h4>CONTACT US</h4>
                <p class="pl-5 pr-5">
                    <b>Head office:</b><br>
                    <i class="icon-phone"></i> +91 9930569824<br>
                    <b>Mankhurd :</b><br>
                    <i class="icon-phone"></i> +91 9594028581<br>
                    <b>Email Address</b><br>
                    <i class="icon-phone"></i> assessant@gmail.com<br>
                    
                </p>
            </div>
            <div class="col-md-4 pb-5 text-center">
                <i class="fa fa-map-marker fa-5x p-4 pl-5 pr-5 m-5 text-white bg-dark" aria-hidden="true" style="border-radius:50%"></i>
                <h4>BRANCH</h4>
                <p class="pl-5 pr-5">
                    <b>( Head Office )</b><br>
                    Shop no. 17, Bldg. No. 45, <br>Kalpak Estate, Near Domino's Pizza, Mumbai - 400037.
                </p>
                <p class="pl-5 pr-5">
                    <b>( Mankhurd Office )</b><br>
                    Near Shivshambho Mitra mandal, Bldg No.21, Shop 619, Mankhurd (W), PMG COLONY, Maharashtra 400043
                </p>
            </div>
            <div class="col-md-4 pb-5 text-center">
                <i class="fa fa-calendar fa-5x p-4 pl-5 pr-5 m-5 text-white bg-dark" aria-hidden="true" style="border-radius:50%"></i>
                <h4>SCHEDULE</h4>
                <p class="pl-5 pr-5">
                    <b>Open & Closing time</b><br>
                    From 7:30AM To 10:00PM,<br>
                    <b>Weekly</b><br>
                    Monday to Starday
                </p>
            </div>
        </div>
    </div>
</section>

<!--- /Section Get in touch -->

<section class="section bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center">
            <a class="d-inline-block p-2 text-color" href="https://www.facebook.com/Assess-Computer-Education-1028050623889516/"><i class="ti-facebook fa-5x"></i></a>
            </div>
            <div class="col-md-3 text-center">
            <a class="d-inline-block p-2 text-color" href="https://wa.me/919930569824"><i class="fa fa-whatsapp fa-5x"></i></a>
            </div>
            <div class="col-md-3 text-center">
            <a class="d-inline-block p-2 text-color" href="https://www.justdial.com/Mumbai/Assess-Computer-Education-Next-To-Dominoz-Antop-Hill/022PXX22-XX22-130806114121-N4S2_BZDET"><spam class="fa-5x">Jd</spam></a>
            </div>
            <div class="col-md-3 text-center">
            <a class="d-inline-block p-2 text-color" href="https://www.instagram.com/assessclasses/"><i class="ti-instagram fa-5x"></i></a>
            </div>
        </div>
    </div>

</section>




<!-- contact form -->
<section class="section">
  <div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Message US</h1>
            <p>Please enter your detail so that we contact you. </p>
        </div>
        <div class="col-md-6">
        
                    <form id="contact_form" action="codeengine.php" method = "POST" class="row">
                          <input type="hidden" name="mode" value="enquiry">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="enquiryName" name="enquiryName" placeholder="Name" required>
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="enquiryEmail" name="enquiryEmail" placeholder="Email" required>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control mb-3" id="enquiryPhone" name="enquiryPhone" placeholder="Phone" required>
                        </div>
                        <div class="col-6">
                            <select style="height:60px;" class="form-control mb-3 " id="enquiryCourse" name="enquiryCourse" placeholder="Courses Name" required>
                                <option>MS-CIT</option>
                                <option>Adv.Tally</option>
                                <option>Adv.Excel</option>
                                <option>D.T.P.</option>
                                <option>Programming</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="col-12">
                        <textarea name="enquiryMessage" id="message" class="form-control mb-3" rows="2" style="height:auto" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
        </div>
        
    </div>
  </div>
</section>
<!-- /contact form -->



<!-- gmap -->
<section class="section pt-0">
  <!-- Google Map -->
        <iframe id="map_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1885.8697450571788!2d72.8665904907634!3d19.031197698522885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf316f7d5b3f%3A0x3dee618d8d8c4eb2!2sAssess%20Computer%20Education!5e0!3m2!1sen!2sin!4v1578385179769!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="yes"></iframe>
</section>
<!-- /gmap -->



<!-- *** footer Section *** -->
<?php include('footer.php'); ?>




<script>
  $(document).ready(function(){

    $("#contact_form").on("submit",function(e){
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

                    $("#contact_form")[0].reset();
                    
                    
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
