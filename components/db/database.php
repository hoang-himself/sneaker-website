<!DOCTYPE html>
<html>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create database
    $sql = "CREATE DATABASE if not exists sneaker_fest";
    if (!$conn->query($sql)) {
        echo "Error creating database: " . $conn->error;
    }

    $sql = "USE sneaker_fest";
    if (!$conn->query($sql)) {
        echo "Error connection: " . $conn->error;
    }

    // Create table: users
    $sql = "CREATE TABLE if not exists users (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(30) NOT NULL,
                email VARCHAR(50) NOT NULL,
                pwd VARCHAR(50) NOT NULL,
                user_level INT(5) DEFAULT 0
            )";
    if (!$conn->query($sql)) {
        echo "Error creating table: " . $conn->error;
    }

    // Create table: products
    $sql = "CREATE TABLE if not exists products (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            product_name VARCHAR(30) NOT NULL,
            product_image1 VARCHAR(255) NOT NULL,
            product_image2 VARCHAR(255) NOT NULL,
            product_type INT NOT NULL,
            product_origin VARCHAR(30) NOT NULL,
            product_gender INT NOT NULL,
            product_description TEXT NOT NULL,
            product_price INT NOT NULL
        )";
    if (!$conn->query($sql)) {
        echo "Error creating table: " . $conn->error;
    }
    ?>
</body>

</html>