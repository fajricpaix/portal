<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portal Berita - Detail</title>

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
        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:;">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Lorem ipsum dolor, sit amet consectetur</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- End Tag Header -->

        <section class="container">
            <div class="row">
                <div class="col-md-7">
                    <section id="detail">
                        <div class="heading">
                            <h5>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt magnam corporis enim dolor quasi distinctio.
                            </h5>
                        </div>
                        <div class="row sub-heading">
                            <div class="col-md-8 col-12 date">
                                Selasa, 30 February 2019 10:20 WIB
                            </div>
                            <div class="col-md-4 col-12 sharing-button">
                                <a href="javascript:;" class="btn btn-facebook"><img src="../src/img/icon/fb-h.png" alt="Facebook Share"></a>
                                <a href="javascript:;" class="btn btn-twitter"><img src="../src/img/icon/twitter-wh.png" alt="Facebook Share"></a>
                                <a href="javascript:;" class="btn btn-linkedin"><img src="../src/img/icon/linkedin-h.png" alt="Facebook Share"></a>
                            </div>
                        </div>
                        <div class="detail">
                            <div class="detail-img">
                                <div class="detail-video">
                                    <iframe width="100%" height="100%" frameborder='0' allowfullscreen src="https://www.youtube.com/embed/YGcwtGjy_DE"></iframe>
                                </div>                            
                            </div>
                            <div class="detail-paragraf">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos voluptatum sequi soluta blanditiis, eos beatae perspiciatis et debitis officia modi alias porro libero molestias? Corrupti distinctio labore accusantium possimus exercitationem?
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque <a href="javascript:;">reiciendis</a> delectus id suscipit accusantium ducimus corporis consequuntur, iste est illum? Ducimus odio qui debitis alias sed incidunt eos cupiditate eaque.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos voluptatum sequi soluta blanditiis, eos beatae perspiciatis et debitis officia modi alias porro libero molestias? Corrupti distinctio labore accusantium possimus exercitationem?
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque <a href="javascript:;">reiciendis</a> delectus id suscipit accusantium ducimus corporis consequuntur, iste est illum? Ducimus odio qui debitis alias sed incidunt eos cupiditate eaque.
                                </p>
                                <div class="detail-hyperlink">
                                    <span>See Another </span> <a href="javascript:;">: Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                                </div>
                            </div>
                        </div>

                        <div class="tag-session">
                            <div class="heading">
                                <h5>Tags</h5>
                            </div>
                            <a href="javascript:;" class="btn btn-tag">lorem</a>
                            <a href="javascript:;" class="btn btn-tag">ipsum</a>
                            <a href="javascript:;" class="btn btn-tag">consectetur</a>
                            <a href="javascript:;" class="btn btn-tag">adipisicing</a>
                            <a href="javascript:;" class="btn btn-tag">elit</a>
                            <a href="javascript:;" class="btn btn-tag">voluptatum</a>
                            <a href="javascript:;" class="btn btn-tag">neque</a>
                            <a href="javascript:;" class="btn btn-tag">accusantium</a>
                            <a href="javascript:;" class="btn btn-tag">ducimus</a>
                            <a href="javascript:;" class="btn btn-tag">delectus</a>
                        </div>
                    </section>
                </div>
                <div class="col-md-5">
                    <div class="heading">
                        <h5>Another Video</h5>
                    </div>
                    <div class="video-side video-side-top">
                        <div class="video-side-video">
                            <a href="javascript:;">
                                <img src="https://dummyimage.com/600x300/076aba/ffffff" alt="Judul Berita">
                            </a>
                        </div>
                        <div class="video-side-caption">
                            <a href="javascript:;">
                                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore minus culpa, saepe quae illo officiis</h5>
                            </a>
                        </div>
                    </div>
                    <div class="video-side video-side-bottom">
                        <?php include './content/video-list.php' ?>
                    </div>
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