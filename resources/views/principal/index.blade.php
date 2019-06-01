<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Sistema de Biblioteca Online</title>

        <!-- Icon css link -->
        <link href="principal/css/font-awesome.min.css" rel="stylesheet">
        <link href="principal/css/icofont.css" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="principal/css/bootstrap.min.css" rel="stylesheet">

        <!-- Rev slider css -->
        <link href="principal/vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="principal/vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="principal/vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="principal/vendors/animate-css/animate.css" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="principal/vendors/magnific-popup/magnific-popup.css" rel="stylesheet">
        <link href="principal/vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">

        <link href="principal/css/style.css" rel="stylesheet">
        <link href="principal/css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="90">

       <div id="preloader">
            <div id="preloader_spinner">
				<div class="pre_inner">
					<div class="dot dot-1"></div>
					<div class="dot dot-2"></div>
					<div class="dot dot-3"></div>
				</div>
            </div>
        </div>

        <!--================Header Area =================-->
        <header class="hosting_menu">
            <div class="hosting_main_menu">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><img src="img/domain-logo.png" alt=""></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="#hosting">Inicio</a></li>
                                <li><a href="#feature">Buscar</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <!--li><a href="#"></a></li-->
                                <li><a href="{{route('login')}}">Ingresar</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </header>
        <!--================End Header Area =================-->

        <!--================Hosting Slider Area =================-->
        <section class="hostinge_slider_area">
            <div id="main_slider2" class="rev_slider" data-version="5.3.1.6">
                <ul>
                    <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="principal/img/home-slider/hosting-1.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                    </li>
                    <li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="principal/img/home-slider/hosting-2.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                    </li>
                    <li data-index="rs-1589" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="principal/img/home-slider/hosting-1.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                        <!-- LAYER NR. 1 -->
                    </li>
                </ul>
            </div>
            <div class="hosting_search_area">
                <div class="container">
                    <div class="hostinge_s_inner">
                        <h3>Sistema de Biblioteca Online</h3>
                        <h4>Busca tu libro</h4>
                        <!--p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui <br /> officia deserunt mollit anim id est laborum.</p-->
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Busca tu Libro">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Search</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Hosting Slider Area =================-->

        <!--================Choose Server Area =================-->
        <section class="choose_server_area" id="hosting">
            <div class="container">
                <div class="row choose_server_inner">
                    <div class="col-md-7">
                        <div class="server_left_text">
                            <div class="server_title">
                                <h2>Why Choose Our Server?</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="principal/img/icon/server-icon-1.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>100% Comfortable Doamin</h4>
                                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="principal/img/icon/server-icon-3.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>Professional Service</h4>
                                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="principal/img/icon/server-icon-2.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>Lawer Price Hosting</h4>
                                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="principal/img/icon/server-icon-4.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>Life Time Support</h4>
                                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="server_right_img">
                            <img src="principal/img/server-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Choose Server Area =================-->

        <!--================Hosting Service Area =================-->
        <section class="hosting_service_area">
            <div class="container">
                <div class="row hosting_service_inner">
                    <div class="col-md-6">
                        <div class="h_service_left">
                            <img src="principal/img/hosting-service-1.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="h_service_right">
                            <div class="server_title">
                                <h2>Incredible Hosting Service</h2>
                                <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>
                            </div>
                            <div class="h_service_list">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="principal/img/icon/h-service-1.png" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Shared Hosting Services</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="principal/img/icon/h-service-2.png" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>VPS Hosting Services</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="principal/img/icon/h-service-3.png" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Dedicated Hosting Services</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="principal/img/icon/h-service-4.png" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>SSD Hosting Services</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Hosting Service Area =================-->

        <!--================Great Feature Area =================-->
        <section class="great_feature_area" id="feature">
            <div class="container">
                <div class="great_title">
                    <h2>Work With Our Great Features</h2>
                    <p>It is pleasure, but because those who do not know how to pursue pleasure rationally <br />encounter consequences that are extremely painful.</p>
                </div>
                <div class="great_feature_inner row">
                    <div class="col-md-4">
                        <div class="great_feature_item">
                            <img src="principal/img/icon/g-f-1.png" alt="">
                            <a href="#"><h4>Spam Protection</h4></a>
                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="great_feature_item">
                            <img src="principal/img/icon/g-f-2.png" alt="">
                            <a href="#"><h4>High Secured Server</h4></a>
                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="great_feature_item">
                            <img src="principal/img/icon/g-f-3.png" alt="">
                            <a href="#"><h4>Professional Domain</h4></a>
                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="great_feature_item">
                            <img src="principal/img/icon/g-f-4.png" alt="">
                            <a href="#"><h4>SSD Load Power</h4></a>
                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="great_feature_item">
                            <img src="principal/img/icon/g-f-5.png" alt="">
                            <a href="#"><h4>Woo & E-Commerce Hosting</h4></a>
                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="great_feature_item">
                            <img src="principal/img/icon/g-f-6.png" alt="">
                            <a href="#"><h4>99.9%  Uptime</h4></a>
                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Great Feature Area =================-->

        <!--================River Video Area =================-->
        <section class="river_video_area">
            <div class="container">
                <div class="river_video_inner">
                    <h4>Review Our Thinking </h4>
                    <h5>Much Better Experience With Video</h5>
                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=WVPRkcczXCY"><i class="fa fa-play"></i></a>
                </div>
            </div>
        </section>
        <!--================End River Video Area =================-->

        <!--================Server Price Area =================-->
        <div class="server_price_area" id="price">
            <div class="container">
                <div class="great_title">
                    <h2>Compare Our Pricing</h2>
                    <p>It is pleasure, but because those who do not know how to pursue pleasure <br /> rationally encounter consequences painful.</p>
                </div>
                <div class="row service_price_inner">
                    <div class="col-md-4 col-xs-6">
                        <div class="server_price_item">
                            <div class="pirce_head">
                                <img src="principal/img/icon/s-price-1.png" alt="">
                                <h4>Economy Plan</h4>
                            </div>
                            <div class="pirce_body">
                                <h5>$30.99 Only</h5>
                                <ul>
                                    <li><a href="#">Websites <span>1 For Persional</span></a></li>
                                    <li><a href="#">Disk Space <span>100 GB</span></a></li>
                                    <li><a href="#">SSD Space <span>10 GB</span></a></li>
                                    <li><a href="#">Monthly Bandwith <span>Unlimited</span></a></li>
                                    <li><a href="#">FTP Server <span>50 Extra</span></a></li>
                                    <li><a href="#"><del>MySQL Databases Yes</del></a></li>
                                    <li><a href="#"><del>Database Backup/ Restore</del></a></li>
                                    <li><a href="#"><del>Shareing Data Limited</del></a></li>
                                    <li><a href="#"><del>DNS Management Yes</del></a></li>
                                </ul>
                                <div class="pirce_footer">
                                    <a href="#">Get Start</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="server_price_item prime">
                            <div class="pirce_head">
                                <img src="principal/img/icon/s-price-2.png" alt="">
                                <h4>Prime Plan</h4>
                                <h6>Recommended</h6>
                            </div>
                            <div class="pirce_body">
                                <h5>$70.99 Only</h5>
                                <ul>
                                    <li><a href="#">Websites <span>1 For Persional</span></a></li>
                                    <li><a href="#">Disk Space <span>200 GB</span></a></li>
                                    <li><a href="#">SSD Space <span>15 GB</span></a></li>
                                    <li><a href="#">Monthly Bandwith <span>Unlimited</span></a></li>
                                    <li><a href="#">FTP Server <span>80 Extra</span></a></li>
                                    <li><a href="#">MySQL Databases Yes</a></li>
                                    <li><a href="#">Database Backup/ Restore</a></li>
                                    <li><a href="#"><del>Shareing Data Limited</del></a></li>
                                    <li><a href="#"><del>DNS Management Yes</del></a></li>
                                </ul>
                                <div class="pirce_footer">
                                    <a href="#">Get Start</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="server_price_item ultimate">
                            <div class="pirce_head">
                                <img src="principal/img/icon/s-price-3.png" alt="">
                                <h4>Ultimate Plan</h4>
                            </div>
                            <div class="pirce_body">
                                <h5>$90.99 Only</h5>
                                <ul>
                                    <li><a href="#">Websites <span>1 For Persional</span></a></li>
                                    <li><a href="#">Disk Space <span>250 GB</span></a></li>
                                    <li><a href="#">SSD Space <span>20 GB</span></a></li>
                                    <li><a href="#">Monthly Bandwith <span>Unlimited</span></a></li>
                                    <li><a href="#">FTP Server <span>90 Extra</span></a></li>
                                    <li><a href="#">MySQL Databases Yes</a></li>
                                    <li><a href="#">Database Backup/ Restore</a></li>
                                    <li><a href="#">Shareing Data Limited</a></li>
                                    <li><a href="#">DNS Management Yes</a></li>
                                </ul>
                                <div class="pirce_footer">
                                    <a href="#">Get Start</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Server Price Area =================-->

        <!--================Popular Service Area =================-->
        <section class="popular_service_area" id="service">
            <div class="container">
                <div class="row popular_service_inner">
                    <div class="col-md-6">
                        <div class="popular_s_img">
                            <img src="principal/img/service/popular-s-hos.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="popular_s_text">
                            <div class="server_title">
                                <h2>Incredible Hosting Service</h2>
                                <p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
                                <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                            </div>
                            <a href="#">Read More</a>
                            <h5>$59.90 <span>/yearly</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Popular Service Area =================-->

        <!--================Start Up Area =================-->
        <section class="start_up_area">
            <div class="container">
                <div class="start_up_inner">
                    <img src="principal/img/start-up.png" alt="">
                    <a href="#">Start Up Now</a>
                </div>
            </div>
        </section>
        <!--================End Start Up Area =================-->

        <!--================Read Latest News Area =================-->
        <section class="read_latest_news" id="blog">
            <div class="container">
                <div class="great_title">
                    <h2>Read Our Latest News</h2>
                    <p>It is pleasure, but because those who do not know how to pursue <br /> pleasure rationally encounter consequences painful..</p>
                </div>
                <div class="row r_latest_news_inner">
                    <div class="col-md-4 col-xs-6">
                        <div class="r_l_news_item">
                            <a class="r_news_img" href="#">
                                <img src="img/blog/r-l-news/r-l-news-1.jpg" alt="">
                            </a>
                            <div class="r_news_text">
                                <div class="r_date">
                                    <div class="pull-left">
                                        <h6>12 Jun, 2017  |  by <span>Smith</span> </h6>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="news_text_inner">
                                    <p>the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure.</p>
                                    <a class="r_news_more" href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="r_l_news_item">
                            <a class="r_news_img" href="#">
                                <img src="principal/img/blog/r-l-news/r-l-news-2.jpg" alt="">
                            </a>
                            <div class="r_news_text">
                                <div class="r_date">
                                    <div class="pull-left">
                                        <h6>12 Jun, 2017  |  by <span>Smith</span> </h6>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="news_text_inner">
                                    <p>the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure.</p>
                                    <a class="r_news_more" href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="r_l_news_item">
                            <a class="r_news_img" href="#">
                                <img src="img/blog/r-l-news/r-l-news-3.jpg" alt="">
                            </a>
                            <div class="r_news_text">
                                <div class="r_date">
                                    <div class="pull-left">
                                        <h6>12 Jun, 2017  |  by <span>Smith</span> </h6>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="news_text_inner">
                                    <p>the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure.</p>
                                    <a class="r_news_more" href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Read Latest News Area =================-->

        <!--================Touch Contact Form Area =================-->
        <section class="touch_five_contact_area" id="contact">
            <div class="container">
                <div class="great_title">
                    <h2>Get In Touch</h2>
                    <p>It is pleasure, but because those who do not know how to pursue pleasure  <br />rationally encounter consequences painful..</p>
                </div>
                <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name*">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email*">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject*">
                    </div>
                    <div class="form-group col-md-12">
                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message*"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" value="submit your quote" class="btn send_btn form-control">Send Message</button>
                     </div>
                </form>
            </div>
        </section>
        <!--================End Touch Contact Form Area =================-->

        <!--================Time Newslater Area =================-->

        <section class="time_newsletter">
            <div class="hosting_search_area">
                <div class="container">
                    <div class="hostinge_s_inner">
                        <h5>Get Our Newsletter & Save Your Most Of Time</h5>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Type your email address..">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Subscribe</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Time Newslater Area =================-->

        <!--================Footer Area =================-->
        <footer class="footer_five_area">
            <div class="footer_five_widget">
                <div class="container">
                    <div class="row footer_five_w_inner">
                        <div class="col-md-5 col-xs-12">
                            <aside class="f_f_right f_ab_widget">
                                <img src="principal/img/footer-five-logo.png" alt="">
                                <h5>Drimo Dromain & Hosting Landing Page</h5>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                <a href="#"><h6>Learn About  Drimo Theme <i class="fa fa-angle-right" aria-hidden="true"></i></h6></a>
                            </aside>
                        </div>
                        <div class="col-md-2 col-md-offset-1 col-sm-6">
                            <aside class="f_f_right f_link_widget">
                                <div class="f_f_title">
                                    <h3>Refer Link</h3>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Home</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>About</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Blogs</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Pricing</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>News</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Apps page</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-md-offset-1 col-sm-6">
                            <aside class="f_f_right f_contact_widget">
                                <div class="f_f_title">
                                    <h3>Contact with us</h3>
                                </div>
                                <h5>Address</h5>
                                <ul>
                                    <li><a href="#">Phone :  +00 901 980680</a></li>
                                    <li><a href="#">Mail :  yourmail_09@hotmail.com</a></li>
                                </ul>
                                <a class="live_contact" href="#">Live Contact</a>
                            </aside>
                        </div>
                    </div>
                    <div class="f_five_copy_right_text">
                        <p class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer_five_social">
                <div class="container">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->









        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="principal/js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="principal/js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="principal/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="principal/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="principal/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="principal/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="principal/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="principal/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <!-- Extra Plugin -->
        <script src="principal/vendors/parallax/jquery.parallax-scroll.js"></script>
        <script src="principal/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="principal/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="principal/vendors/counterup/waypoints.min.js"></script>
        <script src="principal/vendors/counterup/jquery.counterup.min.js"></script>
        <script src="principal/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="principal/vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="principal/vendors/flexslider/flex-slider.js"></script>
        <script src="principal/vendors/flexslider/mixitup.js"></script>
        <script src="principal/vendors/swiper/js/swiper.min.js"></script>
        <script src="principal/vendors/flipster-slider/jquery.flipster.min.js"></script>
        <script src="principal/vendors/nice-selector/jquery.nice-select.min.js"></script>

        <script src="principal/js/theme.js"></script>
    </body>
</html>
