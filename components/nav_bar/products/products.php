<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .card .product-overlay {
            background: rgba(0, 0, 0, .2);
            visibility: hidden;
            opacity: 0;
            transition: .3s;
        }

        .card:hover .product-overlay {
            visibility: visible;
            opacity: 1;
        }
    </style>
</head>

<body>
    <div class="container py-4">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Categories</h1>

                <div class="accordion accordion-flush" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button px-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h4>Gender</h4>
                            </button>
                        </h2>
                        <form action="index.php?page=products&type=<?php echo $_GET['type']; ?>" method="post">
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="myCheckbox" name="genderCheck[]" value="menCheck">
                                        <label class="form-check-label h4 fw-normal" for="flexCheckDefault">Men</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="genderCheck[]" value="womenCheck">
                                        <label class="form-check-label h4 fw-normal" for="flexCheckDefault">Women</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="genderCheck[]" value="uniCheck">
                                        <label class="form-check-label h4 fw-normal" for="flexCheckDefault">Unisex</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="submitGender">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="pull-right pb-4">
                        <div class="dropdown pull-right">

                            <?php
                            session_start();
                            if ($_SESSION['user_lv'] > 0) {
                                echo "<button class='btn btn-primary' type='button' data-bs-toggle='modal' data-bs-target='#exampleModal'>Add New Item</button>";
                            }
                            ?>

                            <!-- Add new item -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add new item</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <form action="components/nav_bar/products/addItem_processing.php" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="inputProductName" class="col-form-label">Product name:</label>
                                                    <input type="text" class="form-control" name="inputProductName">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputProductImage_1" class="col-form-label">Image 1 URL:</label>
                                                    <input type="text" class="form-control" name="inputProductImage_1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputProductImage_2" class="col-form-label">Image 2 URL:</label>
                                                    <input type="text" class="form-control" name="inputProductImage_2">
                                                </div>
                                                <div class="d-flex align-items-center mt-3" style="gap: 10px">
                                                    Product category:
                                                    <select class="form-select" style="width: 160px" name="inputProductType">
                                                        <option selected>Select a type</option>
                                                        <option value="1">Lifestyle</option>
                                                        <option value="2">Jordan</option>
                                                        <option value="3">Basketball</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputProductOrigin" class="col-form-label">Country/Region of Origin:</label>
                                                    <input type="text" class="form-control" name="inputProductOrigin">
                                                </div>
                                                <div class="d-flex align-items-center mt-3" style="gap: 10px">
                                                    Gender:
                                                    <select class="form-select" style="width: 160px" name="inputProductGender">
                                                        <option selected>Select gender</option>
                                                        <option value="1">Men</option>
                                                        <option value="2">Women</option>
                                                        <option value="3">Unisex</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputProductDesc" class="col-form-label">Product description:</label>
                                                    <textarea class="form-control" name="inputProductDesc"></textarea>
                                                </div>
                                                <div class="d-flex align-items-center mt-3" style="gap: 10px;">
                                                    <label for="inputProductPrice" class="col-form-label">Product price:</label>
                                                    <input type="text" name="inputProductPrice" class="form-control" style="width: 100px;" aria-describedby="priceHelpInline">
                                                    <span id="priceHelpInline" class="form-text">Dollar.</span>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="submitAddItem" class="btn btn-primary">Add item</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                            <!-- Sorted By -->
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                Sorted By
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item" href="index.php?page=products&type=<?php echo $_GET['type']; ?>&sort=newest">Newest</a></li>
                                <li><a class="dropdown-item" href="index.php?page=products&type=<?php echo $_GET['type']; ?>&sort=descend">Price: High-Low</a></li>
                                <li><a class="dropdown-item" href="index.php?page=products&type=<?php echo $_GET['type']; ?>&sort=ascend">Price: Low-High</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php
                    include_once 'components/db/database.php';
                    $sql;
                    if (isset($_POST['submitSearchItem'])) {
                        $searchItem = $_POST['searchItem'] . "%";
                        $sql = $conn->prepare("SELECT * FROM products WHERE product_name LIKE ?");
                        $sql->bind_param("s", $searchItem);
                    } else {
                        $type = $_GET['type'];
                        if ($type == 'lifestyle') {
                            $productType = 1;
                        } else if ($type == 'jordan') {
                            $productType = 2;
                        } else {
                            $productType = 3;
                        }
                        if (isset($_POST['submitGender'])) {
                            if (in_array('menCheck', $_POST['genderCheck'])) {
                                $productGender = 1;
                            } else if (in_array('womenCheck', $_POST['genderCheck'])) {
                                $productGender = 2;
                            } else {
                                $productGender = 3;
                            }
                            $sql = $conn->prepare("SELECT * FROM products WHERE product_type = ? AND product_gender = ?");
                            $sql->bind_param("ii", $productType, $productGender);
                        } else if (isset($_GET['sort'])) {
                            $sort = $_GET['sort'];
                            switch ($sort) {
                                case 'newest': {
                                        $sql = $conn->prepare("SELECT * FROM products WHERE product_type = ? ORDER BY id");
                                        break;
                                    }
                                case 'descend': {
                                        $sql = $conn->prepare("SELECT * FROM products WHERE product_type = ? ORDER BY product_price DESC");
                                        break;
                                    }
                                case 'ascend': {
                                        $sql = $conn->prepare("SELECT * FROM products WHERE product_type = ? ORDER BY product_price ASC");
                                        break;
                                    }
                            }
                            $sql->bind_param("i", $productType);
                        } else {
                            $sql = $conn->prepare("SELECT * FROM products WHERE product_type = ?");
                            $sql->bind_param("i", $productType);
                        }
                    }

                    $sql->execute();
                    $result = $sql->get_result();
                    global $productName, $productPrice;
                    session_start();
                    while ($row = $result->fetch_assoc()) {
                        $productName = $row["product_name"];
                        $productPrice = $row["product_price"];
                        $productGender = $row["product_gender"];
                        $_SESSION['productID'] = $row["id"];
                    ?>

                        <!-- Product card display -->
                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card rounded-0">
                                    <img src="<?php echo $row["product_image1"]; ?>" class="card-img-top" alt="" />
                                    <div class="card-img-overlay rounded-0 d-flex product-overlay align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <?php
                                            session_start();
                                            if ($_SESSION['user_lv'] > 0) {
                                                echo "<li><button class='btn btn-primary text-white' style='width: 45px;' type='button' data-bs-toggle='modal' data-bs-target='#exampleModal2'><i class='fa fa-pencil' aria-hidden='true'></i></button></li>";
                                            }
                                            ?>
                                            <li><a class="btn btn-primary text-white mt-2" style="width: 45px;" href="index.php?page=product&id=<?php echo $row["id"]; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            <?php
                                            if ($_SESSION['user_lv'] > 0) {
                                                echo "<li><button class='btn btn-primary text-white mt-2' style='width: 45px;' type='button' data-bs-toggle='modal' data-bs-target='#exampleModal3'><i class='fa fa-trash' aria-hidden='true'></i></button></li>";
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body px-0">
                                    <div class="h4 text-decoration-none text-dark"><?php echo $productName ?></div>
                                    <p class="text-muted">
                                        <?php
                                        if ($productGender == 1) {
                                            echo "Men's shoes";
                                        } else if ($productGender == 2) {
                                            echo "Women's shoes";
                                        } else {
                                            echo "Unisex's shoes";
                                        }
                                        ?>
                                    </p>
                                    <p class="text-dark h5">$<?php echo $productPrice ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Update item -->
                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update item</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <form action="components/nav_bar/products/updateItem_processing.php" method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="inputProductName2" class="col-form-label">Product name:</label>
                                                <input type="text" class="form-control" name="inputProductName2" ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProductImage2_1" class="col-form-label">Image 1 URL:</label>
                                                <input type="text" class="form-control" name="inputProductImage2_1">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProductImage2_2" class="col-form-label">Image 2 URL:</label>
                                                <input type="text" class="form-control" name="inputProductImage2_2">
                                            </div>
                                            <div class="d-flex align-items-center mt-3" style="gap: 10px">
                                                Product category:
                                                <select class="form-select" style="width: 160px" name="inputProductType2">
                                                    <option selected>Select a type</option>
                                                    <option value="1">Lifestyle</option>
                                                    <option value="2">Jordan</option>
                                                    <option value="3">Basketball</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProductOrigin2" class="col-form-label">Country/Region of Origin:</label>
                                                <input type="text" class="form-control" name="inputProductOrigin2">
                                            </div>
                                            <div class="d-flex align-items-center mt-3" style="gap: 10px">
                                                Gender:
                                                <select class="form-select" style="width: 160px" name="inputProductGender2">
                                                    <option selected>Select gender</option>
                                                    <option value="1">Men</option>
                                                    <option value="2">Women</option>
                                                    <option value="3">Unisex</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProductDesc2" class="col-form-label">Product description:</label>
                                                <textarea class="form-control" name="inputProductDesc2"></textarea>
                                            </div>
                                            <div class="d-flex align-items-center mt-3" style="gap: 10px;">
                                                <label for="inputProductPrice2" class="col-form-label">Product price:</label>
                                                <input type="text" name="inputProductPrice2" class="form-control" style="width: 100px;" aria-describedby="priceHelpInline">
                                                <span id="priceHelpInline" class="form-text">Dollar.</span>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="submitUpdateItem" class="btn btn-primary">Update item</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <!-- Delete item -->
                        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete item</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <form action="components/nav_bar/products/deleteItem_processing.php" method="post">
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete this product?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="submitDeleteItem" class="btn btn-danger">Delete item</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>

        </div>
    </div>
</body>

</html>