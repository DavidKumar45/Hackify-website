<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/styles/desktop/training.css" media="(min-width: 900px)">
    <link rel="stylesheet" href="./assets/styles/mobile/training.css" media="(max-width: 899px)">
    <!-- bootstrap cdn -->
    <script src="./bootstrap5/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./bootstrap5/bootstrap.min.css">
    <!-- bootstrap end -->
    <title>Hackify-Trainings</title>
</head>
<body>
<div class="loader">
        <img src="./assets/images/logo.png" alt="" height="100px">
    </div>
    <?php include_once "./includes/header.php"; ?>
    <!-- MAIL TRAIN ORG SENT -->
    <div class="reg-cover1">
        <div>
            <img src="./assets/images/tick.png" alt="" width="110px">
            <h2>MAIL SENT SUCCESSFULLY</h2>
            <h3>Please proceed to payment.</h3>
        </div>
    </div>
    <!-- MAIL TRAIN DEV SENT -->
    <div class="reg-cover2">
        <div>
            <img src="./assets/images/tick.png" alt="" width="110px">
            <h2>MAIL SENT SUCCESSFULLY</h2>
            <h3>Please proceed to payment.</h3>
        </div>
    </div>
    <div class="training-org-cont">
        <div class="org-space">
            <div class="org-space1">
                <h2>TRAINING FOR ORGANISATION</h2>
                <P>We offer organizations like yours professional trainings that will equip your team with the knowledge and tools that guarantees a safer cyberspace that ensures business growth and profitability. With our customized and value-driven trainings Hackify will satisfy your organization’s desire to be properly equipped to protect your digital assets and operate in the cyber space without falling prey to cyber-attacks.</P>
                <a href="#contact-sec"><button class="org">Apply now</button></a>
            </div>
            <div class="org-space2">
                <img src="./assets/images/pexels-christina-morillo-1181395.png" alt="" width="100%" height="100%" style="object-fit: cover; border-radius: 30px;">
            </div>
        </div>
    </div>
    <div class="training-ind-cont">
        <div class="training-cover">
            <div class="org-space3">
                <div class="ind-pics">
                    <img src="./assets/images/pexels-olia-danilevich-4974915 (1).png" alt="" width="100%" height="100%" style="object-fit: cover;">
                </div>
                <div class="ind-pics2">
                    <div>
                        <h2>TRAINING FOR INDIVIDUAL</h2>
                        <P>Our well-tailored cybersecurity trainings are all you need to start-off and become a high-earning cyber security expert. Our trainees enjoy practical-based trainings, one-on-one mentorship sessions and business development trainings to help succeed in them succeed. <a style="color: #d60000;" href="./assets/documentations/training-review.pdf" download="training-review.pdf">View training schemes</a></P>
                        <a href="#contact-sec"><button class="dev">Apply now</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="individual-detail-cont">
        <div class="ind-title-cont">
            <div>
                <h2>HACKIFY INDIVIDUAL TRAINING</h2>
            </div>
        </div>
    <div class="individual-det">
        <div class="individual-det-div">
            <div style="display:flex; justify-content:center;">
                <img src="./assets/images/calendar-interface-symbol-tool.png" alt="" height="70px" width="auto">
            </div>
            <h2>CALENDAR</h2>
        </div>
        <div class="individual-det-div">
                <div style="display:flex; justify-content:center;">
                <img src="./assets/images/timer.png" alt="" height="70px" width="auto">
            </div>
            <h2>COUNTDOWN</h2>
            <p class="warning time">hello</p>
        </div>
    </div>
    </div>
    <div id="contact-sec" class="contact-sec">
        <div class="contact-cont">
            <h2>APPLY NOW</h2>
            <div class="form-type">
                <button class="org-button">Organisation</button>
                <button class="dev-button">Individual</button>
            </div>
            <form class="org-form needs-validation" novalidate>
                <input id="validationCustom01"  required class="form-control full" type="text" placeholder="Company's name">
                <div class="two-in">
                    <input class="half-in form-control"  id="validationCustom02" required type="Email" placeholder="Company's Email">
                    <input class="half-in2 form-control" id="validationCustom03" required type="tel" placeholder="Company's Phone">
                </div>
                <select class="full form-select" id="validationCustom04" required>
                    <option selected disabled value="">Number of Participants</option>
                    <option>5</option>
                    <option>10</option>
                    <option>15</option>
                    <option>20 - above</option>
                </select>
                <button type="submit" class="contact-btn">Apply</button>
            </form>
            <form class="dev-form needs-validation" novalidate>
                <input id="validationCustom05"  required class="form-control full" type="text" placeholder="Name">
                <div class="two-in">
                    <input class="half-in form-control"  id="validationCustom06" required type="Email" placeholder="Email">
                    <input class="half-in2 form-control" id="validationCustom07" required type="tel" placeholder="Phone">
                </div>
                <select class="full form-select" id="validationCustom08" required>
                    <option selected disabled value="">Packages</option>
                    <option>Basic</option>
                    <option>Intermediate</option>
                    <option>Advance</option>
                </select>
                <button type="submit" class="contact-btn2">Apply</button>
            </form>
        </div>
    </div>
<?php include_once "./includes/footer.php"; ?>

    <script src="./scripts/jquery.js"></script>
    <script src="./scripts/training.js"></script>
</body>
</html>