
<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MTK | About</title>
    <?php include('includes/links.php');?>
</head>

<body>
    <section>
    <?php include('includes/header.php');?>
    </section>
    <section class="team-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Team </h2>
                <p class="text-center"> We're glad to be able to come up with a platform that best suites the needs of our clients. This is a game changer. Lets have fun! </p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="assets/img/11.jpg">
                    <h3 class="name">Ian Njoroge</h3>
                    <p class="title">Co Founder </p>
                    <p class="description"> I'm delighted to build a game changing platform that will be of great impact and help in the society. </p>
                    <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
                <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="assets/img/22.jpg">
                    <h3 class="name">Harun Muriiki</h3>
                    <p class="title">Co Founder</p>
                    <p class="description">It's been such an honour and experience to work on this platform. It's has helped me think out of the box to come up with ideas that will fix the hiccups that has been there before.  </p>
                    <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
                <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="assets/img/33.jpg">
                    <h3 class="name">Reuben Khaemba</h3>
                    <p class="title">Co Founder</p>
                    <p class="description">Team work has always been my all time favourite, working together with great minds is just amazing. </p>
                    <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="map-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Location </h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
        </div><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDaEw6o8OhJvRQnTF3gI_tibMejtfasOlY&amp;q=Paris%2C+France&amp;zoom=15" width="100%" height="450"></iframe>
    </section>
    <section class="testimonials-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Testimonials </h2>
                <p class="text-center">Our customers love us! Read what they have to say below. We take pride in our seamless, flawless, and state-of-the-art service delivery.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">After a terrible experience booking a holiday package for myself, MTK safari came through for me and I had an amazing time, it was such refreshing and enjoyable to get an amazing time off. Many thanks to MTK fraternity.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/10.jpg">
                        <h5 class="name">Bennie Lumumba</h5>
                        <p class="title">CEO of Goodwill Inc.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">I've never had a holiday vacation so flawless and exquisite like this one from MTK, you guys are awesome, looking forward to many more vacations together.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/30.jpg">
                        <h5 class="name">Cheryl Grace</h5>
                        <p class="title">Founder of Grace Beauty & Co.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">This is the best Holiday I have ever had in my entire lifetime courtesy of MTK tours. I just fell in love with all the activities and packages you offered. Great work Team MTk.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/20.jpg">
                        <h5 class="name">Mary Wanjiru</h5>
                        <p class="title">Owner of Lifestyle Ltd.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <?php include('includes/footer.php');?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
    <script src="assets/js/responsive-blog-card-slider-1.js"></script>
    <script src="assets/js/responsive-blog-card-slider.js"></script>
    <script src="assets/js/Swipe-Slider-9.js"></script>

    <?php include('includes/signup.php');?>			
    <?php include('includes/signin.php');?>
</body>

</html>