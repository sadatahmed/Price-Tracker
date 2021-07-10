<?php

$conn = mysqli_connect("localhost", "root", "", "books");

if (!$conn) {
    die("Connection Error" . mysqli_connect_error());
}
if (isset($_GET['update'])) {
    $id = $_GET['update'];
    $store = $_GET['store'];
    if ($store == 'rokomari') {
        $sql = "SELECT * FROM roko_bookstore WHERE id={$id}";
    } elseif ($store == 'othoba') {
        $sql = "SELECT * FROM othoba_bookstore WHERE id={$id}";
    } else {
        $sql = "SELECT * FROM priyo_bookstore WHERE id={$id}";
    }
    $update_data = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($update_data)) {
        $id = $row['id'];
        $icbn_no = $row['icbn_no'];
        $book_name = $row['book_name'];
        $image_name = $row['image_name'];
        $author_name = $row['author_name'];
        $book_desc = $row['book_desc'];
        $price = $row['price'];
        $offer_price = $row['offer_price'];
        $market_place = $row['market_place'];
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="style.css">
            <title>Update|product</title>
        </head>

        <body>
            <div class="container shadow p-3">
                <div class="form-control" style="background-color: rgb(255, 238, 0);">
                    <h2>
                        Update Book Info <br>
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
                                <input type=" text" name="icbn_no" value="<?php echo $icbn_no; ?>" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="label">Book Name</label>
                            </th>
                            <td>
                                <input type="text" name="book_name" value="<?php echo $book_name; ?>" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="label">Book Image</label>
                            </th>
                            <td>
                                <input type="file" name="files" value="<?php echo $image_name; ?>" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="label">Author Name</label>
                            </th>
                            <td>
                                <input type="text" name="author_name" value="<?php echo $author_name; ?>" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="label">Price</label>
                            </th>
                            <td>
                                <input type="number" name="price" value="<?php echo $price; ?>" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="label">Offer Price</label>
                            </th>
                            <td>
                                <input type="number" name="offer_price" value="<?php echo $offer_price; ?>" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="label">Book Description</label>
                            </th>
                            <td>
                                <!--<input type="text" name="book_desc" placeholder="Enter Book Description" class="form-control">  -->

                                <textarea name="book_desc" cols="60" rows="5" value="<?php echo $book_desc; ?>" class="form-control" required></textarea><br>
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
                                <input type="submit" value="Update" name="update_btn" class="btn btn-warning">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>



            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/app.js"></script>
        </body>

        </html>

<?php
    }
}

if (isset($_POST['update_btn'])) {
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
        $sql = "UPDATE roko_bookstore SET icbn_no='$icbn_no',book_name='$book_name',author_name='$author_name',price='$price',offer_price='$offer_price',market_place='$market_place',book_desc='$book_desc',image_name='$image_name' WHERE id=$id";
    } elseif ($market_place == 'othoba') {
        $sql = "UPDATE othoba_bookstore SET icbn_no='$icbn_no',book_name='$book_name',author_name='$author_name',price='$price',offer_price='$offer_price',market_place='$market_place',book_desc='$book_desc',image_name='$image_name' WHERE id=$id";
    } elseif ($market_place == 'priyoshop') {
        $sql = "UPDATE priyo_bookstore SET icbn_no='$icbn_no',book_name='$book_name',author_name='$author_name',price='$price',offer_price='$offer_price',market_place='$market_place',book_desc='$book_desc',image_name='$image_name' WHERE id=$id";
    }
    if (mysqli_query($conn, $sql)) {
        move_uploaded_file($tmp_name, 'upload/' . $image_name);
        echo "Product Update successfully....";
    } else {
        echo "ERROR: Could not able to execute." . $sql . mysqli_error($conn);
    }
}
