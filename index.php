<!DOCTYPE html>
<html lang="en">

<!--head-->
<?php
session_start();
include("partials/head.php");
?>

<body>

  <!--header-->
  <?php
  include("partials/header.php");
  ?>

  <!--slider part start-->
  <div id="testimonialss" class="container">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid" style="background-image: url(https://i.postimg.cc/kG5f8vSn/regsnowback.jpg);
          background-size:cover;background-position: center; background-repeat: no-repeat; ">
          <h2 class="testimonialss-text" style="color:black; font-weight: bold;">Get 25% off on all Medicines</h2>
          <img class="testimonialss-image" src="https://i.postimg.cc/J4DQLncd/registerback.jpg" alt="doctor" style="height:45%;width:45%;" />
          <br>
          <button type="button1" class="btn btn-lg btn-danger" name="button1" style="background-color: blue; color: white; border-radius: 50px">
            Register now!
          </button>
        </div>
        <div class="carousel-item container-fluid" style="background-image: url(https://i.postimg.cc/WzJqQDLG/labtestback.jpg);
          background-size:cover; background-repeat: no-repeat;">
          <h2 class="testimonialss-text" style="color:white; font-weight: bold;"> Lab Tests</h2>
          <img class="testimonialss-image" src="https://i.postimg.cc/WprMWK2Q/labtesting.jpg" alt="lady-profile" style="height:45%;width:45%;" />
          <br>
          <button type="button1" class="btn btn-lg btn-danger" name="button1" style="background-color: blue; color: white; border-radius: 50px">
            Book Lab Test
          </button>
        </div>
        <div class="carousel-item container-fluid" style="background-image:url(https://i.postimg.cc/G2fqFsxG/set-appointmentback.jpg);
           background-size:cover; background-position: center; background-repeat: no-repeat;">
          <h2 class="testimonialss-text" style="color:black;font-weight: bold;">Set Appointments</h2>
          <img class="testimonialss-image" src="https://i.postimg.cc/28tLC784/setaptimg.jpg" alt="lady-profile" style="height:35%;width:45%;" />
          <br>
          <a href="filter-booking/index.php">
            <button type="button1" class="btn btn-lg btn-danger" name="button1" style="background-color: blue; color: white; border-radius: 50px">
              Make an appointment
            </button>
          </a>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>
  <!--slider part end-->
  <!--about us start-->
  <div class="about container" id="aboutus">
    <center>
      <h1 class="line" style="padding-top:124px;">About <span class="a">US</span></h1>
    </center>

    <br /><br /><br />
    <center style="margin-top: -10px;">
      <p class="d">
        VISUDH AJIVAM PVT LTD is one of the best digital platform for health
        care services integrated with pharmacies, doctors, labtests, diagnosis
        centres across India to provide world class Healthcare facilities to
        individuals across the country
      </p>
    </center>
    <br />
    <center>
      <span class="b"><i style="color: rgb(17, 17, 160); font-size: 20px; margin-right: 5px" class="fas fa-flask"></i>Doctors Availability</span>
      <span class="b"><i style="color: rgb(17, 17, 160); font-size: 20px; margin-right: 5px" class="fas fa-briefcase-medical"></i>Medicine</span>
      <span class="b"><i style="color: rgb(17, 17, 160); font-size: 20px; margin-right: 5px" class="fas fa-pills"></i>Labtest</span>
    </center>
    <br /><br /><br />

    <div class="select" style="margin-top: 180px;">
      <ul>
        <li class="active" id="box-1" onclick="pehla()">
          <span><i class="fa fa-eye" aria-hidden="true"></i></span> Our
          Mission
        </li>
        <li id="box-2" onclick="dusra()">
          <span><i class="fa fa-handshake" aria-hidden="true"></i></span> Our
          Vision
        </li>
        <li id="box-3" onclick="teesra()">
          <span><i class="fa fa-trophy" aria-hidden="true"></i></span> Our
          Values
        </li>
      </ul>
      <center>
        <img style="width: 100px" src="https://i.postimg.cc/NjkKSS7y/dotcor.png" alt="" class="doctorsab" />
      </center>
    </div>
    <div class="overflow" style="margin-top: 60px;">
      <div class="box mx-3" id="our-1" style="height: 485px;">
        <center>
          <img src="https://i.postimg.cc/g2v53qyq/mission.jpg" alt="" />
        </center>
        <br />
        <center>
          <h2>Our Mission</h2>
        </center>
        <br />
        <center>
          <p>
            Visudh AJIVAM PVT LTD is on a mission to take hand in hand with
            public and help them across their medical needs with making the
            user friendly digital platform without any Hassel at right time.
          </p>
        </center>
      </div>
      <div class="box mx-3" id="our-2" style="height: 485px;">
        <center>
          <img src="https://i.postimg.cc/mZ504r2M/vission.jpg" alt="" />
        </center>
        <br />
        <center>
          <h2>Our Vision</h2>
        </center>
        <br />
        <center>
          <p>
            To revolutionise the Healthcare sector through this healthtech
            platform so that each and every citizen of India can get the best
            medical needs at there allowing budget.
          </p>
        </center>
      </div>
      <div class="box mx-3" id="our-3" style="height: 485px;">
        <center>
          <img src="https://i.postimg.cc/VNmhgrDy/values.jpg" alt="" />
        </center>
        <br />
        <center>
          <h2>Our Values</h2>
        </center>
        <br />
        <center>
          <p>
            VISUDH AJIVAM PVT LTD is one of the best digital platform for
            health care services integrated with pharmacies, doctors,
            labtests, diagnosis centres India world class facilities to
            individuals across the country.
          </p>
        </center>
      </div>
    </div>
  </div>

  <!--about us end-->
  <!-- Start Categories  -->
  <div class="categories-shop container">
    <hr style="margin: 0 20vw" />

    <center>
      <h1 class="line2" style="padding-top:80px;padding-bottom: 30px;">Features</h1>
    </center>

    <div class="container-categories container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="shop-cat-box">
            <img src="https://i.postimg.cc/tJ4yMvkj/featured.jpg" alt="" />
            <a class="btn hvr-hover" href="product.php" style="color: white;">Buy Medicines</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="shop-cat-box">
            <img src="https://i.postimg.cc/ZYwJdZYK/consultation.jpg" alt="" />
            <a class="btn hvr-hover" href="#" style="color: white;">Free Consultation</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="shop-cat-box">
            <img src="https://i.postimg.cc/nzYc5Dtv/appointment.jpg" alt="" />
            <a class="btn hvr-hover" href="#" style="color: white;">Make an appointment</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- End Categories -->
  <!--services start-->

  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7  text-center ftco-animate" style="padding-top: 100px; padding-bottom: 30px">
        <span class="subheading" style="color: rgba(0, 0, 255, 0.712); font-size:larger;">First Class Services</span>
        <h2>Our Benefits</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg row">
        <div class="col-3 mt-5">
          <img src="https://i.postimg.cc/4N64SR5V/standing-human-body-silhouette.png" height="60px" />
        </div>
        <div class="col-9">
          <h5 class="heading">Full Body Checkup</h5>
          <strong>
            <p style="font-size:small">
              Even the all-powerful Pointing has no control about the blind
              texts it is an almost unorthographic.
            </p>
          </strong>
          <p>
            <a href="#" class="btn btn-primary">Make an Appointment</a>
          </p>
        </div>
      </div>
      <div class="col-lg row">
        <div class="col-3 mt-5">
          <img src="https://i.postimg.cc/GpHCrWkM/blood-test.png" height="60px" alt="" />
        </div>
        <div class="col-9">
          <h5 class="heading">Diabetes Checkup</h5>
          <strong>
            <p style="font-size:small">
              Now don't be afraid of waiting in line for a checkup; We are
              there for you at your door.
            </p>
          </strong>
          <p>
            <a href="#" class="btn btn-primary">Make an Appointment</a>
          </p>
        </div>
      </div>
      <div class="col-lg row">
        <div class="col-3 mt-5">
          <img src="https://i.postimg.cc/RFK2Z4qT/mri.png" height="60px" alt="" />
        </div>
        <div class="col-9">
          <h5 class="heading">MRI and CT SCANs</h5>
          <strong>
            <p style="font-size:small">
              MRI and CT SCAN facility is out-sourced and available free of
              cost to the indoor and emergency cases.
            </p>
          </strong>
          <p>
            <a href="#" class="btn btn-primary">Make an Appointment</a>
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg row">
        <div class="col-3 mt-5">
          <img src="https://i.postimg.cc/tRhHXtxH/x-rays.png" height="60px" alt="" />
        </div>
        <div class="col-9">
          <h5 class="heading">X-Rays/Radiology</h5>
          <strong>
            <p style="font-size:small">
              Ultrasound And X-Ray Facilities Are Now Available Round The
              Clock With Our Top Of The Line Machines.
            </p>
          </strong>
          <p>
            <a href="#" class="btn btn-primary">Make an Appointment</a>
          </p>
        </div>
      </div>
      <div class="col-lg row">
        <div class="col-3 mt-5">
          <img src="https://i.postimg.cc/tRhHXtxH/x-rays.png" height="60px" alt="" />
        </div>
        <div class="col-9">
          <h5 class="heading">Laboratory Services</h5>
          <strong>
            <p style="font-size:small">
              First Class Round The Clock Lab Services Are Provided By Us.
            </p>
          </strong>
          <p>
            <a href="#" class="btn btn-primary">Make an Appointment</a>
          </p>
        </div>
      </div>
      <div class="col-lg row">
        <div class="col-3 mt-5">
          <img src="https://i.postimg.cc/6pPPVyv0/therapy.png" height="60px" alt="" />
        </div>
        <div class="col-9">
          <h5 class="heading">Physiotherapy</h5>
          <strong>
            <p style="font-size:small">
              Even The All-Powerful Pointing Has No Control About The Blind
              Texts It Is An Almost Unorthographic.
            </p>
          </strong>
          <p>
            <a href="#" class="btn btn-primary">Make an Appointment</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <!--Services end-->
  <!--doctor starts here-->

  <div class="doctors container" style="padding-bottom: 50px;">
    <hr style="margin: 0 20vw" />
    <br /><br />
    <center style="padding-top: 50px;">
      <h1 class="line">Our <span class="a">Doctors</span></h1>
    </center>
    <br /><br />
    <div class="our-doctors" style="padding:5px">
      <div class="doc doctor-1">
        <center>
          <img src="https://i.postimg.cc/25nZk3D5/john.jpg" alt="" />
          <br />
          <h2>Dr.John</h2>
          <br />
          <hr />
          <h3>Neurologist</h3>
          <p>10 years experience</p>
          <a href="www.twitter.com"><i class="fab fa-twitter"></i></a>
          <a href="www.instagram.com"><i class="fab fa-instagram" aria-hidden="true"></i></a>
          <a href="www.facebook.com"><i class="fab fa-facebook"></i>
            <a href="www.linkedin.com"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
        </center>
      </div>
      <div class="doc doctor-2">
        <center>
          <img src="https://i.postimg.cc/MHpMmDjc/sarah.jpg" alt="" />
          <br />
          <h2>Dr.Hema</h2>
          <br />
          <hr />
          <h3>Anesthesiologist</h3>
          <p>One Of the Best</p>

          <a href="www.twitter.com"><i class="fab fa-twitter"></i></a>
          <a href="www.instagram.com"><i class="fab fa-instagram" aria-hidden="true"></i></a>
          <a href="www.facebook.com"><i class="fab fa-facebook" aria-hidden="true"></i></a>
          <a href="www.linkedin.com"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
        </center>
      </div>
      <div class="doc doctor-3">
        <center>
          <img src="https://i.postimg.cc/ydVk7Pjf/Hema.jpg" alt="" />
          <br />
          <h2>Dr.Sarah</h2>
          <br />
          <hr />

          <h3>Neurosurgeon</h3>
          <p>Best Doctor</p>

          <a href="www.twitter.com"><i class="fab fa-twitter"></i></a>
          <a href="www.instagram.com"><i class="fab fa-instagram" aria-hidden="true"></i></a>
          <a href="www.facebook.com"><i class="fab fa-facebook" aria-hidden="true"></i></a>
          <a href="www.linkedin.com"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
        </center>
      </div>
      <div class="doc doctor-4">
        <center>
          <img src="https://i.postimg.cc/CLW5RYJn/sandeep.jpg" alt="" />
          <br />
          <h2>Dr.Sandeep</h2>
          <br />
          <hr />

          <h3>Cardiology</h3>
          <p>Best Experienced Doctor</p>

          <a href="www.twitter.com"><i class="fab fa-twitter"></i></a>
          <a href="www.instagram.com"><i class="fab fa-instagram" aria-hidden="true"></i></a>
          <a href="www.facebook.com"><i class="fab fa-facebook" aria-hidden="true"></i></a>
          <a href="www.linkedin.com"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
        </center>
      </div>
    </div>
  </div>

  <!--doctor ends here-->
  <!-- Testimonial Start -->
  <div class="container testi ">
    <center>
      <h1><span class="a">Testimonials</span></h1>
    </center>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" style="height: 360px; background-color: blue">
        <div class="testimonial-icon">
          <center>
            <i class="fa fa-quote-left" style="font-size: 60px; color: rgba(256, 256, 256, 0.5)"></i>
          </center>
        </div>
        <div class="carousel-item active" style="height: 250px">
          <div class="carousel-caption d-md-block text">
            <div class="testimonial-img">
              <img src="https://i.postimg.cc/bwWxYKSm/pm.jpg" style="height: 105px; border-radius: 50%;" />
            </div>
            <div class="testimonial-text">
              <p>
                It is an honour to have such a medical services organization in
                our country to help people in their tough times.
              </p>
              <h3>Narendra Modi</h3>
              <h4>Prime Minister</h4>
            </div>
          </div>
        </div>

        <div class="carousel-item" style="height: 300px; background-color: blue">
          <div class="carousel-caption d-md-block text">
            <div class="testimonial-img">
              <img src="https://i.postimg.cc/T2gHzJF8/testimonial-2.jpg" style="border-radius: 50%;">
            </div>
            <div class="testimonial-text">
              <p>
                It's really a good platform, I have purchased medicines for my
                son from here and I received it on time.
              </p>
              <h3>Mr. Jeff</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="height: 300px; background-color: blue">
          <div class="carousel-caption d-md-block text">
            <div class="testimonial-img">
              <img src="https://i.postimg.cc/t42crRfY/testimonial-1.jpg" style="border-radius: 50%;">
            </div>
            <div class="testimonial-text">
              <p>
                We make sure that the quality of service you are getting is
                world class and give we you this gurranty with every service you
                opt for.
              </p>
              <h3>Gal Gadot</h3>
              <h4>CEO and Founder</h4>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <!-- Testimonial End -->
  <?php
  include("partials/footer.php");
  ?>

</body>

</html>