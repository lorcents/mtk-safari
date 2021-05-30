<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>MTK Tour and Travel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<?php include('includes/links.php');?>
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>





<section id="home">
       

<?php include('includes/header.php');?>
        <!-- Paradise Slider -->
        <div id="fw_al_007" class="carousel ps_rotate_scale_c ps_indicators_l ps_control_rotate_f swipe_x ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#fw_al_007" data-slide-to="0" class="active"></li>
                <li data-target="#fw_al_007" data-slide-to="1"></li>
                <li data-target="#fw_al_007" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- First Slide -->
                <div class="carousel-item active">

                    <!-- Slide Background -->
                    <img src="assets/img/mombasa.jpg" alt="fw_al_007_01">

                    <!-- Slide Text Layer -->
                    <div class="fw_al_007_slide">
                        <h3 data-animation="animated flipInX">Hello Coast</h3>
                        <h1 data-animation="animated flipInX"><span>Diani,</span> Mombasa</h1>
                        <p data-animation="animated flipInX">From 10th to 15th April,2021</p>
                        <a href="package-list.php" data-animation="animated flipInX">Book Now!</a>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Second Slide -->
                <div class="carousel-item">

                    <!-- Slide Background -->
                    <img src="assets/img/Lake-Nakuru-National-Park.jpg" alt="fw_al_007_02">

                    <!-- Slide Text Layer -->
                    <div class="fw_al_007_slide">
                        <h3 data-animation="animated flipInX">Flamingos, here we come</h3>
                        <h1 data-animation="animated flipInX"><span>Nakuru Trip,</span> Nakuru National Park</h1>
                        <p data-animation="animated flipInX">27th to 30th July,2021</p>
                        <a href="package-list.php" data-animation="animated flipInX">Book Now!</a>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Third Slide -->
                <div class="carousel-item">

                    <!-- Slide Background -->
                    <img src="assets/img/nairobi%20national%20park.jpg" alt="fw_al_007_03">

                    <!-- Slide Text Layer -->
                    <div class="fw_al_007_slide">
                        <h3 data-animation="animated flipInX">A Park in the City</h3>
                        <h1 data-animation="animated flipInX"><span>Touring Nairobi,</span> Park & Ophanage </h1>
                        <p data-animation="animated flipInX">5th to 7th August,2021</p>
                        <a href="package-list.php" data-animation="animated flipInX">Book Now</a>
                    </div>
                </div>
                <!-- End of Slide -->

            </div>
            <!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="carousel-control-prev" href="#fw_al_007" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
            </a>
            <!-- Right Control -->
            <a class="carousel-control-next" href="#fw_al_007" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
            </a>





            <!-- End -->
    </section>





<!------->
<div class="container">
	<div class="holiday">
	



	
	<h3>Package List</h3>

					
<?php $sql = "SELECT * from tbltourpackages order by rand() limit 4";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Package Name: <?php echo htmlentities($result->PackageName);?></h4>
					<h6>Package Type : <?php echo htmlentities($result->PackageType);?></h6>
					<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h5>USD <?php echo htmlentities($result->PackagePrice);?></h5>
					<a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
				</div>
				<div class="clearfix"></div>
			</div>

<?php }} ?>
			
		
<div><a href="package-list.php" class="view">View More Packages</a></div>
</div>
			<div class="clearfix"></div>
	</div>




    <div class="features-boxed">
        <div class="container">
            <h1 class="display-4 text-center text-white-50" style="padding-top: 20px;">Why us?</h1>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fas fa-redo-alt icon"></i>
                        <h3 class="name"><br><strong>EFFICIENT AND FRIENDLY SERVICE</strong><br></h3>
                        <p class="description"><br>Our expert team takes pride in their thoughtful approach to planning your holiday. We find out what you think might make it extra special, then sprinkle in our own special little touches ( even a surprise to enjoy while you’re
                            away) to help create your dream holiday.<br></p><a class="learn-more" href="#">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fas fa-recycle icon"></i>
                        <h3 class="name"><br><strong>FLEXIBLE AND HASSLE FREE PLANS</strong><br></h3>
                        <p class="description"><br>We’re here to take the stress out of the holiday planning process. You can be as involved as you want, and you are always in control. Everything is tailored to your exact needs and tastes, and we will keep tweaking and adapting
                            until it feels just right.<br></p><a class="learn-more" href="#">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fas fa-handshake icon"></i>
                        <h3 class="name"><br><strong>PASSIONATE, HONEST EXPERTS</strong><br></h3>
                        <p class="description"><br>After a decade in business and a lifetime of living and travelling in our destinations, we have developed a deep knowledge and formed relationships with the most impressive experts in their fields. We pride ourselves on being
                            able to ask the right questions so that you can trust we get exactly what you’re after.<br><br></p><a class="learn-more" href="#">Learn more »</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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






<!--- routes ---->
<div class="routes">
	<div class="container">
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="glyphicon glyphicon-list-alt"></i></a>
			</div>
			<div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
				<h3>800</h3>
				<p>Enquiries</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left">
			<div class="rou-left">
				<a href="#"><i class="fa fa-user"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>100</h3>
				<p>Regestered users</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="fa fa-ticket"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>700+</h3>
				<p>Booking</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
<?php include('includes/scripts.php');?>			
<!-- //write us -->
</body>
</html>