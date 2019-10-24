<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portal Berita - Search</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap/bootstrap.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="./css/main.css">


</head>
<body id="body">
    <h1 class="d-none">Judul Website</h1>
    <!-- Header -->
        <?php include './layout/header.php' ?>
    <!-- End Header -->

    <main class="main">
        <!-- Sidebar -->
            <?php include './layout/sidebar.php' ?>
        <!-- End Sidebar -->

        <!-- Tag Header -->
        <?php include './layout/tag-header.php' ?>
        <!-- End Tag Header -->

        <section class="container">
            <div class="row">
                <div class="col-md-6 offset-md-2">

                    <div class="heading-bold text-center">
                        <h2>Ekonomi</h2>
                    </div>

                    <section id="trending">
                        <?php include './content/list.php' ?>
                        <?php include './content/list.php' ?>
                    </section>

                </div>
                <div class="col-md-4">
                </div>
            </div>
        </section>
    </main>
    
    <script src="./js/slim.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="./js/main.js"></script>

</body>
</html>