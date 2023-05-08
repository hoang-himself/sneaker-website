<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    $conn_string = "host=localhost port=5432 dbname=sneaker_fest user=root password=root";

    // Create connection
    $conn = pg_connect($conn_string);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . $conn_string);
    }

    $q = $_GET["q"];
    $sql = "SELECT COUNT(*) FROM products";
    $len = pg_query($conn, $sql);

    if (strlen($q) > 0) {
        $hint = "";
        for ($i = 0; $i < $len; $i++) {
            $sql = "SELECT * from products WHERE product_name LIKE '$q%' ORDER BY product_name";
            $result = pg_query($conn, $sql);
            while ($row = $result->fetch_assoc()) {
                if ($hint == "") {
                    $hint = "<div class='ps-2'>" . $row['product_name'] . "</div>";
                } else {
                    $hint = $hint . "<br /> <div class='ps-2'>" . $row["product_name"] . "</div>";
                }
            }
        }
    }

    if ($hint == "") {
        $response = "No suggestion";
    } else {
        $response = $hint;
    }

    echo $response;
    ?>
</body>

</html>
