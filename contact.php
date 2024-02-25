<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0" />


    <!-- meta -->
    <!-- Primary Meta Tags -->
    <title>Contact</title>
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
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

</head>

<body>
    <!-- navbar -->
    <?php include_once 'includes/navbar.php' ?>


    <!-- header -->

    <header data-jarallax data-speed="0.2" class=" jarallax" style="background-image: url('https://images.unsplash.com/photo-1607799279861-4dd421887fb3?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">

        <div class="blog-image">
            <h1 class="display-4 fw-bold">ข้อมูลการติดต่อ</h1>
            <p class="lead">หน้าเงิน - Face Money</p>
        </div>

    </header>

    <!-- blog -->
    <section class="container py-5">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="border-short-bottom">รายละเอียด</h1>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa-solid fa-location-dot fa-4x py-2 text-danger"></i>
                        <h4>ที่อยู่</h4>
                        <p>ปทุมธานี คลองหนึ่ง คลองหลวง</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa-solid fa-phone fa-4x py-2 text-danger"></i>
                        <h4 class="card-title">เบอร์โทรศัพท์</h4>
                        <p class="card-text">0879720746</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa-solid fa-envelope fa-4x py-2 text-danger"></i>
                        <h4>อีเมล</h4>
                        <p>methadondee2541@hotmail.com</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">แบบฟอร์มติดต่อเรา</h5>
                        <form action="php/contact.php" method="post">
                            <div class="row g-3 ">
                                <div class="col-md-4 form-group">
                                    <label for="name" class="form-label">ชื่อ</label>
                                    <input type="text" id="name" name="name" required class="form-control" placeholder="ชื่อของคุณ" aria-label="First name">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="phone" class="form-label">เบอร์โทรศัพท์</label>
                                    <input type="text" id="phone" name="phone" required class="form-control" placeholder="เบอร์โทรศัพท์" aria-label="First name">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="email" class="form-label">อีเมล</label>
                                    <input type="text" id="email" name="email" required class="form-control" placeholder="example@gmail.com" aria-label="First name">
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <label for="message" class="form-label">ข้อความของคุณ</label>
                                <textarea id="message" rows="10" name="message" required class="form-control" placeholder="เขียนข้อความของคุณที่นี่"></textarea>
                            </div>

                            <div id="recaptcha-wrapper" class="text-center my-2 ">
                                <div class="g-recaptcha d-inline-block" data-callback="recaptchaCallback" data-sitekey="6LcVb3YpAAAAAKrUXPJlqfWkj_bjeIzDZYaPSvGl"></div>
                            </div>
                            <button class="btn btn-primary d-block mx-auto mt-3" name="btn-submit" id="btn-submit" type="submit" disabled>ส่งข้อความ</button>
                        </form>



                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    <!-- footer -->
    <?php include_once 'includes/footer.php' ?>

    <!-- to-top  -->
    <div class="to-top">
        <i class="fa-solid fa-arrow-up"></i>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="assets/js/main.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script>
        $(function() {
            // global variables
            captchaResized = false;
            captchaWidth = 304;
            captchaHeight = 78;
            captchaWrapper = $('#recaptcha-wrapper');
            captchaElements = $('#rc-imageselect, .g-recaptcha');

            $(window).on('resize', function() {
                resizeCaptcha();
            });

            resizeCaptcha();
        });

        function resizeCaptcha() {
            if (captchaWrapper.width() >= captchaWidth) {
                if (captchaResized) {
                    captchaElements.css('transform', '').css('-webkit-transform', '').css('-ms-transform', '').css('-o-transform', '').css('transform-origin', '').css('-webkit-transform-origin', '').css('-ms-transform-origin', '').css('-o-transform-origin', '');
                    captchaWrapper.height(captchaHeight);
                    captchaResized = false;
                }
            } else {
                var scale = (1 - (captchaWidth - captchaWrapper.width()) * (0.05 / 15));
                captchaElements.css('transform', 'scale(' + scale + ')').css('-webkit-transform', 'scale(' + scale + ')').css('-ms-transform', 'scale(' + scale + ')').css('-o-transform', 'scale(' + scale + ')').css('transform-origin', '0 0').css('-webkit-transform-origin', '0 0').css('-ms-transform-origin', '0 0').css('-o-transform-origin', '0 0');
                captchaWrapper.height(captchaHeight * scale);
                if (captchaResized == false) captchaResized = true;
            }
        }

        function recaptchaCallback(){
            $('#btn-submit').removeAttr('disabled');
        }
    </script>
</body>

</html>