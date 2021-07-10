<?php

$conn = mysqli_connect("localhost", "root", "", "books");

if (!$conn) {
    die("Connection Error" . mysqli_connect_error());
}
session_start();
if (!isset($_SESSION['username'])) {
    //header('location: cust_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Navigation Bar</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-family: Broadway;" href="index.php"><img src="image/logo.png" alt="logo" width="40" height="40">Book
                Track</a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target='#main-menu'>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-menu">
                <?php
                if ($_SESSION['username'] == 'admin') {
                ?>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="view_customer.php">User Info</a></li>
                        <li class="nav-item"><a class="nav-link active" href="view_roko_product.php">Rokomari Info</a></li>
                        <li class="nav-item"><a class="nav-link active" href="view_othoba_product.php">Othoba Info</a></li>
                        <li class="nav-item"><a class="nav-link active" href="view_priyo_product.php">PriyoShop Info</a></li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="">View Product</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="view_roko_product.php">Rokomari</a></li>
                                <li><a class="dropdown-item" href="view_othoba_product.php">Othoba</a></li>
                                <li><a class="dropdown-item" href="view_priyo_product.php">Priyoshop</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="compare.php">d</a></li>

                            </ul>
                        </li> -->
                        <li class="nav-item"><a class="nav-link" href="product.php">Add Book</a></li>

                        <?php
                        if (!isset($_SESSION['username'])) {
                        ?>
                            <li class="nav-item"><a class="nav-link" href="cust_login.php">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="cust_registration.php">Registration</a></li>
                        <?php
                        } else {
                            //echo "Hello " . $_SESSION['username'];
                        ?><li class="nav-item"><a class="nav-link" href="sidebar.php"><?php echo "Hello " . $_SESSION['username']; ?></a></li>
                            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                        <?php
                        }
                        ?>

                    </ul>
                <?php
                } else {
                ?>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                        <?php
                        if (!isset($_SESSION['username'])) {
                        ?>
                            <li class="nav-item"><a class="nav-link" href="cust_login.php">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="cust_registration.php">Registration</a></li>
                        <?php
                        } else {
                            //echo "Hello " . $_SESSION['username'];
                        ?><li class="nav-item"><a class="nav-link" href="#"><?php echo "Hello " . $_SESSION['username']; ?></a></li>
                            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                        <?php
                        }
                        ?>
                        <li class="nav-item"><a class="nav-link" href="compare.php">Search</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="">Book Store</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="store_rokomari.php">Rokomari</a></li>
                                <li><a class="dropdown-item" href="store_othoba.php">Othoba</a></li>
                                <li><a class="dropdown-item" href="store_priyoshop.php">Priyoshop</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="compare.php">Others</a></li>

                            </ul>
                        </li>



                    </ul>
                <?php
                }
                ?>
            </div>
        </div>
    </nav>
    <!-- <div class="container">
        <p style="margin-top: 90px; text-align: justify; font-family: Fira Code;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quis voluptas atque consequuntur amet
            dolorem
            quas iusto magnam deleniti exercitationem. Optio obcaecati assumenda doloremque sed perferendis. Qui aliquam
            impedit cum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas voluptate, nostrum saepe
            praesentium dignissimos rem dolores modi, eius quidem in cumque reiciendis officia a veniam corporis rerum,
            tempora ipsum quos eaque velit reprehenderit! Minima doloremque eius repudiandae nam alias corrupti totam
            nihil,
            quos voluptatem distinctio illum itaque quis dolor soluta corporis autem laudantium rem magni beatae
            recusandae
            quod nesciunt mollitia voluptates ea. Ipsam, pariatur non reprehenderit facere ad voluptatum libero
            veritatis
            quos soluta ut incidunt temporibus mollitia consequuntur expedita porro, earum necessitatibus! Nulla
            perferendis
            soluta voluptates quae in. Veritatis corporis labore ea, fugiat perspiciatis sequi voluptate, cumque
            temporibus
            similique blanditiis voluptatem vero voluptates quos sed nobis nihil provident quas aspernatur, facere quo
            ullam
            nulla! Ipsam, tenetur modi exercitationem sunt blanditiis aliquid asperiores ad officiis in reprehenderit
            deleniti at excepturi necessitatibus, voluptatibus minima quasi quisquam consequatur dicta ut dolorem beatae
            laborum quas illo possimus. Temporibus quod laudantium laboriosam, magni iusto labore dolorem, voluptas
            possimus
            consequuntur modi suscipit? Dolor suscipit incidunt voluptas in corrupti delectus sapiente odio facere
            laborum
            quis quidem, error eligendi est atque obcaecati tempore dignissimos. Commodi ut, nam, labore rerum eum,
            placeat
            alias ducimus fugit sint non facere impedit tempore aspernatur odit assumenda sit molestiae aliquam dolor
            nobis!
            Sequi?
        </p>
    </div> -->



    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>