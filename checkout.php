<!DOCTYPE html>
<html>
<!--head-->
<?php
session_start();
include ("handler/customersession.php");
include ("partials/head.php");
?>
<body>
  <!--header-->
  <?php
  include ("partials/header.php");
  ?>
  <!--Shopping cart style start-->
  <style>
  .cart-page{
      margin:80px auto;
  }
  table{
      width:100%;
      border-collapse: collapse;
  }
  .cart-info{
      display: flex;
      flex-wrap: wrap;
  }
  th{
      text-align: left;
      padding:5px;
      color:white;
      background: blue;
      font-weight: normal;

  }
  td{
      padding:10px 5px;
  }
  td input{
      width:40px;
      height:30px;
      padding:5px;
  }
  td a{
      color:blue;
      font-size: 12px;
  }
  td img{
      width:80px;
      height:80px;
      margin-right: 10px;
  }
  .total-price{
      display: flex;
      justify-content: flex-end;
  }
  .total-price table{
      border-top: 3px solid blue;
      width:100%;
      max-width: 600px;
  }
  td:last-child{
      text-align: right;
  }
  th:last-child{
      text-align: right;
  }
  @media only screen and(max-width:600px){
      .cart-info p{
          display:hidden;
      }
  }
  </style>
  <!--Shopping cart style ends-->

<h1 class="heading" style="margin-top: 150px; margin-bottom: -180px;">Checkout Page</h1>









<div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-8" style="background: #e6f7ff; margin-top: 200px;">
<div class="small-container cart-page" style="padding-top: 0px;">
  <h1 style="text: bold; padding-bottom: 20px; text-align: center;">Summary of Your Order</h1>
    <table>
        <tr>
            <th>Products</th>
            <th>Quantity</th>
            <th></th>
            <th>Subtotal</th>
        </tr>

        <?php
               $total=0;
               if (isset($_SESSION['cart'])) {

                 foreach ($_SESSION['cart'] as $key => $value) {
                 $total=$total+$value['item_price']*$value['quantity'];

               ?>

        <tr>
            <td>
                <div class="cart-info">
                    <img src="<?php echo $value['item_picture'] ?>">
                    <div>
                      <p><?php echo $value['item_name'] ?></p>
                        <small>price: Rs. <?php echo $value['item_price'] ?></small><br>
                        <!--<a href="" style="text-decoration: none;">Remove</a>-->
                        <form action="cartremove.php" method="POST">
                          <!--<button class="btn btn-sm btn-outline-primary" name="remove">Remove</button>-->
                          <input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
                        </form>
                    </div>
                </div>
            </td>
              <td>
                <form action="cartupdate.php" method="POST">
                  <?php echo $value['quantity'] ?>
              </td>
              <td>
                 <!--<button class="btn btn-sm btn-outline-primary" name="update">Update</button>-->
                 <input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
               </form>
            </td>
            <td>Rs. <?php echo $value['item_price']*$value['quantity'] ?></td>
        </tr>

        <?php }

             } ?>


    </table>
    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>Rs. <?php echo $total ?></td>
            </tr>
            <tr>
               <td>Tax</td>
               <td>Rs. <?php if($total==0) {
                 ?> 0 <?php
               } else if($total>0 && $total<500){
                ?> 25 <?php
              } else if($total>500){
               ?> 45 <?php } ?> </td>
           </tr>
           <tr>
              <td>Savings</td>
              <td> <?php if($total==0) {
                ?> Rs. 0 <?php
              } else if($total>0 && $total<500){
               ?> - Rs. 25 <?php
             } else if($total>500){
              ?> - Rs. 45 <?php } ?> </td>
          </tr>
          <tr>
              <td>Total</td>
              <td>Rs. <?php echo $total ?></td>
          </tr>
        </table><br>

    </div>
    <!--<div>
       <button style="padding:10px 12px;border:2px solid blue;border-radius: 50px;
        background: blue;color:white;outline: none;cursor: pointer; float:right;" >
        <a href="checkout.php" style="text-decoration:none; color:white;">Proceed to checkout -></a></button>
   </div>-->
</div>
<!--Shopping cart lists ends-->
</div>
<div class="col-sm-2">
</div>
</div>










<div class="container" style="margin-top: 150px;">
<!--<div class="py-5 text-center">

  <h2>Checkout form</h2>
  <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
</div>-->

<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-4 order-md-2 mb-4">
    <!--<h4 class="d-flex justify-content-between align-items-center mb-3">
      <span class="text-muted">Your cart</span>
      <span class="badge badge-secondary badge-pill">3</span>
    </h4>
    <ul class="list-group mb-3">
      <li class="list-group-item d-flex justify-content-between lh-condensed">
        <div>
          <h6 class="my-0">Product name</h6>
          <small class="text-muted">Brief description</small>
        </div>
        <span class="text-muted">$12</span>
      </li>
      <li class="list-group-item d-flex justify-content-between lh-condensed">
        <div>
          <h6 class="my-0">Second product</h6>
          <small class="text-muted">Brief description</small>
        </div>
        <span class="text-muted">$8</span>
      </li>
      <li class="list-group-item d-flex justify-content-between lh-condensed">
        <div>
          <h6 class="my-0">Third item</h6>
          <small class="text-muted">Brief description</small>
        </div>
        <span class="text-muted">$5</span>
      </li>
      <li class="list-group-item d-flex justify-content-between bg-light">
        <div class="text-success">
          <h6 class="my-0">Promo code</h6>
          <small>EXAMPLECODE</small>
        </div>
        <span class="text-success">-$5</span>
      </li>
      <li class="list-group-item d-flex justify-content-between">
        <span>Total (USD)</span>
        <strong>$20</strong>
      </li>
    </ul>-->

    <!--<form class="card p-2">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Promo code">
        <div class="input-group-append">
          <button type="submit" class="btn btn-secondary">Redeem</button>
        </div>
      </div>
    </form>-->
  </div>
  <div class="col-md-8 order-md-1">
    <h2 class="mb-3" style="padding-top: 0px;">Billing address</h2>
    <h3 class="mb-3">Shipping address will be same as billing address</h3>



    <form class="needs-validation" action="handler/orderhandler.php" method="POST">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="firstName">First name</label>
          <input type="text" class="form-control" id="firstName" placeholder="" value="" required style="height: 30px;" name="firstname">
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="lastName">Last name</label>
          <input type="text" class="form-control" id="lastName" placeholder="" value="" required style="height: 30px;" name="lastname">
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
      </div>

      <!--<div class="mb-3">
        <label for="username">Username</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" class="form-control" id="username" placeholder="Username" required>
          <div class="invalid-feedback" style="width: 100%;">
            Your username is required.
          </div>
        </div>
      </div>-->

      <div class="mb-3">
        <label for="email">Email <!--<span class="text-muted">(Optional)</span>--></label>
        <input type="email" class="form-control" id="email" placeholder="you@example.com" style="height: 30px;" required name="email">
        <div class="invalid-feedback">
          Please enter a valid email address for shipping updates.
        </div>
      </div>

      <div class="mb-3">
        <label for="phone"> Phone <!--<span class="text-muted">(Optional)</span>--></label>
        <input type="phone" class="form-control" id="phone" placeholder="phone number" style="height: 30px;" required name="phone">
        <div class="invalid-feedback">
          Please enter a valid phone number for shipping updates.
        </div>
      </div>

      <div class="mb-3">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" placeholder="Door Number, street" required style="height: 30px;" name="address">
        <div class="invalid-feedback">
          Please enter your shipping address.
        </div>
      </div>

      <div class="mb-3">
        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite" style="height: 30px;" name"address2">
      </div>

      <div class="row">
        <div class="col-md-5 mb-3">
          <label for="country">Country</label>
          <select class="custom-select d-block w-100" id="country" required style="height: 30px;" name="country">
            <option value="">Choose...</option>
            <option>India</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid country.
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="state">State</label>
          <select class="custom-select d-block w-100" id="state" required style="height: 30px;" name="state">
            <option value="">Choose...</option>
            <option>Andhra Pradesh</option>
            <option>Maharashtra</option>
            <option>Karnataka</option>
            <option>Tamil Nadu</option>
            <option>Kerala</option>
          </select>
          <div class="invalid-feedback">
            Please provide a valid state.
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="zip">Zip</label>
          <input type="text" class="form-control" id="zip" placeholder="" required style="height: 30px;" name="zip">
          <div class="invalid-feedback">
            Zip code required.
          </div>
        </div>
      </div>
      <hr class="mb-4">
      <!--<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="same-address" style="height: 30px;">
        <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
      </div>-->
      <!--<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="save-info">
        <label class="custom-control-label" for="save-info">Save this information for next time</label>
      </div>
      <hr class="mb-4">-->

      <!--<h3 class="mb-3" style="text: bold;">Payment</h3>-->

      <div class="col-md-5 mb-3">
        <label for="country">Payment Method</label>
        <select class="custom-select d-block w-100" id="country" required style="height: 30px;" name="payment">
          <option value="">Choose...</option>
          <option>Cash on Delivery</option>
          <!--<option>Credit Card</option>
          <option>Debit Cart</option>
          <option>Pay Pal</option>-->
        </select>
        <div class="invalid-feedback">
          Please select a valid payment method.
        </div>
      </div>

      <!--<div class="d-block my-3">
        <div class="custom-control custom-radio">
          <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" required>
          <label class="custom-control-label" for="credit">Credit card</label>
        </div>
        <div class="custom-control custom-radio">
          <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
          <label class="custom-control-label" for="debit">Debit card</label>
        </div>
        <div class="custom-control custom-radio">
          <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
          <label class="custom-control-label" for="paypal">PayPal</label>
        </div>
        <div class="custom-control custom-radio">
          <input id="cod" name="paymentMethod" type="radio" class="custom-control-input" checked required>
          <label class="custom-control-label" for="cod">Cash on Delivery</label>
        </div>
      </div>-->

      <!--<div class="row">
        <div class="col-md-6 mb-3">
          <label for="cc-name">Name on card</label>
          <input type="text" class="form-control" id="cc-name" placeholder="" required style="height: 30px;">
          <small class="text-muted">Full name as displayed on card</small>
          <div class="invalid-feedback">
            Name on card is required
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="cc-number">Credit or Debit card number</label>
          <input type="text" class="form-control" id="cc-number" placeholder="" required style="height: 30px;">
          <div class="invalid-feedback">
            Credit or Debit card number is required
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 mb-3">
          <label for="cc-expiration">Expiration</label>
          <input type="text" class="form-control" id="cc-expiration" placeholder="" required style="height: 30px;">
          <div class="invalid-feedback">
            Expiration date required
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="cc-cvv">CVV</label>
          <input type="text" class="form-control" id="cc-cvv" placeholder="" required style="height: 30px;">
          <div class="invalid-feedback">
            Security code required
          </div>
        </div>
      </div>-->
      <hr class="mb-4">

      <h2 class="mb-3" style="padding-top: 0px;">Total: Rs. <?php echo $total ?></h2>
      <input type="hidden" name="total" value="<?php echo $total ?>">
      <button class="btn btn-primary btn-lg btn-block" type="submit" name="placeorder">Place Order</button>
    </form>
  </div>
</div>

<!--<footer class="my-5 pt-5 text-muted text-center text-small">
  <p class="mb-1">&copy; 2017-2019 Company Name</p>
  <ul class="list-inline">
    <li class="list-inline-item"><a href="#">Privacy</a></li>
    <li class="list-inline-item"><a href="#">Terms</a></li>
    <li class="list-inline-item"><a href="#">Support</a></li>
  </ul>
</footer>-->
</div>







<?php
include("partials/footer.php");
 ?>
</body>
</html>
