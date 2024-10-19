<?php 
session_start();
error_reporting(0);
include 'include/config.php';
$uid=$_SESSION['uid'];

if(isset($_POST['submit']))
{ 
$pid=$_POST['pid'];


$sql="INSERT INTO tblbooking (package_id,userid) Values(:pid,:uid)";

$query = $dbh -> prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Package has been booked.');</script>";
echo "<script>window.location.href='booking-history.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Gym Management System</title>
	<meta charset="UTF-8">
	<meta name="description" content="Ahana Yoga HTML Template">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>
	
	

	
	<?php include 'include/header.php';?>
	

	

	                                                                              
	
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>FITNESS WORLD GYM</h2>
				</div>
			</div>
		</div>
	</section>



	
	<section class="pricing-section spad">
		<div class="container">
			<div class="section-title text-center">
				<img src="img/icons/logo-icon.png" alt="">
				<h2>About Us</h2>
			</div>
			<div class="row">

				<div class="col-lg-12 col-sm-6">
			<p>Welcome to FITNESS WORLD GYM, where fitness meets community! At FITNESS WORLD GYM, we're more than just a gym – we're a destination for health, wellness, and camaraderie.

Our mission is simple: to inspire and empower individuals of all fitness levels to achieve their goals and lead healthier, happier lives. From seasoned athletes to beginners taking their first steps on their fitness journey, we provide the tools, support, and guidance needed to succeed.

With state-of-the-art facilities, expert trainers, and a wide range of classes and programs, we're committed to helping you reach your peak performance. But it's not just about the workouts – it's about the connections you make along the way.

Join our vibrant community of like-minded individuals who are passionate about health and fitness. Whether you're looking to lose weight, build muscle, improve endurance, or simply live a more active lifestyle, you'll find everything you need to thrive at FITNESS WORLD GYM.

Come experience the difference at FITNESS WORLD GYM – where every workout is a step towards a stronger, fitter you. Together, let's make fitness fun, challenging, and rewarding!



Mission Statement:

Begin with a concise statement about the gym's mission and purpose. For example: "At FITNESS WORLD GYM, our mission is to empower individuals to lead healthier, happier lives through fitness and wellness."
Facilities Overview:

Highlight the key features of the gym facilities, such as modern equipment, spacious workout areas, dedicated studios for classes like yoga or spinning, locker rooms, showers, and any additional amenities.
Trainer Expertise:

Emphasize the qualifications and expertise of the gym's trainers. Mention certifications, specializations, and their dedication to helping members achieve their fitness goals.
Community Focus:

Describe the supportive community environment fostered within the gym. Highlight events, group workouts, and initiatives that bring members together and create a sense of belonging.
Personalized Approach:

Discuss the gym's commitment to personalized fitness solutions. Mention individualized training programs, tailored nutritional guidance, and personalized attention from trainers to meet each member's unique needs.
Variety of Offerings:

Showcase the diverse range of fitness classes, programs, and services available at the gym. Mention options like strength training, cardio workouts, group classes, and specialty programs for different fitness levels and interests.
Commitment to Excellence:

Express the gym's dedication to excellence in all aspects, from customer service to facility maintenance. Highlight any awards, accreditations, or industry recognitions that demonstrate the gym's commitment to quality.
Call to Action:

Encourage visitors to join the gym and become part of the fitness community. Provide a clear call-to-action, such as inviting them to sign up for a membership, schedule a tour, or try a free trial class.






</p>
				</div>
			</div>
		</div>
	</section>
	

	
	<?php include 'include/footer.php'; ?>
	

	<div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>

	
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
