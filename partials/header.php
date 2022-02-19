<?php
include("connect.php");
?>

<!-- NAV part -->
<div class="home-part" id=home>
  <div class="fixed-top">
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="index.php"><img style="width: 200px;" src="data:image/png;base64,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" /></a>

      <ul class="navbar-nav ml-auto mt-2 mt-lg-0 ">
        <li class="nav-item ">
          <div class="shopping-cart">
            <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart fa-lg " style="color: black;"></i></a>
            <span class="shopping-cart-text">Shopping cart</span>
          </div>
        </li>
        <!--<li class="nav-item">
        <div class="shopping-cart">
        <a class="nav-link" href="forms.php"><i class="fa fa-user fa-lg" style="color: black;"></i></a>
         <span class="shopping-cart-text">Log in</span>
        </div>
      </li>-->

        <?php
        if (!empty($_SESSION['email'])) { ?>
          <li class="nav-item">
            <div class="shopping-cart">
              <a class="nav-link" href="handler/customerlogout.php"><i class="fa fa-user fa-lg" style="color: black;"></i></a>
              <span class="shopping-cart-text">Sign Out</span>
            </div>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <div class="shopping-cart">
              <a class="nav-link" href="forms.php"><i class="fa fa-user fa-lg" style="color: black;"></i></a>
              <span class="shopping-cart-text">Sign In</span>
            </div>
          </li>
        <?php } ?>

        <!--<li class="nav-item">
        <div class="shopping-cart">
        <a class="nav-link" href="#"><i class="fa fa-bell fa-lg"></i></a>
        <span class="shopping-cart-text">Notification</span>
        </div>
      </li>-->
        <li>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </li>
      </ul>
    </nav>
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-blue py-3 px-1">
        <ul class="navbar-nav flex-row ml-md-auto d-md-flex nav-drop">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="filter-booking/index.php">Schedule a meeting</a>
          </li>
          <li class="nav-item">
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="font-size: larger;" />

            </form>
          </li>
          <li class="nav-item">
            <button style="border-radius: 10px; background: blue; color:white" class="btn btn-outline-success my-2 my-sm-0" type="submit">
              <i class="fa fa-search" style="color: white;"></i>
              Search
            </button>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Nav part ends here-->

<style>
  /* nav bar */
  .nav-item {
    padding-left: 10px;
    padding-right: 10px;
  }

  .bg-blue {
    background-color: #007bff;
  }

  .nav-link {
    color: white;
  }

  .navbar-nav {
    flex-direction: row;
  }

  .shopping-cart {
    position: relative;
    display: inline-block;
  }

  .shopping-cart-text {
    visibility: hidden;
    width: 120px;
    background-color: rgb(58, 58, 241);
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
    top: 100%;
    left: 50%;
    margin-left: -60px;
  }

  .shopping-cart:hover .shopping-cart-text {
    visibility: visible;
  }

  @media screen and (max-width: 780px) {
    .bg-blue {
      width: fit-content;
    }

    .nav-drop {
      display: flex;
      flex-direction: column !important;
      padding-right: 25px;
      margin-right: auto;
    }
  }
</style>
<!-- Nav part ends here-->