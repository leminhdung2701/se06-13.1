<?php

/* @var $this yii\web\View */

$this->title = 'SE06-13.1';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Stylish Portfolio - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="login/assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Simple line icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css"
        rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="login/css/styles.css" rel="stylesheet" />

    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
</head>

<body id="page-top" >
    <!-- Navigation-->
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="#page-top">Start Bootstrap</a></li>
            <li class="sidebar-nav-item"><a href="#page-top">Upload</a></li>
            <li class="sidebar-nav-item"><a href="#about">About</a></li>
            <li class="sidebar-nav-item"><a href="#services">Services</a></li>
            <li class="sidebar-nav-item"><a href="#portfolio">Portfolio</a></li>
            <li class="sidebar-nav-item"><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <!-- Header-->
    <header class="masthead d-flex align-items-start ">
        <div class="container px-4 px-lg-5 text-start">
            <h1 class="mb-1">The leading platform for 3D and AR on the web </h1>
            <h3 class="mb-5"><em>Manage your 3D assets.Distribute 3D and AR experiences.</em></h3>
            <a class="btn btn-primary btn-xl" href="#about">Join for free</a>
            <model-viewer src="assets/Horse.glb" alt="A 3D model of an astronaut"
            ar ar-modes="webxr scene-viewer quick-look" environment-image="neutral" auto-rotate  style=' 
            margin-left:450px;margin-bottom:100px;
            height:700px; width:700px'>
        </model-viewer>
        </div>
    </header>
    <!-- cop -->
    <div class="home-features container px-4 px-lg-5 ">
            <div class="home-features__item ">
                <img width="220" height="120" loading="lazy" class="home-features__image" src="https://static.sketchfab.com/static/builds/web/dist/static/assets/images/pages/home/b23570d4e6681f42b143b822fccbb1a6-v2.svg" alt="Person looking at 3D Models from other creators">
                <h2 class="home-features__title text-start position-relative">
                    Join millions of 3D creators and showcase your work
                </h2>
                <a class="home-features__button fw-bold btn btn-primary btn-large" data-action="open-signup">
                    JOIN US
                </a>
            </div>

            <div class="home-features__item" style='margin-left:300px'>
                <img width="220" height="120" loading="lazy" class="home-features__image" src="https://static.sketchfab.com/static/builds/web/dist/static/assets/images/pages/home/ffcab9cbf04c825a3df3db993aefbb77-v2.svg" alt="The sketchfab store for 3D Models">
                <h2 class="home-features__title">
                    Buy &amp; sell 3D models on the Store
                </h2>
                <a class="home-features__button fw-bold btn btn-danger btn-large" href="/store?ref=home_page">
                    Buy 3D models
                </a>
            </div>

                <div class="home-features__item" style='margin-left:700px'>
                <img width="220" height="120" loading="lazy" class="home-features__image" src="https://static.sketchfab.com/static/builds/web/dist/static/assets/images/pages/home/58c377b3c70745be4a6c8391011ea77a-v2.svg" alt="A 3D Model on another website">
                <h2 class="home-features__title">
                    Share &amp; embed 3D models anywhere online
                </h2>
                <a class="home-features__button fw-bold btn btn-primary btn-large" href="/enterprise?ref=home_page">
                    SHARE YOUR MODEL
                </a>
            </div>
        </div>
    <!-- About-->
    <!-- <section class="content-section bg-light" id="about">
        <div class="container px-4 px-lg-5 text-center">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-10">
                    <h2>Stylish Portfolio is the perfect theme for your next project!</h2>
                    <p class="lead mb-5">
                        This theme features a flexible, UX friendly sidebar menu and stock photos from our friends at
                        <a href="https://unsplash.com/">Unsplash</a>
                        !
                    </p>
                    <a class="btn btn-dark btn-xl" href="#services">What We Offer</a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Services-->
    <section class="content-section bg-primary text-white text-center" id="services">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading">
                <h3 class="text-secondary mb-0 ">Services</h3>
                <h2 class="mb-5">Share and embed 3D models anywhere online</h2>
            </div>
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="fas fa-code"></i></span>
                    <h4><strong>Responsive</strong></h4>
                    <p class="text-faded mb-0">Embeddable everywhere, for eCommerce, advertising and social media.</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="fas fa-cogs"></i></span>
                    <h4><strong>Redesigned</strong></h4>
                    <p class="text-faded mb-0">Interactive and configurable, VR and AR ready.</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="fas fa-user-friends"></i></span>
                    <h4><strong>Favorited</strong></h4>
                    <p class="text-faded mb-0">
                        Millions of users
                        <i class="fas fa-heart"></i>
                        
                    </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="fas fa-laptop"></i></span>
                    <h4><strong>Multi-device</strong></h4>
                    <p class="text-faded mb-0">Works with all operating systems, browsers and devices.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Callout-->
    <!-- <section class="callout">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mx-auto mb-5">
                Welcome to
                <em>your</em>
                next website!
            </h2>
            <a class="btn btn-primary btn-xl" href="https://startbootstrap.com/theme/stylish-portfolio/">Download
                Now!</a>
        </div>
    </section> -->
    <!-- Portfolio-->
    <section class="content-section" id="portfolio">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading text-center">
                <h3 class="text-secondary mb-0">Portfolio</h3>
                <h2 class="mb-5">Marvellous Pictures</h2>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Wolf</div>
                                <p class="mb-0">Corlorful wolf</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="https://itcafe.vn/wp-content/uploads/2021/01/hinh-nen-3d-12.jpg" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Lake</div>
                                <p class="mb-0">A green beautiful lake</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="https://topshare.vn/wp-content/uploads/2020/06/anh-dep-3d-thien-nhien-giot-nuoc.jpg" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Night</div>
                                <p class="mb-0">...</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="https://topshare.vn/wp-content/uploads/2020/06/anh-dep-3d-thien-nhien-hoa-khoe-sac.jpg" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Waterfall</div>
                                <p class="mb-0">A big waterfall</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="https://topshare.vn/wp-content/uploads/2020/06/anh-dep-3d-thien-nhien-rung-la-vang.jpg" alt="..." />
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action-->
    <!-- <section class="content-section bg-primary text-white">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-4">The buttons below are impossible to resist...</h2>
            <a class="btn btn-xl btn-light me-4" href="#!">Click Me!</a>
            <a class="btn btn-xl btn-dark" href="#!">Look at Me!</a>
        </div>
    </section> -->
    <!-- Map-->
    <section class="content-section bg-primary text-white text-center" id="map">
    <div class="container ">
    <div class="row align-items-start">
            
    
            <h5 class=" col"  >ENTERPRISE</h5>
            <h5 class=" col"  >ECOSYSTEM</h5>
            
            <h5 class=" col"  >ABOUT</h5>
        </div>
        <div class="row align-items-start">
            
    
            <div class="col">
            3D Viewer
            </div>
            <div class="col">
            Augmented Reality
            </div>
            
            <div class="col">
            
            Explore
            </div>
        </div>
        <div class="row align-items-center">
            
            <div class="col m-2">
            3D Advertising
            </div>
            <div class="col m-2">
            VR
            </div>
            <div class="col m-2">
            Category
            </div>
        </div>
        <div class="row align-items-end">
            
            <div class="col">
            Customer
            </div>
            <div class="col">
            Mobile
            </div>
            <div class="col">
            Feature
            </div>
        </div>
    </div>
</section>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container px-4 px-lg-5">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="#!"><i
                            class="icon-social-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="#!"><i
                            class="icon-social-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="#!"><i class="icon-social-github"></i></a>
                </li>
            </ul>
            <p class="text-muted small mb-0">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="login/js/scripts.js"></script>
</body>

</html>