<!DOCTYPE html>
<html lang="en">

<body>
    <div id="SneakerFest">
        <?php
        include 'components/header/header.php';
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        switch ($page) {
            case 'login': {
                    include 'components/auth/login.php';
                    break;
                }
            case 'register': {
                    include 'components/auth/register.php';
                    break;
                }
            case 'home': {
                    include 'components/nav_bar/home/home.php';
                    break;
                }
            case 'about': {
                    include 'components/nav_bar/about/about.php';
                    break;
                }
            case 'products': {
                    include 'components/nav_bar/products/products.php';
                    break;
                }
            case 'contact': {
                    include 'components/nav_bar/contact/contact.php';
                    break;
                }
            case 'product': {
                    include 'components/nav_bar/products/product-single.php';
                    break;
                }
        }
        include 'components/footer/footer.php';
        ?>
    </div>
</body>

</html>