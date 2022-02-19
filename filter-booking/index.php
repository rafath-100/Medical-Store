<?php

//index.php

include('database_connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Viudh Ajivam</title>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="css/jquery-ui.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container" style="height: 100px; background-color:#2fa4e7;">
        <div class="row">
            <div class="col-sm ">
                <a href="../index.php"><img src="https://i.postimg.cc/SKqMVP8y/download.png" style="width: 180px ;margin:2rem 0 0 1rem; "></a>
            </div>
            <div class="col-sm"></div>
            <div class="col-sm"></div>
        </div>

    </div>
    <!-- Page Content -->
    <div class="container">
        <center>
            <h2 class="mb-5 mt-5" style="color:rgb(17, 17, 160)">Schedule a meeting</h2>
        </center>
        <div class="row">
            <div class="col-sm-3">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2>Filter Your Search</h2>
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">X</button>
                        </div>

                        <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="collapse show">

                                    <div class="list-group">
                                        <h3>Specialist</h3>
                                        <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                                            <?php

                                            $query = "SELECT DISTINCT(product_brand) FROM product WHERE product_status = '1' ORDER BY product_id DESC";
                                            $statement = $connect->prepare($query);
                                            $statement->execute();
                                            $result = $statement->fetchAll();
                                            foreach ($result as $row) {
                                            ?>
                                                <div class="list-group-item checkbox">
                                                    <label><input type="checkbox" class="common_selector brand" value="<?php echo $row['product_brand']; ?>"> <?php echo $row['product_brand']; ?></label>
                                                </div>
                                            <?php
                                            }

                                            ?>
                                        </div>
                                    </div>

                                    <div class="list-group">
                                        <h3>Experience</h3>
                                        <?php

                                        $query = "SELECT DISTINCT(product_ram) FROM product WHERE product_status = '1' ORDER BY product_ram DESC";
                                        $statement = $connect->prepare($query);
                                        $statement->execute();
                                        $result = $statement->fetchAll();
                                        foreach ($result as $row) {
                                        ?>
                                            <div class="list-group-item checkbox">
                                                <label><input type="checkbox" class="common_selector ram" value="<?php echo $row['product_ram']; ?>"> <?php echo $row['product_ram']; ?> Years</label>
                                            </div>
                                        <?php
                                        }

                                        ?>
                                    </div>

                                    <div class="list-group">
                                        <h3>Distance from you</h3>
                                        <?php
                                        $query = "SELECT DISTINCT(product_storage) FROM product WHERE product_status = '1' ORDER BY product_storage DESC";
                                        $statement = $connect->prepare($query);
                                        $statement->execute();
                                        $result = $statement->fetchAll();
                                        foreach ($result as $row) {
                                        ?>
                                            <div class="list-group-item checkbox">
                                                <label><input type="checkbox" class="common_selector storage" value="<?php echo $row['product_storage']; ?>"> <?php echo $row['product_storage']; ?> km</label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>

                                    <div class="list-group">
                                        <h3>Fees</h3>
                                        <input type="hidden" id="hidden_minimum_price" value="0" />
                                        <input type="hidden" id="hidden_maximum_price" value="5000" />
                                        <p id="price_show">1000₹ - 5000₹</p>
                                        <div id="price_range"></div>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-9">

                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>
    <style>
        #loading {
            text-align: center;
            background: url('loader.gif') no-repeat center;
            height: 150px;
        }
    </style>

    <script>
        $(document).ready(function() {

            filter_data();

            function filter_data() {
                $('.filter_data').html('<div id="loading" style="" ></div>');
                var action = 'fetch_data';
                var minimum_price = $('#hidden_minimum_price').val();
                var maximum_price = $('#hidden_maximum_price').val();
                var brand = get_filter('brand');
                var ram = get_filter('ram');
                var storage = get_filter('storage');
                $.ajax({
                    url: "fetch_data.php",
                    method: "POST",
                    data: {
                        action: action,
                        minimum_price: minimum_price,
                        maximum_price: maximum_price,
                        brand: brand,
                        ram: ram,
                        storage: storage
                    },
                    success: function(data) {
                        $('.filter_data').html(data);
                    }
                });
            }

            function get_filter(class_name) {
                var filter = [];
                $('.' + class_name + ':checked').each(function() {
                    filter.push($(this).val());
                });
                return filter;
            }

            $('.common_selector').click(function() {
                filter_data();
            });

            $('#price_range').slider({
                range: true,
                min: 1000,
                max: 5000,
                values: [1000, 5000],
                step: 500,
                stop: function(event, ui) {
                    $('#price_show').html(ui.values[0] + '₹ - ' + ui.values[1] + '₹');
                    $('#hidden_minimum_price').val(ui.values[0]);
                    $('#hidden_maximum_price').val(ui.values[1]);
                    filter_data();
                }
            });

        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>