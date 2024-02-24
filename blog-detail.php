<?php
require_once 'php/connect.php';
$sql = "SELECT * FROM articles WHERE id = '" . $_GET['id'] . "' AND `status` = 'true'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    header('location: blog.php');
}

$sql_RAND = "SELECT * FROM `articles` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
$result_RAND = $conn->query($sql_RAND);




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0" />


    <!-- meta -->
    <!-- Primary Meta Tags -->
    <title><?php echo $row['subject']; ?></title>
    <meta name="title" content="หน้าเงิน facemonews" />


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://metatags.io/" />
    <meta property="og:title" content="หน้าเงิน facemonews" />
    <meta property="og:description" content="<?php echo $row['sub_title']; ?>" />
    <meta property="og:image" content="https://images.unsplash.com/photo-1554672723-b208dc85134f?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://metatags.io/" />
    <meta property="twitter:title" content="หน้าเงิน facemonews" />
    <meta property="twitter:description" content="<?php echo $row['sub_title']; ?>" />
    <meta property="twitter:image" content="https://metatags.io/images/meta-tags.png" />

    <!-- Meta Tags Generated with https://metatags.io -->
    <!-- <meta name="title" content="หน้าเงิน facemonews"> -->
    <meta name="description" content="<?php echo $row['sub_title']; ?>">
    <meta name="keywords" content="หุ้น,หุ้นต่างประเทศ, บทความ,การลงทุน">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Metha Dondee">


    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
</head>

<body>
    <!-- navbar -->
    <?php include_once 'includes/navbar.php' ?>

    <!-- header -->

    <header data-jarallax data-speed="0.2" class=" jarallax" style="background-image: url('<?php echo $base_path_blog . $row['image']; ?>');">

        <div class="blog-image">
            <h1 class="display-4 fw-bold"><?php echo $row['subject']; ?></h1>
            <p class="lead"><?php echo $row['sub_title']; ?></p>
        </div>

    </header>

    <!-- blog -->
    <div class="container blog-content">
        <div class="row">
            <!-- detail -->
            <div class="col-12">
                <?php echo $row['detail']; ?>



            </div>
            <!-- share button and date -->
            <div class="col-12">
                <hr>
                <div class="social-share">
                    <a href="#" class="facebook-share">Share on Facebook</a>
                    <a href="#" class="line-share">Share on Line</a>
                    <a href="#" class="twitter-share">Share on Twitter</a>
                </div>
                <p class="text-end text-muted"><?php echo date_format(new DateTime($row['updated_at']), "j F Y"); ?></p>
            </div>
            <!-- carousel -->
            <div class="col-12">
                <div class="owl-carousel owl-theme">
                    <?php while($row_RAND = $result_RAND->fetch_assoc()){ ?>
                    <div class="col-12 p-2 ">
                        <div class="card h-100">
                            <a href="blog-detail.php?id=<?php echo $row_RAND['id'] ?>" class="wrapper-card-img">
                                <img src="<?php echo $base_path_blog.$row_RAND['image'] ?>" class="card-img-top" alt="...">
                            </a>

                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row_RAND['subject']; ?></h5>
                                <p class="card-text"><?php echo $row_RAND['sub_title']; ?></p>

                            </div>
                            <div class="p-3">
                                <a href="blog-detail.php?id=<?php echo $row_RAND['id'] ?>" class="btn btn-primary">อ่านเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
            <!-- comment Facebook -->
            <!-- data-href="https://developers.facebook.com/docs/plugins/comments#configurator2"  -->
            <div class="col-12">
                <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#facemonews<?php echo $row['id']; ?>" data-width="100%" data-numposts="5"></div>
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v19.0&appId=422616272474686" nonce="R9jV1pkC"></script>
            </div>
        </div>
    </div>



    <!-- footer -->
    <?php include_once 'includes/footer.php' ?>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
    
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
</body>

</html>