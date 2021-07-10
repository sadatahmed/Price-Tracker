<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $key = mysqli_real_escape_string($conn, $_POST['search']);

    $sql = "SELECT * FROM roko_bookstore WHERE book_name = '$key'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
?>
            <div class="child">
                <img src="upload/<?php echo $row['image_name']; ?>" alt="Image" width="420px" height="610px" style="border-radius: 10px;">
            </div>
            <?php
        }
    } elseif ($sql = "SELECT * FROM priyo_bookstore WHERE book_name = '$key'") {
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="child">
                    <img src="upload/<?php echo $row['image_name']; ?>" alt="Image" width="420px" height="610px" style="border-radius: 10px;">
                </div>

                <?php
            }
        } elseif ($sql = "SELECT * FROM othoba_bookstore WHERE book_name = '$key'") {
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="child">
                        <img src="upload/<?php echo $row['image_name']; ?>" alt="Image" width="420px" height="610px" style="border-radius: 10px;">
                    </div>
<?php
                }
            }
        }
    }
}
?>