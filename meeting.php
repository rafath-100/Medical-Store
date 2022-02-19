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
    <div class="container" style="margin-top: 10rem;">
        <form>
            <div class="form-row">
                <div class="col">
                    <label for="inputFirst-name">First Name</label>
                    <input type="text" class="form-control" id="First-name">
                </div>
                <div class="col">
                    <label for="Last-name">Last Name</label>
                    <input type="text" class="form-control" id="Last-name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="House number & Street">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Optional Address">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>Rajasthan</option>
                        <option>Delhi</option>
                        <option>Maharashtra</option>
                        <option>Madhya pradesh</option>
                        <option>Uttar pradesh</option>
                        <option>Assam</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Postal code</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <?php
    include("partials/footer.php");
    ?>
</body>