<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    if (isset($_POST['submitAddItem'])) {
        include_once '../../db/database.php';
        $productName = $_POST['inputProductName'];
        $productImage_1 = $_POST['inputProductImage_1'];
        $productImage_2 = $_POST["inputProductImage_2"];
        $productType = $_POST['inputProductType'];
        $type = 'lifestyle';
        if ($productType == 2) {
            $type = 'jordan';
        } else if ($productType == 3) {
            $type = 'basketball';
        }
        $productOrigin = $_POST["inputProductOrigin"];
        $productGender = $_POST["inputProductGender"];
        $productDesc = $_POST['inputProductDesc'];
        $productPrice = $_POST['inputProductPrice'];

        $sql = pg_prepare($conn, "", "INSERT INTO products (product_name, product_image1, product_image2, product_type, product_origin, product_gender, product_description, product_price) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        pg_execute($conn, "", array($productName, $productImage_1, $productImage_2, $productType, $productOrigin, $productGender, $productDesc, $productPrice));

        header("Location: ../../../index.php?page=products&type=$type");
    }
    ?>
</body>

</html>
