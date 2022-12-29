<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Programming Lab</title>
    <link rel="stylesheet" href="assets/css/custom.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        function showResult(str) {
            if (str.length == 0) {
                document.getElementById("livesearch").innerHTML = "";
                document.getElementById("livesearch").style.border = "0px";
                return;
            }
            // AJAX
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("livesearch").innerHTML = this.responseText;
                    document.getElementById("livesearch").style.border = "1px solid #A5ACB2";
                }
            }
            xmlhttp.open("GET", "components/nav_bar/products/livesearch.php?q=" + str, true);
            xmlhttp.send();
        }
    </script>
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }
    </style>
</head>

<body>
    <!-- Start Nav-->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand company-name" href="index.php?page=home">
                <img src="assets/img/logo.jpeg" alt="Logo" width="100" height="100" class="d-inline-block align-text-center mx-3" />
                SneakerFest
            </a>
            <div class="d-flex justify-content-end align-items-center" style="gap: 10px">

                <form action="index.php?page=products" method="post">
                    <div class="row">
                        <div class="col-8">
                            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="searchItem" onkeyup="showResult(this.value)">
                            <div id="livesearch" style="background-color:#F0F0F0; width:auto;"></div>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-outline-primary" type="submit" name="submitSearchItem"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>

                <?php
                session_start();
                if (isset($_SESSION['sessionUser']) && isset($_COOKIE['success'])) {
                    echo "<i class='fa fa-2x fa-user' style='color: #0275d8' aria-hidden='true'></i>" . '<div class="fs-3 text-primary">' . $_SESSION['sessionUser'] . '</div>';
                    echo "<a role='button' class='btn btn-outline-primary' href='components/auth/logout_processing.php'>Logout</a>";
                } else {
                    echo "<a role='button' class='btn btn-outline-primary' href='index.php?page=login'>Login</a>";
                }
                ?>
            </div>
        </div>
    </nav>
    <!-- Close Nav -->

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container-fluid ps-4">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse ps-4" id="main_nav">
                <div class="flex-fill">
                    <ul class="navbar-nav d-left justify-content-evenly">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=about">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">Products</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="index.php?page=products&type=lifestyle">Lifestyle</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="index.php?page=products&type=jordan">Jordan</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="index.php?page=products&type=basketball">Basketball</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->
</body>

</html>