<?php

$conn = mysqli_connect("localhost", "root", "", "books");

if (!$conn) {
    die("Connection Error" . mysqli_connect_error());
}
session_start();
if (!isset($_SESSION['username'])) {
    header('location: cust_login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body style="background-color: #60605f;">

    <?php include('include/nav_bar.php'); ?>
    <?php include('include/carocel.php'); ?>

    <div class="container p-3">
        <h2 style="text-align: center; font-family:Fira Code; background-color:mediumseagreen">Books of Othoba</h2>
        <div class="row">

            <?php
            $sql = "SELECT * FROM othoba_bookstore";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
                    <div class="col-sm-3">
                        <div class="card box-shadow" style="width: 17rem;">
                            <img src="upload/<?php echo $row['image_name']; ?>" class="card-img-top" alt="Book Image" height="250px" width="250px">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['book_name']; ?></h5>
                                <p class="card-text"><?php echo $row['author_name']; ?></p>
                                <a href="compare_index.php?store=othoba_bookstore&&book_name=<?php echo $row['book_name']; ?>" class="btn btn-warning">Compare</a>
                                <a href="single_product.php?store=othoba_bookstore&&id=<?php echo $row['id']; ?>" class="btn btn-warning">৳ <?php echo $row['price']; ?></a>
                            </div>
                        </div>
                    </div>
            <?php
                }
                echo "<br>";
                mysqli_free_result($result);
            } else {
                echo "No record Found";
            }
            ?>
        </div>
    </div>
    <div class="container p-3">
        <h2 style="text-align: center; font-family:Fira Code; background-color:gold">Books of Rokomari</h2>
        <div class="row">

            <?php
            $sql = "SELECT * FROM roko_bookstore";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
                    <div class="col-sm-3">
                        <div class="card box-shadow" style="width: 17rem;">
                            <img src="upload/<?php echo $row['image_name']; ?>" class="card-img-top" alt="Book Image" height="250px" width="250px">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['book_name']; ?></h5>
                                <p class="card-text"><?php echo $row['author_name']; ?></p>
                                <a href="compare_index.php?store=roko_bookstore&&book_name=<?php echo $row['book_name']; ?>" class="btn btn-warning">Compare</a>
                                <a href="single_product.php?store=roko_bookstore&&id=<?php echo $row['id']; ?>" class="btn btn-warning">৳ <?php echo $row['price']; ?></a>
                            </div>
                        </div>
                    </div>
            <?php
                }
                echo "<br>";
                mysqli_free_result($result);
            } else {
                echo "No record Found";
            }
            ?>
        </div>
    </div>
    <div class="container p-3">
        <h2 style="text-align: center; font-family:Fira Code; background-color:lightblue">Books of Priyoshop</h2>
        <div class="row">

            <?php
            $sql = "SELECT * FROM priyo_bookstore";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
                    <div class="col-sm-3">
                        <div class="card box-shadow" style="width: 17rem;">
                            <img src="upload/<?php echo $row['image_name']; ?>" class="card-img-top" alt="Book Image" height="250px" width="250px">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['book_name']; ?></h5>
                                <p class="card-text"><?php echo $row['author_name']; ?></p>
                                <a href="compare_index.php?store=priyo_bookstore&&book_name=<?php echo $row['book_name']; ?>" class="btn btn-warning">Compare</a>
                                <a href="single_product.php?store=priyo_bookstore&&id=<?php echo $row['id']; ?>" class="btn btn-warning">৳ <?php echo $row['price']; ?></a>
                            </div>
                        </div>
                    </div>
            <?php
                }
                mysqli_free_result($result);
            } else {
                echo "No record Found";
            }
            ?>
        </div>
    </div>



    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>