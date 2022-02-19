<!DOCTYPE html>
<html lang="en">
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
 <!--Shopping cart lists start-->
 <h1 class="heading" style="margin-top: 150px; margin-bottom: -180px;">Cart</h1>


 <div class="row">
 <div class="col-sm-2">
 </div>
<div class="col-sm-8" style="background: #e6f7ff; margin-top: 200px;">
 <div class="small-container cart-page" style="padding-top: 0px;">
     <table>
         <tr>
             <th>Products</th>
             <th>Quantity</th>
             <th>Update</th>
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
											     <button class="btn btn-sm btn-outline-primary" name="remove" style="padding:10px 12px;border:2px solid blue;border-radius: 50px;
                            background: blue;color:white;outline: none;cursor: pointer; float:left;">Remove</button>
											     <input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
											   </form>
                     </div>
                 </div>
             </td>
               <td>
                 <form action="cartupdate.php" method="POST">
                   <input name="quantity" type="number" min="1" max="500" value="<?php echo $value['quantity'] ?>">
               </td>
               <td>
                  <button class="btn btn-sm btn-outline-primary" name="update" style="padding:10px 12px; border:2px solid blue;border-radius: 50px;
                   background: blue;color:white;outline: none;cursor: pointer; float:left;">Update</button>
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
     <div>
        <button style="padding:10px 12px;border:2px solid blue;border-radius: 50px;
         background: blue;color:white;outline: none;cursor: pointer; float:right;" onclick="location.href='checkout.php'">
         <!--<a href="checkout.php" style="text-decoration:none; color:white;"></a>-->Proceed to checkout ></button>
    </div>
 </div>
<!--Shopping cart lists ends-->
</div>
<div class="col-sm-2">
</div>
</div>

<?php
include("partials/footer.php");
 ?>

</body>
</html>
