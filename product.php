<?php

$conn = mysqli_connect("localhost", "root", "", "books");

if (!$conn) {
    die("Connection Error" . mysqli_connect_error());
}

$icbn_no = $price = $offer_price = $book_name = $author_name = $market_place = $book_desc = $image_name = "";

if (isset($_POST['btn'])) {
    $icbn_no = $_POST["icbn_no"];
    $price = $_POST["price"];
    $offer_price = $_POST["offer_price"];
    $book_name = $_POST["book_name"];
    $image_name = $_FILES['files']['name'];
    $tmp_name = $_FILES['files']['tmp_name'];
    $size = $_FILES['files']['size'];
    $extention = pathinfo($image_name, PATHINFO_EXTENSION);
    $author_name = $_POST['author_name'];
    $market_place = $_POST['market_place'];
    $book_desc = $_POST['book_desc'];

    if ($market_place == 'rokomari') {
        $sql = "INSERT INTO roko_bookstore (icbn_no,book_name,author_name,price,offer_price,market_place,book_desc,image_name) VALUES('$icbn_no','$book_name','$author_name','$price','$offer_price','$market_place','$book_desc','$image_name')";
    } elseif ($market_place == 'othoba') {
        $sql = "INSERT INTO othoba_bookstore (icbn_no,book_name,author_name,price,offer_price,market_place,book_desc,image_name) VALUES('$icbn_no','$book_name','$author_name','$price','$offer_price','$market_place','$book_desc','$image_name')";
    } elseif ($market_place == 'priyoshop') {
        $sql = "INSERT INTO priyo_bookstore (icbn_no,book_name,author_name,price,offer_price,market_place,book_desc,image_name) VALUES('$icbn_no','$book_name','$author_name','$price','$offer_price','$market_place','$book_desc','$image_name')";
    }
    if (mysqli_query($conn, $sql)) {
        move_uploaded_file($tmp_name, 'upload/' . $image_name);
        echo "Product store successfully....";
    } else {
        echo "ERROR: Could not able to execute." . $sql . mysqli_error($conn);
    }
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Product</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include('include/nav_bar.php'); ?>
    <br><br>
    <div class="container shadow p-3">
        <div class="form-control" style="background-color: rgb(255, 238, 0);">
            <h2>
                Store Book in the Library <br>
            </h2>
        </div><br>
        <form action="" method="POST" enctype="multipart/form-data" class="d-flex justify-content-around">
            <table>
                <?php  ?>
                <tr>
                    <th>
                        <label class="label">ICBN NO</label>
                    </th>
                    <td>
                        <input type=" text" name="icbn_no" placeholder="Enter ICBN NO" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Book Name</label>
                    </th>
                    <td>
                        <input type="text" name="book_name" placeholder="Enter Book Name" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Book Image</label>
                    </th>
                    <td>
                        <input type="file" name="files" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Author Name</label>
                    </th>
                    <td>
                        <input type="text" name="author_name" placeholder="Enter Book Author Name" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Price</label>
                    </th>
                    <td>
                        <input type="number" name="price" placeholder="Enter Price" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Offer Price</label>
                    </th>
                    <td>
                        <input type="number" name="offer_price" placeholder="Enter Price" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Book Description</label>
                    </th>
                    <td>
                        <!--<input type="text" name="book_desc" placeholder="Enter Book Description" class="form-control">  -->

                        <textarea name="book_desc" cols="60" rows="5" class="form-control" required></textarea><br>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Market Place</label>
                    </th>
                    <td>
                        <!--    <input type="text" name="market_place" placeholder="Enter Market Place Name" class="form-control">  -->
                        <input type="radio" value="rokomari" name="market_place" class="form-radio-input" required>
                        <label>Rokomari</label>

                        <input type="radio" value="priyoshop" name="market_place" class="form-radio-input" required>
                        <label>Priyoshop</label>

                        <input type="radio" value="othoba" name="market_place" class="form-radio-input" required>
                        <label>Othoba</label>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="SUBMIT" name="btn" class="btn btn-warning">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>