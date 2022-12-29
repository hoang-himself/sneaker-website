<!DOCTYPE html>
<html>

<body>
    <?php
    session_start();
    unset($_SESSION["sessionUser"]);
    unset($_SESSION["sessionId"]);
    unset($_SESSION["user_lv"]);
    header("Location: ../../index.php?page=home");
    ?>
</body>

</html>