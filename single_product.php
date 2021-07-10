<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Product View</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style6.css">
</head>

<body class="bg-secondary">
    <?php include('include/nav_bar.php'); ?>
    <section>
        <div class="container" style="margin-top: 80px;">
            <?php
            $conn = mysqli_connect("localhost", "root", "", "books");

            if (!$conn) {
                die("Connection Error" . mysqli_connect_error());
            }

            if (isset($_GET['store'])) {
                $id = $_GET['id'];
                //$store = $_GET['store'];
                if ($_GET['store'] == 'roko_bookstore') {
                    $query = "SELECT * FROM roko_bookstore WHERE id = $id";
                } elseif ($_GET['store'] == 'priyo_bookstore') {
                    $query = "SELECT * FROM priyo_bookstore WHERE id = $id";
                } elseif ($_GET['store'] == 'othoba_bookstore') {
                    $query = "SELECT * FROM othoba_bookstore WHERE id = $id";
                }
                $result = mysqli_query($conn, $query);
            }
            //if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="left" style="background-image: url(upload/<?php echo $row['image_name']; ?>);"></div>
                <div class="right">
                    <div class="content">


                        <h1><?php echo $row['book_name']; ?></h1>
                        <h4 style="text-align: right;"> <i><?php echo $row['author_name']; ?></i></h4>
                        <h2>Price: <?php echo $row['price']; ?></h2>
                        <h2>Discount Price: <?php echo $row['offer_price']; ?></h2>
                        <p><?php echo $row['book_desc']; ?></p>

                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>
            <?php
            }
            mysqli_free_result($result);
            //}
            ?>
        </div>
    </section>
</body>

</html>