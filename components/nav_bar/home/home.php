<!DOCTYPE html>
<html lang="en">

<body>
    <!-- Start Banner Hero -->
    <div id="my-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#my-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#my-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#my-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <?php
                        include_once("components/db/database.php");
                        $sql = "SELECT * FROM products WHERE product_type = 1 AND product_price = (SELECT MAX(product_price) FROM products WHERE product_type = 1)";
                        $result = $conn->query($sql);
                        $row1 = $result->fetch_assoc();
                        ?>
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid p-5" src="<?php echo $row1['product_image1']; ?>" alt="" />
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">

                                <h1 class="shoe-name"><?php echo $row1['product_name']; ?></h1>
                                <h2>The Once and Future Sneaker King</h2>
                                <p>
                                    <?php echo $row1['product_description']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <?php
                        $sql = "SELECT * FROM products WHERE product_type = 2 AND product_price = (SELECT MAX(product_price) FROM products WHERE product_type = 2)";
                        $result = $conn->query($sql);
                        $row2 = $result->fetch_assoc();
                        ?>
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid p-5" src="<?php echo $row2["product_image1"]; ?>" alt="" />
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="shoe-name"><?php echo $row2['product_name']; ?></h1>
                                <h2>
                                    Running-inspired shoes for everyday
                                    adventures
                                </h2>
                                <p>
                                    <?php echo $row2['product_description']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <?php
                        $sql = "SELECT * FROM products WHERE product_type = 3 AND product_price = (SELECT MAX(product_price) FROM products WHERE product_type = 3)";
                        $result = $conn->query($sql);
                        $row3 = $result->fetch_assoc();
                        ?>
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid p-5" src="<?php echo $row3["product_image1"]; ?>" alt="" />
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="shoe-name"><?php echo $row3['product_name']; ?></h1>
                                <h2>An Ambitious 1998 Runner</h2>
                                <p>
                                    <?php echo $row3['product_description']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#my-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#my-hero-carousel" role="button" data-bs-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1>Sneaker of the Week</h1>
                    <p>Don't miss out exclusive drops every week</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="index.php?page=product&id=<?php echo $row1["id"]; ?>">
                            <img src="<?php echo $row1["product_image1"]; ?>" class="card-img-top" alt="" />
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted text-right">$<?php echo $row1["product_price"]; ?></li>
                            </ul>
                            <a href="#" class="h2 text-decoration-none text-dark"><?php echo $row1["product_name"]; ?></a>
                            <p class="card-text">
                                <?php echo $row1["product_description"]; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="index.php?page=product&id=<?php echo $row2["id"]; ?>">
                            <img src="<?php echo $row2["product_image1"]; ?>" class="card-img-top" alt="" />
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted text-right">$<?php echo $row2["product_price"]; ?></li>
                            </ul>
                            <a href="#" class="h2 text-decoration-none text-dark"><?php echo $row2["product_name"]; ?></a>
                            <p class="card-text">
                                <?php echo $row2["product_description"]; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="index.php?page=product&id=<?php echo $row3["id"]; ?>">
                            <img src="<?php echo $row3["product_image1"]; ?>" class="card-img-top" alt="" />
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted text-right">$<?php echo $row3["product_price"]; ?></li>
                            </ul>
                            <a href="#" class="h2 text-decoration-none text-dark"><?php echo $row3["product_name"]; ?></a>
                            <p class="card-text">
                                <?php echo $row3["product_description"]; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->
</body>

</html>