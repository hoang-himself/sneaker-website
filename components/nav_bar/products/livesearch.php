<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = 'sneaker_fest';
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $q = $_GET["q"];
    $sql = "SELECT COUNT(*) FROM products";
    $len = $conn->query($sql);

    if (strlen($q) > 0) {
        $hint = "";
        for ($i = 0; $i < $len; $i++) {
            $sql = "SELECT * from products WHERE product_name LIKE '$q%' ORDER BY product_name";
            $result = $conn->query($sql);
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