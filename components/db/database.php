<!DOCTYPE html>
<html>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";

    // Create connection
    $connStr = "host=localhost port=5432 dbname=sneaker_fest user=root password=root";
    $conn = pg_connect($connStr);

    // Check connection
    $stat = pg_connection_status($conn);
    if ($stat === PGSQL_CONNECTION_OK) {
        echo 'Connection status ok';
    } else {
        echo 'Connection status bad';
    }

    // Create database
    $sql = "CREATE DATABASE if not exists sneaker_fest";
    if (!pg_query($conn, $sql)) {
        echo "Cannot create database.\n";
        exit;
    }

    $sql = "USE sneaker_fest";
    if (!pg_query($conn, $sql)) {
        echo "Cannot use database.\n";
        exit;
    }

    // Create table: users
    $sql = "CREATE TABLE if not exists users (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(30) NOT NULL,
                email VARCHAR(50) NOT NULL,
                pwd VARCHAR(50) NOT NULL,
                user_level INT(5) DEFAULT 0
            )";
    if (!pg_query($conn, $sql)) {
        echo "Cannot create 'users' table.\n";
        exit;
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
    if (!pg_query($conn, $sql)) {
        echo "Cannot create 'products' table.\n";
        exit;
    }
    ?>
</body>

</html>