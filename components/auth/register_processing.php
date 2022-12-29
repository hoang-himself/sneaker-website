<!DOCTYPE html>
<html lang="en">

<body>
    <?php

    if (isset($_POST['submitRegister'])) {
        include_once '../db/database.php';

        $email = validateEmail($_POST['inputEmail']);
        $password = validatePassword($_POST['inputPassword']);
        if ($email && $password) {
            $username = $_POST['inputUsername'];
            $userEmail = $_POST['inputEmail'];
            $pwd = $_POST['inputPassword'];
            $confirmed_pwd = $_POST['inputConfirmedPassword'];

            $sql = $conn->prepare("SELECT * FROM users WHERE email = ?");
            $sql->bind_param("s", $userEmail);
            $sql->execute();
            $result = $sql->get_result();
            $row = $result->fetch_array(MYSQLI_NUM);

            if ($row > 0) {
                echo "<script>window.location.href='../../index.php?page=register';alert('This email address has been registered before.');</script>";
            } else {
                if ($pwd === $confirmed_pwd) {
                    $result = $conn->prepare("INSERT INTO users (username, email, pwd) VALUES (?, ?, ?)");
                    $result->bind_param("sss", $username, $userEmail, $pwd);
                    $result->execute();
                    if ($result->affected_rows > 0) {
                        echo "<script>window.location.href='../../index.php?page=home';alert('You have registered successfully!');</script>";
                        setcookie("success", "Register successfully!", time() + 1, "/", "", 0);
                    } else {
                        echo "<script>window.location.href='../../index.php?page=register';alert('Your registration has been denied');</script>";
                        setcookie("error", "Register failed!", time() + 1, "/", "", 0);
                    }
                } else {
                    echo "<script>window.location.href='../../index.php?page=register';alert('Confirmed password is incorrect.');</script>";
                }
            }
        }
    }

    function validateEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>window.location.href='../../index.php?page=register';alert('Invalid email address');</script>";
            return false;
        }
        return true;
    }

    function validatePassword($password)
    {
        $uppercase = preg_match('@[A-Z]@', $password);
        $number = preg_match('@[0-9]@', $password);
        if (!$uppercase || !$number || strlen($password) < 8) {
            echo "<script>window.location.href='../../index.php?page=register';alert('Password must be at least 8 characters and contain at least 1 uppercase letter & number.');</script>";
            return false;
        }
        return true;
    }
    ?>
</body>

</html>