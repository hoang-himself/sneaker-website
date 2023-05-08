<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    if (isset($_POST['submitDeleteItem'])) {
        include_once '../../db/database.php';
        session_start();
        $productID = $_SESSION['productID'];
        $pType = $_SESSION['productType'];
        $type = 'lifestyle';
        if ($pType == 2) {
            $type = 'jordan';
        } else if ($pType == 3) {
            $type = 'basketball';
        }
        $sql = pg_prepare($conn, "", "DELETE FROM products WHERE id = ?");
        pg_execute($conn,"", array($productID));
        unset($_SESSION["productID"]);
        header("Location: ../../../index.php?page=products&type=$type");
    }
    ?>
</body>

</html>
