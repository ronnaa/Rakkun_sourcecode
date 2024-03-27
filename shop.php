<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Rakkun.com</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Varela" rel="stylesheet">

    <!-- Favicon
    ================================================== -->
    <link rel="icon" sizes="16x16" href="assets/img/logo.ico">
    <link rel="manifest" href="assets/img/manifest.json">
    <link rel="mask-icon" href="assets/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- Font Awesome core CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- Hero Section, Background Image change in css -->
    <div id="top" class="hero background-overlay">
    
        <!-- Name & Description -->
        <div class="hero-content">

            <h1 style="font-size: 500%;">Welcome to </h1>
            <p class="hero-job"style="font-size: 300%;"><span>Rakkun.com</span></p>
            <p class="hero-job-desc"style="font-size: 200%;">"Reading is a basic tool in the living of a good life."― Mortimer Jerome Adler</p>
        
        </div><!-- /.hero-content -->

        <div class="hero-arrow page-scroll home-arrow-down">
        
            <a class="" href="#intro"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
        
        </div><!-- /.hero-arrow -->

    </div><!-- /.hero -->
    <!-- End Hero -->

    <!-- Header -->
    <header id="masthead" class="site-header">
        <nav id="primary-navigation" class="site-navigation" data-spy="affix">
            <div class="container">
                <div class="navbar-header page-scroll">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#portfolio-perfect-collapse" aria-expanded="false" >
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <!-- Name -->
                    <div class="page-scroll site-logo">
                        <a href="index.php">Home</a>
                    </div>

                </div><!-- /.navbar-header -->

                <div class="main-menu collapse navbar-collapse" id="portfolio-perfect-collapse">

                    <!-- Navigation -->
                    <ul class="nav navbar-nav navbar-right">

                        <li class="page-scroll"><a href="#totalbook"style="font-size: 180%;">หนังสือทั่วไป</a></li>
                        <li class="page-scroll"><a href="#lightnovel"style="font-size: 180%;">นิยาย</a></li>
                        <li class="page-scroll"><a href="#doc"style="font-size: 180%;">สารคดี</a></li>
                        <li class="page-scroll"><a href="#cartoon"style="font-size: 180%;">การ์ตูน</a></li>

                    </ul><!-- /.navbar-nav -->

                </div><!-- /.navbar-collapse -->
            </div>
        </nav><!-- /.primary-navigation -->
    </header><!-- /#header -->
    <!-- End Header -->

    <main id="main" class="site-main">
        <!-- Team section -->
        <section class="site-section section-team" id="totalbook">
            <div class="container">
                <h2 style="font-size: 300%;">หมวดหมู่ หนังสือทั่วไป</h2>
                <p class="section-subtitle"style="font-size: 200%;"><span>หลากหลาย</span></p>
                
                <div class="team">
                    <div class="row">
                        <!-- Team Member -->
                        <?php 

                                require_once('show.php'); 

                                $sql = "SELECT book_id, book_name, book_type, book_detail, link_book, price_book, local_pic_book FROM book_store WHERE book_type = 'normal' ";
                                $result = $conn->query($sql) or die($conn->error);

                                while($row = $result->fetch_assoc()) { ?> 
                        <div class="col-md-3 col-xs-6">
                            <div class="team-member">
                                <div class="flipper">
                                    <div class="team-member-front">
                                        <div class="team-member-thumb">
                                            <img src="<?php echo $row['local_pic_book'];?>" class="img-res" alt="">
                                        </div>  <!-- /.team-member-thumb -->
                                        <p class="team-member-front-name"><?php echo $row["book_name"]."<br>". 
                                            "ราคา ". $row["price_book"]; ?></p>
                                    </div><!-- /.team-member-front -->
                                    <div class="team-member-back">
                                        <div class="team-member-info">
                                            <h3 class="team-member-back-name"><?php echo $row["book_name"]; ?></h3>
                                            <p class="team-member-back-position" style="height: 20px;"><?php echo $row["book_type"]; ?></p>
                                            <p class="team-member-back-info" style="width: 230px;height: 60px;"><?php echo $row["book_detail"]; ?></p>
                                            <div class="social-icons small">
                                                <a href="<?php echo $row['link_book']; ?>"><img src="รูปโลโก้ร้านที่ linkไป"></a>
                                            </div>
                                        </div><!-- /.team-member-back-info -->
                                    </div><!-- /.team-member-back -->  
                                </div>         
                            </div><!-- /.team-member -->       
                        </div>
                        <?php } ?>
                    </div>
                </div><!-- /.team -->   
            </div>
        </section><!-- /.section-team -->
        <!-- End Team section -->

        <section class="site-section section-team" id="lightnovel">
            <div class="container">
                <h2 style="font-size: 300%;">หมวดหมู่ นิยาย</h2>
                <p class="section-subtitle"style="font-size: 200%;"><span>หลากหลาย</span></p>
                
                <div class="team">
                    <div class="row">
                        <!-- Team Member -->
                        <?php 

                                require_once('show.php'); 

                                $sql = "SELECT book_id, book_name, book_type, book_detail, link_book, price_book, local_pic_book FROM book_store WHERE book_type = 'lightnovel'";
                                $result = $conn->query($sql);

                                while($row = $result->fetch_assoc()) { ?> 
                        <div class="col-md-3 col-xs-6">
                            <div class="team-member">
                                <div class="flipper">
                                    <div class="team-member-front">
                                        <div class="team-member-thumb">
                                            <img src="<?php echo $row['local_pic_book'];?>" class="img-res" alt="">
                                        </div>  <!-- /.team-member-thumb -->
                                        <p class="team-member-front-name"><?php echo $row["book_name"]; ?></p>
                                    </div><!-- /.team-member-front -->
                                    <div class="team-member-back">
                                        <div class="team-member-info">
                                            <h3 class="team-member-back-name"><?php echo $row["book_name"]; ?></h3>
                                            <p class="team-member-back-position" style="height: 20px;"><?php echo $row["book_type"]; ?></p>
                                            <p class="team-member-back-info" style="width: 230px;height: 60px;"><?php echo $row["book_detail"]; ?></p>
                                            <div class="social-icons small">
                                                <a href="<?php echo $row['link_book']; ?>"><img src="รูปโลโก้ร้านที่ linkไป"></a>
                                            </div>
                                        </div><!-- /.team-member-back-info -->
                                    </div><!-- /.team-member-back -->  
                                </div>         
                            </div><!-- /.team-member -->       
                        </div>
                        <?php } ?>
                    </div>
                </div><!-- /.team -->   
            </div>
        </section><!-- /.section-team -->
        <!-- End Team section -->

        <section class="site-section section-team" id="doc">
            <div class="container">
                <h2 style="font-size: 300%;">หมวดหมู่ สารคดี</h2>
                <p class="section-subtitle"style="font-size: 200%;"><span>หลากหลาย</span></p>
                
                <div class="team">
                    <div class="row">
                        <!-- Team Member -->
                        <?php 

                                require_once('show.php'); 

                                $sql = "SELECT book_id, book_name, book_type, book_detail, link_book, price_book, local_pic_book FROM book_store WHERE book_type = 'documentary'";
                                $result = $conn->query($sql);

                                while($row = $result->fetch_assoc()) { ?> 
                        <div class="col-md-3 col-xs-6">
                            <div class="team-member">
                                <div class="flipper">
                                    <div class="team-member-front">
                                        <div class="team-member-thumb">
                                            <img src="<?php echo $row['local_pic_book'];?>" class="img-res" alt="">
                                        </div>  <!-- /.team-member-thumb -->
                                        <p class="team-member-front-name"><?php echo $row["book_name"]; ?></p>
                                    </div><!-- /.team-member-front -->
                                    <div class="team-member-back">
                                        <div class="team-member-info">
                                            <h3 class="team-member-back-name"><?php echo $row["book_name"]; ?></h3>
                                            <p class="team-member-back-position" style="height: 20px;"><?php echo $row["book_type"]; ?></p>
                                            <p class="team-member-back-info" style="width: 230px;height: 60px;"><?php echo $row["book_detail"]; ?></p>
                                            <div class="social-icons small">
                                                <a href="<?php echo $row['link_book']; ?>"><img src="รูปโลโก้ร้านที่ linkไป"></a>
                                            </div>
                                        </div><!-- /.team-member-back-info -->
                                    </div><!-- /.team-member-back -->  
                                </div>         
                            </div><!-- /.team-member -->       
                        </div>
                        <?php } ?>
                    </div>
                </div><!-- /.team -->   
            </div>
        </section><!-- /.section-team -->
        <!-- End Team section -->

        <section class="site-section section-team" id="cartoon">
            <div class="container">
                <h2 style="font-size: 300%;">หมวดหมู่ การ์ตูน</h2>
                <p class="section-subtitle"style="font-size: 200%;"><span>หลากหลาย</span></p>
                
                <div class="team">
                    <div class="row">
                        <!-- Team Member -->
                        <?php 

                                require_once('show.php'); 

                                $sql = "SELECT book_id, book_name, book_type, book_detail, link_book, price_book, local_pic_book FROM book_store WHERE book_type = 'cartoon'";
                                $result = $conn->query($sql);

                                while($row = $result->fetch_assoc()) { ?> 
                        <div class="col-md-3 col-xs-6">
                            <div class="team-member">
                                <div class="flipper">
                                    <div class="team-member-front">
                                        <div class="team-member-thumb">
                                            <img src="<?php echo $row['local_pic_book'];?>" class="img-res" alt="">
                                        </div>  <!-- /.team-member-thumb -->
                                        <p class="team-member-front-name"><?php echo $row["book_name"]; ?></p>
                                    </div><!-- /.team-member-front -->
                                    <div class="team-member-back">
                                        <div class="team-member-info">
                                            <h3 class="team-member-back-name"><?php echo $row["book_name"]; ?></h3>
                                            <p class="team-member-back-position" style="height: 20px;"><?php echo $row["book_type"]; ?></p>
                                            <p class="team-member-back-info" style="width: 230px;height: 60px;"><?php echo $row["book_detail"]; ?></p>
                                            <div class="social-icons small">
                                                <a href="<?php echo $row['link_book']; ?>"><img src="รูปโลโก้ร้านที่ linkไป"></a>
                                            </div>
                                        </div><!-- /.team-member-back-info -->
                                    </div><!-- /.team-member-back -->  
                                </div>         
                            </div><!-- /.team-member -->       
                        </div>
                        <?php } ?>
                    </div>
                </div><!-- /.team -->   
            </div>
        </section><!-- /.section-team -->
        <!-- End Team section -->
    </main>

    <!-- Footer --> 
    <footer id="colophon" class="site-footer">

        <div class="container-fluid">

            <ul class="list-unstyled list-inline">
                <li class="page-scroll"><a href="#totalbook"style="font-size: 150%;">หนังสือการ์ตูน</a></li>
                <li class="page-scroll"><a href="#lightnovel"style="font-size: 150%;">นิยาย</a></li>
                <li class="page-scroll"><a href="#doc"style="font-size: 150%;">สารคดี</a></li>
                <li class="page-scroll"><a href="#cartoon"style="font-size: 150%;">การ์ตูน</a></li>
            </ul>

            <div class="page-scroll">
                <a href="#totalbook" class="rectangle">
                    <i class="fa fa-angle-double-up"></i>
                </a>
            </div>

        </div>

        <div class="container text-center">
            <p class="copyright">&copy; <a href="http://pixelperfect.mk/" target="_blank">KMITLProject</a> - 2022</p>
        </div>

    </footer><!-- /#footer -->
    <!-- End Footer --> 

     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery core js | Do not Delete -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap core js | Do not Delete -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Bootstrap progressbar JS -->
    <script src="assets/js/bootstrap-progressbar.min.js"></script>

    <!-- Count To JS -->
    <script src="assets/js/jquery.countTo.min.js"></script>

    <!-- Easing JS -->
    <script src="assets/js/jquery.easing.min.js"></script>

    <!-- Shuffle JS -->
    <script src="assets/js/jquery.shuffle.min.js"></script>

    <!-- Slick Carousel JS -->
    <script src="assets/js/slick.min.js"></script>

    <!-- Touchswipe JS -->
    <script src="assets/js/touchswipe.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
    

</body>
</html>