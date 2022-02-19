<!DOCTYPE html>
<html lang="en">

<!--head-->
<?php
session_start();
include ("partials/head.php");
?>
  <body>
    <!--header-->
    <?php
    include ("partials/header.php");
    ?>

    <!--about us start-->
    <div class="about container" id="aboutus">
      <center>
        <h1 class="line" style="padding-top:150px;">About <span class="a">US</span></h1>
      </center>

      <br /><br /><br />
      <center>
        <p class="d">
          VISUDH AJIVAM PVT LTD is one of the best digital platform for health
          care services integrated with pharmacies, doctors, labtests, diagnosis
          centres across India to provide world class Healthcare facilities to
          individuals across the country
        </p>
      </center>
      <br />
      <center>
        <span class="b"
          ><i
            style="color: rgb(17, 17, 160); font-size: 20px; margin-right: 5px"
            class="fas fa-flask"></i
          >Doctors Availability</span
        >
        <span class="b"
          ><i
            style="color: rgb(17, 17, 160); font-size: 20px; margin-right: 5px"
            class="fas fa-briefcase-medical"
          ></i
          >Medicine</span
        >
        <span class="b"
          ><i
            style="color: rgb(17, 17, 160); font-size: 20px; margin-right: 5px"
            class="fas fa-pills"  ></i >Labtest</span >
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
          <img
            style="width: 100px"
            src="https://i.postimg.cc/NjkKSS7y/dotcor.png"
            alt=""
            class="doctorsab"
          />
        </center>
      </div>
      <div class="overflow" style="margin-top: 50px;">
        <div class="box" id="our-1" style="height: 485px;">
          <center>
            <img src="https://i.postimg.cc/g2v53qyq/mission.jpg" alt="" />
          </center>
          <br />
          <center><h2>Our Mission</h2></center>
          <br />
          <center>
            <p>
              Visudh AJIVAM PVT LTD is on a mission to take hand in hand with
              public and help them across their medical needs with making the
              user friendly digital platform without any Hassel at right time.
            </p>
          </center>
        </div>
        <div class="box" id="our-2" style="height: 485px;">
          <center>
            <img src="https://i.postimg.cc/mZ504r2M/vission.jpg" alt="" />
          </center>
          <br />
          <center><h2>Our Vision</h2></center>
          <br />
          <center>
            <p>
              To revolutionise the Healthcare sector through this healthtech
              platform so that each and every citizen of India can get the best
              medical needs at there allowing budget.
            </p>
          </center>
        </div>
        <div class="box" id="our-3" style="height: 485px;">
          <center>
            <img src="https://i.postimg.cc/VNmhgrDy/values.jpg" alt="" />
          </center>
          <br />
          <center><h2>Our Values</h2></center>
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

    <?php
    include("partials/footer.php");
     ?>

</body>

</html>
