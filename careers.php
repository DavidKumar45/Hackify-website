<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
    <!-- bootstrap cdn -->
    <script src="./bootstrap5/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./bootstrap5/bootstrap.min.css">
    <!-- bootstrap end -->
    <!-- owl carousel -->
    <link rel="stylesheet" href="./owl carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./owl carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="./assets/styles/desktop/join.css" media="(min-width: 900px)">
    <link rel="stylesheet" href="./assets/styles/mobile/join.css" media="(max-width: 899px)">
    <script src="./scripts/jquery.js"></script>
    <script src="./owl carousel/owl.carousel.min.js"></script>
    <title>Hackify-Join our team</title>
</head>
<body>
    <div class="loader">
        <img src="./assets/images/logo.png" alt="" height="100px">
    </div>
    <?php include_once "./includes/header.php"; ?>
    <div class="reg-cover1">
        <div>
            <img src="./assets/images/tick.png" alt="" width="110px">
            <h2>THANK YOU FOR JOINING HACKIFY.</h2>
            <h3>Please proceed to payment.</h3>
        </div>
    </div>
    <div class="main-cover">
         <img class="slide-img" src="./assets/images/silhouette-confident-businesspeople.jpg" alt="" width="100%" height="100%" style="object-fit: cover;">
        <div class="main">
            <div>
                <h1>WORLD CLASS CYBER-SECURITY SOLUTIONS.</h1>
                <p>Your Digital asset is not safe until it is Hackified.</p>
            </div>
        </div>
    </div>
    <div class="values">
        <h2>OUR VALUES</h2>
        <div class="containing-div">
            <div>
                <img src="./assets/images/review.png" alt="" width="auto" height="100px">
                <h2>CLIENT SATISFACTION</h2>
                <p>At Hackify our top-most priority is to reward our clients for the trust and commitment to us.
                    We do every possible to stick to our brand promise and drive towards a safer cyberspace for everyone.<br>
                    We develop and nourish relationship that make a positive difference in our customers lives.
                    </p>
            </div>
            <div>
                <img src="./assets/images/support.png" alt="" width="auto" height="100px">
                <h2>TEAMWORK</h2>
                <p>At Hackify we are one big family.<br>At Hackify everyone is a star. We maximize everyone’s strengths and expertise to meet the needs of our customers and to help our company win. We push each other to maximize their potentials and excel in the space. Our team members are the greatest asset that we have. At Hackify:
                <ul>
                    <li>We value our team members</li>
                    <li>Encourage their growth process.</li>
                    <li>We reward their performance.</li>
                </ul>
                </p>
            </div>
            <div>
                <img src="./assets/images/security.png" alt="" width="auto" height="100px">
                <h2>INTEGRITY</h2>
                <p>We upload the highest standards of integrity in all our actions. We are committed to our values and we protect our company culture through our commitment to possessing integrity at all levels.<br>Integrity is the defining quality of our team members and our work. We uphold honesty, transparency and high moral standard as a way of life.</p>
            </div>
        </div>
    </div>
    <div class="testimonials-cont owl-carousel owl-theme">
        <div class="testimonial">
            <div class="test-txt">
                <p class="name">Abeng Emy</p>
                <p class="test">"Working in hackify has always been seen fun to me, the working environment, team collaboration, task execution has been designed in a way members work with excitement."</p>
            </div>
        </div>
        <div class="testimonial">
            <div class="test-txt">
                <p class="name">Prince Charles</p>
                <p class="test">"Coming into Hackify realising I needed more because my first project was actually tested for security and lots of vulnerbilities was discovered. So I needed to learn more in other to write more secured code."</p>
            </div>
        </div>
        <div class="testimonial">
            <div class="test-txt">
                <p class="name">Rollins .U</p>
                <p class="test">"At Hackify working becomes easier, despitesthe challenging task, its always fun being around. We play to work, work to grow and grow to earn."</p>
            </div>
        </div>
    </div>
    <div class="gallery">
        <h2>GALLERY</h2>
        <div class="gallery-cont">
            <div class="item1">
                <img src="./assets/images/WhatsApp Image 2021-07-26 at 4.00.47 PM.jpeg" alt="" width="100%" height="230px" style="object-fit: cover;">
            </div>
            <div>
                <img src="./assets/images/DSC_1679.jpg" alt="" width="100%" height="230px" style="object-fit: cover;">
            </div>
            <div>
                <img src="./assets/images/DSC_1682.jpg" alt="" width="100%" height="230px" style="object-fit: cover;">
            </div>
            <div>
                <img src="./assets/images/DSC_1689.jpg" alt="" width="100%" height="230px" style="object-fit: cover;">
            </div>
            <div class="item2">
                <img src="./assets/images/WhatsApp Image 2021-07-26 at 4.00.48 PM (1).jpeg" alt="" width="100%" height="230px" style="object-fit: cover;">
            </div>
        </div>
    </div>
    <div class="contact-sec">
        <div class="contact-cont">
            <h2>JOIN HACKIFY</h2>
            <form class="org-form needs-validation" novalidate>
                <div class="form-type">
                    <p>Please before filling this form review our terms & conditions <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">HERE</a></p>
                </div>
                <div class="two-in">
                    <input id="validationCustom01"  required class="form-control half-in" type="text" placeholder="Name">
                    <input class="half-in2 form-control" id="validationCustom02" required type="email" placeholder="Email">
                </div>
                <div class="two-in">
                    <input class="half-in form-control"  id="validationCustom03" required type="text" placeholder="Address">
                    <input class="half-in2 form-control" id="validationCustom04" required type="tel" placeholder="Phone">
                </div>
                <select class="full form-select" id="validationCustom06" required>
                    <option selected disabled value="">Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
                <select class="full form-select" id="validationCustom05" required>
                    <option selected disabled value="">Select Country</option>
                </select>
                <select class="full form-select" id="validationCustom07" required>
                    <option selected disabled value="">Select Category</option>
                    <option>Social Engineering</option>
                    <option>Web Penetration Testing</option>
                    <option>Networking Analysis</option>
                    <option>Mobile Penetration Testing</option>
                </select>
                <div class="checker">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        I agree to Hackify terms & conditions
                    </label>
                </div>
                <button type="submit" class="contact-btn">Submit</button>
            </form>
        </div>
    </div>
    <?php include_once "./includes/footer.php";?>
    <script src="./scripts/join.js"></script>
</body>
</html>