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


<!-- product section starts  -->
<div class="products" id="products">
<section class="product">

    <h1 class="heading" style="margin-top: 150px;">Our Products</h1>

    <div class="box-container">



          <?php
				include ("partials/connect.php");
				$sql="Select * from products";

				$results=$connect->query($sql);

				while ($final=$results->fetch_assoc()) { ?>

          <div class="box">
          <div>

            <span class="discount"><?php echo $final['discount'] ?></span>
            <div class="icons">
                <!--<a href="wishlist.php" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>-->
                <a href="cart.php" class="fas fa-shopping-cart"></a>
            </div>
            <img src="<?php echo $final['picture'] ?>" alt="">        <!--https://i.postimg.cc/KzYV2BBt/para.jpg-->
            <h3><?php echo $final['name'] ?></h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.<?php echo $final['price'] ?> <span> Rs.<?php echo $final['actualprice'] ?> </span> </div>
            <!--<div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
            </div>-->

            <?php
              if (!empty($_SESSION['email'])) {?>
                <button onclick="location.href='carthandler.php?cart_id=<?php echo $final['id'] ?>&cart_name=<?php echo $final['name'] ?>&cart_price=<?php echo $final['price'] ?>&cart_picture=<?php echo $final['picture'] ?>'" class="btn">
    										Add to cart
    						</button>
            <?php }else{ ?>
              <button onclick="location.href='forms.php'" class="btn">
                      Add to cart
              </button>
            <?php } ?>


            <!--<button class="btn">
										Buy Now
						</button>-->

            <!--<a href="#" class="btn"> Add to Cart </a>
            <a href="#" class="btn"> Buy Now </a>-->
          </div>


        </div>
        <?php } ?>
      </div>

</section>
</div>
<!-- product section ends -->

<?php
include ("partials/footer.php");
 ?>


</body>
</html>
