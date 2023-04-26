<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    if (isset($_POST['submitLogin'])) {
        include_once '../db/database.php';

        $email = $_POST['inputEmail'];
        $pwd = $_POST['inputPassword'];

        // $sql = $conn->prepare('SELECT * FROM users WHERE email = ? AND pwd = ?');
        // $sql->bind_param("ss", $email, $pwd);
        // $sql->execute();
        // $result = $sql->get_result();
        // $row = $result->fetch_array(MYSQLI_NUM);

        $result = pg_query_params($conn, 'SELECT * FROM users WHERE email = $1 AND pwd = $2', array($email, $pwd));
        $row = pg_fetch_array($result, 0, PGSQL_NUM);

        if ($row > 0) {
            session_start();
            $_SESSION['sessionId'] = $row[0];
            $_SESSION['sessionUser'] = $row[1];
            $_SESSION['user_lv'] = $row[4];
            setcookie("success", "Register successfully!", time() + (86400 * 1), "/");
            header("Location: ../../index.php?page=home");
        } else {
            echo "<script>window.location.href='../../index.php?page=login';alert('Your username or password is incorrect!');</script>";
        }
    }
    ?>
</body>

</html>