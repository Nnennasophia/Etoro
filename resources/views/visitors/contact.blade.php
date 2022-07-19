@extends("layouts.spacedcustomlayout")

@section("body")

<div class="main-container">
  <!-- Page Banner -->
        <div class="page-banner">
                <!-- Container -->
                <div class="container">
                    <h3>About</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div><!-- Container /- -->
            </div><!-- Page Banner /- -->
<main class="site-main">	
   
            <div class="feature-section">
    <!-- Container -->
            <div class="container">
            <div class="section-header">
                        <h3 class="text-main">Contact Us</h3>
                    </div><!-- Section Header /- -->
                   
      <div class="row">
          <div class="col-md-6 col-md-6">
          <div style="background-color: #0A1C4D;padding: 25px 50px; height: 100%; border-radius:25px" class="contact_box animation" data-animation="fadeInLeft" data-animation-delay="0.1s">
              <div class="title_default_light title_border">
                  <h2 class="section__title section__title--white animation text-white text-center" data-animation="fadeInUp" data-animation-delay="0.2s">Send Us a Message</h2>

                  
                  
                  
              </div>
              <form name="frmContact" id="" frmContact"" method="post"
          action="https://krisptrade.com/en/contact-form-handler.php" enctype="multipart/form-data"
          onsubmit="return validateContactForm()">
          <div class="row">
                            <div class="col-md-12">
                  <div class="form-group">
                  <input
                  type="text" name="userName"
                  id="userName"  class="form-control input-lg" placeholder="Name*" />
                  </div>
                  <div class="form-group">
                  <input type="text"
                  name="userEmail" id="userEmail"  class="form-control input-lg" placeholder="Email*" />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea cols="6" rows="7" name="content" id="content" class="form-control input-lg" placeholder="Message"></textarea>
                  </div>
                </div>
                                  <input type="hidden" name="subject" value="Contact form submission:">

                <div class="col-md-12">
                <button type="submit" title="Send" id="submit" style="border-radius: 20px; background-color: #03122e; padding:10px 25px" class="btn-info" name="send" value="Submit"> Send <i class="fa fa-paper-plane"></i></button>

                </div>
                </div>
              </form>
              <div class="clearfix"></div>
              <div id="statusMessage"> 
                                            </div>
                  <script src="../../code.jquery.com/jquery-2.1.1.min.js"
      type="text/javascript"></script>
  <script type="text/javascript">
      function validateContactForm() {
          var valid = true;

          $(".info").html("");
          $(".input-field").css('border', '#e0dfdf 1px solid');
          var userName = $("#userName").val();
          var userEmail = $("#userEmail").val();
          var subject = $("#subject").val();

          if (userName == "") {
              $("#userName-info").html("Required.");
              $("#userName").css('border', '#e66262 1px solid');
              valid = false;
          }
          if (userEmail == "") {
              $("#userEmail-info").html("Required.");
              $("#userEmail").css('border', '#e66262 1px solid');
              valid = false;
          }
          if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
          {
              $("#userEmail-info").html("Invalid Email Address.");
              $("#userEmail").css('border', '#e66262 1px solid');
              valid = false;
          }

          if (subject == "") {
              $("#subject-info").html("Required.");
              $("#subject").css('border', '#e66262 1px solid');
              valid = false;
          }
        
          return valid;
      }
</script>                                

          </div>
      </div>
      <div class="col-md-6 col-md-6">
      <div style="background-color: #0A1C4D;padding: 25px 50px; height: 100%; border-radius:25px" class="contact_box animation" data-animation="fadeInLeft" data-animation-delay="0.1s">
              <div class="title_default_light title_border">
                  <h2 class="section__title section__title--white text-white text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">Contact Us</h2>
                  <p class="text-white">Washington DC <br> United States Of America </p>
               
                  <p>  </p>
                  
                  
                  
              </div>
              <div class="column">
                <img src="{{asset("en/assets/images/map.jpg")}}" style="width:100%">
              </div>
               </div>
          </div>

      </div>


    </div>
  </div>
  <!-- Feature Section 1 /- -->
</main>

</div>



@endsection()
