<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row min-vh-100 flex-column flex-md-row">
            <aside class="col-12 col-md-3 col-xl-2 p-0 bg-dark flex-shrink-1">
                <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-items-center py-2 text-center sticky-top" id="sidebar">
                    <div class="text-center p-3">
                        <img src="image/5353134.jpg" alt="profile picture" class="img-fluid rounded-circle my-4 p-1 d-none d-md-block shadow">
                        <a href="#" class="navbar-brand mx-0 font-weight-bold text-nowrap">Md. Sadat Ahmed</a>
                    </div>
                    <button type="button" class="navbar-toggler border-0 order-1" data-bs-toggle="collapse" data-bs-target="#nav" aria-bs-controls="nav" aria-bs-expanded="false" aria-bs-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse border-last" id="nav">
                        <ul class="navbar-nav flex-column w-100 justify-center">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">Edit Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Add Books</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Manage Books</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Users Info</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white"> <i class="fa fa-twitter-square fa-lg"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white"> <i class="fa fa-instagram fa-lg"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white"> <i class="fa fa-envelope fa-lg"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white"> <i class="fa fa-linkedin fa-lg"></i></a>
                        </li>
                    </ul>
                </nav>

            </aside>
            <main class="col px-0 flex-grow-1">
                <div class="container py-3">
                    <?php include('product.php'); ?>
                </div>
            </main>

        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>