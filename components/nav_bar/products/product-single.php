<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#btn-minus').click(function() {
                var val = $("#var-value").html();
                val = (val == '1') ? val : val - 1;
                $("#var-value").html(val);
                $("#product-quantity").val(val);
                return false;
            });
            $('#btn-plus').click(function() {
                var val = $("#var-value").html();
                val++;
                $("#var-value").html(val);
                $("#product-quantity").val(val);
                return false;
            });
        });
    </script>
</head>

<body>
    <?php
    include_once "components/db/database.php";
    $productID = $_GET['id'];
    $sql = pg_prepare($conn, "", "SELECT * FROM products WHERE id = ?");
    $result = pg_execute($conn, "", array($productID));
    $row = $result->fetch_array();
    ?>
    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-4 mt-5">
                    <div class="card mb-3">
                        <img class="card-img" src="<?php echo $row["product_image1"]; ?>" alt="Card image cap 1" id="product-detail">
                    </div>
                </div>

                <div class="col-lg-4 mt-5">
                    <div class="card mb-3">
                        <img class="card-img" src="<?php echo $row["product_image2"]; ?>" alt="Card image cap 2" id="product-detail">
                    </div>
                </div>

                <div class="col-lg-4 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">
                                <?php
                                echo $row["product_name"];
                                ?>
                            </h2>

                            <p class="h3 py-2">
                                $
                                <?php
                                echo $row['product_price'];
                                ?>
                            </p>

                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Type:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted">
                                        <strong>
                                            <?php
                                            $type = 'Lifestyle';
                                            if ($row['product_type'] == 2) {
                                                $type = 'Jordan';
                                            } else if ($row['product_type'] == 3) {
                                                $type = 'Basketball';
                                            }
                                            echo $type;
                                            ?>
                                        </strong>
                                    </p>
                                </li>
                            </ul>

                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Country/Region of Origin:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted">
                                        <strong>
                                            <?php
                                            echo $row['product_origin'];
                                            ?>
                                        </strong>
                                    </p>
                                </li>
                            </ul>

                            <h6>Description:</h6>
                            <p>
                                <?php
                                echo $row['product_description'];
                                ?>
                            </p>

                            <div class="row">
                                <ul class="list-inline pb-3">
                                    <li class="list-inline-item text-right">
                                        <h6>Quantity:</h6>
                                        <input type="hidden" name="product-quantity" id="product-quantity" value="1">
                                    </li>
                                    <li class="list-inline-item">
                                        <button class="btn btn-primary btn-sm" id="btn-minus"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5><span class="badge bg-secondary" id="var-value">1</span></h5>
                                    </li>
                                    <li class="list-inline-item">
                                        <button class="btn btn-primary btn-sm" id="btn-plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                    </li>
                                </ul>

                            </div>
                            <div class="row pb-3">
                                <div class="col d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg" name="submit" value="buy">Buy</button>
                                </div>
                                <div class="col d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg" name="submit" value="addtocard">Add To Cart</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

</body>

</html>
