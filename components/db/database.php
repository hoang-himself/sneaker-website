<!DOCTYPE html>
<html>

<body>
    <?php
    $conn_string = "host=localhost port=5432 dbname=sneaker_fest user=root password=root";

    // Create connection
    $conn = pg_connect($conn_string);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . $conn_string);
    }

    // Create table: users
    $sql = "CREATE TABLE IF NOT EXISTS users (
                id SERIAL PRIMARY KEY,
                username VARCHAR(30) NOT NULL,
                email VARCHAR(50) NOT NULL,
                pwd VARCHAR(50) NOT NULL,
                user_level INT DEFAULT 0
            )";
    if (!pg_query($conn, $sql)) {
        echo "Cannot create 'users' table.\n";
        exit;
    }

    // Create table: products
    $sql = "CREATE TABLE IF NOT EXISTS products (
            id SERIAL PRIMARY KEY,
            product_name VARCHAR(30) NOT NULL,
            product_image1 VARCHAR(255) NOT NULL,
            product_image2 VARCHAR(255) NOT NULL,
            product_type INT NOT NULL,
            product_origin VARCHAR(30) NOT NULL,
            product_gender INT NOT NULL,
            product_description TEXT NOT NULL,
            product_price INT NOT NULL
        )";
    if (!pg_query($conn, $sql)) {
        echo "Cannot create 'products' table.\n";
        exit;
    }
    ?>
</body>

</html>
