<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
    <!-- bootstrap -->
    <script src="./bootstrap5/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./bootstrap5/bootstrap.min.css">
    <!-- bootstrap end -->
    <!-- owl carousel -->
    <link rel="stylesheet" href="./owl carousel/owl.carousel.min.css"/>
    <link rel="stylesheet" href="./owl carousel/owl.theme.default.min.css"/>
    <!-- owl carousel ends -->
    <script src="./scripts/jquery.js"></script>
    <link rel="stylesheet" href="./assets/styles/desktop/index.css" media="(min-width: 900px)">
    <link rel="stylesheet" href="./assets/styles/mobile/index.css" media="(max-width: 899px)">
    <title>Hackify-Home</title>
</head>
<body>
    <!-- HEADER START -->
    <div class="loader">
        <img src="./assets/images/logo.png" alt="" height="100px">
    </div>
    <?php include_once "./includes/header.php"; ?>
    <!-- HEADER END -->
    <!-- AD BANNER -->
    <div class="ad-banner carousel slide" id="carouselExampleControls" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="slide-img" src="./assets/images/5aead05a857c8a83287800c7_singapore-cybersecurity-awarnesss.png" alt="" width="100%" height="100%">
                <div class="text-cont">
                    <div class="banner">
                        <div>
                            <h1>DO YOU DREAM TO BECOME A CYBERSECURITY EXPERT?<BR>TRY HACKIFY.</h1>
                            <p>Get trained and excel with Hackify.</p>
                            <div><a href="./training.php"><button class="but">Trainings</button></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                 <img class="slide-img" src="./assets/images/hooded-computer-hacker-stealing-information-with-laptop.jpg" alt="" width="100%" height="100%">
                <div class="text-cont">
                    <div class="banner">
                        <div>
                            <h1>PROTECTION IS NOT FOR THE JUST.<br>GO WITH HACKIFY.</h1>
                            <p>Let's provide you with quality security in the cyber space.</p>
                            <div><a href="./pentest.php"><button class="but">PenTesting</button></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                 <img class="slide-img" src="./assets/images/millennial-asia-businessmen-businesswomen-meeting-brainstorming-ideas-about-new-paperwork-project-colleagues-working-together-planning-success-strategy-enjoy-teamwork-small-modern-night-office.jpg" alt="" width="100%" height="100%">
                <div class="text-cont">
                    <div class="banner">
                        <div>
                            <h1>WE DON'T JUST TRY,<br>BUT WE SECURE IT FOR SURE.</h1>
                            <p>Hackify is your best plug</p>
                            <div><a href="./about.php"><button class="but">Why Hackify</button></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                  <img class="slide-img" src="./assets/images/silhouette-confident-businesspeople.jpg" alt="" width="100%" height="100%" style="object-fit: cover;">
                <div class="text-cont">
                    <div class="banner">
                        <div>
                            <h1>GROW YOUR CAREER WITH THE BODYGUARDS OF THE CYBERSPACE</h1>
                            <p>Become part of Hackify.</p>
                            <div><a href="./join.php"><button class="but">Join Hackify</button></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- AD BANNER END -->
    <div class="train-main">
        <div class="training-scheme">
            <div class="title-cont">
                <div>
                    <p>HACKIFY TRAININGS</p>
                </div>
            </div>
            <div class="holder">
                <div class="trainer">
                    <div class="train">
                        <div class="trainee-schemes">
                            <p class="trainee-sch-p">INDIVIDUALS</p>
                            <div class="img-holder">
                                <img src="./assets/images/web-development.png" alt="" height="80px" width="auto">
                            </div>
                            <div>
                                <p>Our well-tailored cybersecurity trainings are all you need to start-off and become a high-earning cyber security expert.<br>
                                </p>
                            </div>
                            <div class="button-holder"><a href="./training.php#contact-sec"><button>Register</button></a></div>
                        </div>
                    </div>
                    <div class="train">
                        <div class="trainee-schemes">
                            <p class="trainee-sch-p">ORGANISATIONS</p>
                            <div class="img-holder">
                                <img src="./assets/images/Mask Group 5.png" alt="" height="80px" width="auto">
                            </div>
                            <div>
                                <p>We offer organizations professional trainings that will equip your team with the knowledge and tools that guarantees a safer cyberspace that ensures business growth and profitability. 
                                </p>
                            </div>
                            <div class="button-holder"><a href="./training.php#contact-sec"><button>Register</button></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pentest-main">
        <div class="pen-title-cont">
            <div>
                <h2>HACKIFY PENTEST SERVICES</h2>
            </div>
        </div>
        <div class="pentest-cont">
            <div class="pen-holder">
                <div class="pen-in">
                    <div class="pen-cover">
                        <div>
                            <h2>PENTEST FOR ORGANISATIONS</h2>
                            <P>Assumption is a      killer! Your business growth can be hampered by cyber-attacks. Hackify offers organizations and businesses standard penetration testing service for their products.
                            </P>
                            <div>
                                <a href="./pentest.php#contact-sec"><button>Get in Touch</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pen-in-2">
                    <div class="pen-cover">
                        <div>
                            <h2>PENTEST FOR DEVELOPERS</h2>
                            <P>Your code remains your code.<br>
                            Work with Hackify to thoroughly test your codes, cover up loopholes and make your product most suitable for the market.
                            </P>
                            <div>
                                <a href="./pentest.php#contact-sec"><button>Get in Touch</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="partner-cont">
        <div class="partner-cont-div">
            <h1>OUR PARTNERS</h1>
            <p>Here are some of or top notch partners who came together to support this platform.</p>
        </div>
        <div class="partner-holder"> 
            <div class="owl-carousel owl-theme">
                <div class="partner"><img src="./assets/images/13698120-0da9-404f-b5c5-df8abd087aa1.png" alt="" height="90%" style="object-fit: contain;"></div>
                <div class="partner"><img src="./assets/images/eko.png" alt="" height="90%" style="object-fit: contain;"></div>
                <div class="partner" style="padding: 40px;"><img src="./assets/images/ogabike_logo.png" alt="" width="90%" style="object-fit: contain;"></div>
                <!-- <div class="partner"><img src="./assets/images/favicon.png.png" alt="" height="90%" style="object-fit: contain;"></div> -->
                <div class="partner" style="padding: 40px;"><img src="./assets/images/logo@3x.png" alt="" height="90%" style="object-fit: contain;"></div>
            </div>
        </div>
    </div>
    <!-- <div class="display">
        <img src="./assets/images/Path 153.png" alt="" width="100%" height="55%">
        <div class="display-cover">
            <div>
                <div class="display-cont">
                    <h2>IF YOU NEED A PENETRATION TEST, WE WANT TO TAlK WITH YOU.<br>THIS IS WHAT YOU CAN EXPECT:</h2>
                </div>
                <div class="display-video-cont">
                    <div>
                        <img src="./assets/images/getty_933383882_2000133420009280345_410292.png" alt="" width="100%" height="100%" style="object-fit: cover;">
                        <div data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <img src="./assets/images/play-button (1).png" alt="" width="20%" height="auto">
                        </div>
                    </div>
                </div>
                <div class="display-paragraph-cont">
                    <p>A lot of entrepreneur trust our platform to help them deliver value to their students and clients.</p>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Modal -->
    <!-- <div style="z-index: 3000;" class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-fullscreen-sm-down">
            <div style="z-index: 3000;" class="modal-content">
                <div class="modal-header">
                    <button  type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <video class="video" width="100%" height="100%" controls>
                        <source class="video" src="./assets/videos/50a76971126743329c5b7ad44e99c7f8.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div> -->
    <!--modal end -->
    <!-- footer -->
    <?php include_once "./includes/footer.php"; ?>
    <!-- footer end -->
    <script src="./scripts/index.js"></script>
    <script src="./owl carousel/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:false,
        dots:false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
    </script>
</body>
</html>