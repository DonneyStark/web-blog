<?php
require_once 'php/connect.php';



// if(isset($_GET['tag'])){
//     $tag = $_GET['tag'];
// }else{
//     $tag = 'all';
// }

$tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';

$sql = "SELECT * FROM `articles` WHERE `tag` LIKE '%".$tag."%' AND `status` = 'true'";
$result = $conn->query($sql);

if(!$result){
    header('Location: https://www.facebook.com/');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
   

    <!-- meta -->
    <!-- Primary Meta Tags -->
    <title>Blog</title>
    <meta name="title" content="หน้าเงิน facemonews" />
    

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://metatags.io/" />
    <meta property="og:title" content="หน้าเงิน facemonews" />
    <meta property="og:description" content="ข่าวสาร บทความ การเงิน การลงทุน หุ้นไทย หุ้นต่างประเทศ" />
    <meta property="og:image" content="https://images.unsplash.com/photo-1554672723-b208dc85134f?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://metatags.io/" />
    <meta property="twitter:title" content="หน้าเงิน facemonews" />
    <meta property="twitter:description" content="ข่าวสาร บทความ การเงิน การลงทุน หุ้นไทย หุ้นต่างประเทศ" />
    <meta property="twitter:image" content="https://metatags.io/images/meta-tags.png" />

    <!-- Meta Tags Generated with https://metatags.io -->
    <!-- <meta name="title" content="หน้าเงิน facemonews"> -->
    <meta name="description" content="ข่าวสาร บทความ การเงิน การลงทุน หุ้นไทย หุ้นต่างประเทศ">
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
    <!-- css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
</head>

<body>
    
    <!-- navbar -->
    <?php include_once 'includes/navbar.php' ?>

    <!-- header -->
    
    

    <header data-jarallax data-speed="0.2" class=" jarallax"
        style="background-image: url('https://images.unsplash.com/photo-1607799279861-4dd421887fb3?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">

        <div class="blog-image">
            <h1 class="display-4 fw-bold">บทความ</h1>
            <p class="lead">สังคมแห่งการเขียนเว็บไซต์</p>
        </div>

    </header>
    
    <!-- blog -->
    <div class="container py-5">
        <div class="row pb-4">
            <div class="col-12 btn-group-custom text-center">
                <a href="blog.php?tag=all">
                    <button class="btn btn-primary <?php echo $tag == 'all' ? 'active' : ''; ?>">ทั้งหมด</button>
                </a>
                <a href="blog.php?tag=html">
                    <button class="btn btn-primary <?php echo $tag == 'html' ? 'active' : ''; ?>">HTML</button>
                </a>
                <a href="blog.php?tag=css">
                    <button class="btn btn-primary <?php echo $tag == 'css' ? 'active' : ''; ?>">CSS</button>
                </a>
                <a href="blog.php?tag=javascript">
                    <button class="btn btn-primary <?php echo $tag == 'javascript' ? 'active' : ''; ?>">JavaScript</button>
                </a>
                <a href="blog.php?tag=php">
                    <button class="btn btn-primary <?php echo $tag == 'php' ? 'active' : ''; ?>">PHP</button>
                </a>
                <a href="blog.php?tag=mysql">
                    <button class="btn btn-primary <?php echo $tag == 'mysql' ? 'active' : ''; ?>">MySQL</button>
                </a>
                
                
            </div>
        </div>
        <div class="row">
            <?php 
            if($result->num_rows){
                
            
            while($row = $result->fetch_assoc()){ 
            
            ?>
            <div class="col-12 col-md-4 col-sm-6 p-2 ">
                <div class="card h-100" >
                    <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="wrapper-card-img">
                        <img  src="<?php echo $base_path_blog.$row['image'] ?>" class="card-img-top" alt="...">
                    </a>
                   
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $row['subject'] ?></h5>
                      <p class="card-text"><?php echo $row['sub_title'] ?></p>
                      
                    </div>
                    <div class="p-3">
                        <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">อ่านเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <?php } 
            } else{ 
            ?>
                <section class="col-12">
                <p class="text-center">ไม่มีข้อมูล</p>
                </section>
            
            <?php 
            }
            ?>
            
            
            
        </div>
    </div>

    
    
    <!-- footer -->
    <?php include_once 'includes/footer.php' ?>

    <!-- to-top  -->
    <div class="to-top">
        <i class="fa-solid fa-arrow-up"></i>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
</body>

</html>

