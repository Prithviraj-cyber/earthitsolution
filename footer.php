<?php

/*-----------------visitor-counter---------------------*/
	include('db.php');
	$sql="update visitor_counter set total_visitor=total_visitor+1";
	$stmt=$con->prepare($sql);
	$stmt->execute();

	$sql="select total_visitor from visitor_counter";
	$stmt=$con->prepare($sql);
	$stmt->execute();
	$arr=$stmt->fetchAll(PDO::FETCH_ASSOC);
	$counter=$arr[0]['total_visitor'];
	$count=strlen($counter);

/*----------------------online visitor----------------------*/

?>

<!DOCTYPE html>
<html>
<head>

	<title>Earth IT Solutions|IT Company in Vanarasi</title>
	<link rel="shortcut icon" href="img/23.JPG">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Arvo|Girassol|Courgette|Noto+Serif|Rubik&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>
<body>

	<!------------------------------------footer------------------------>
	<footer>
		
		<div class="container-fluid footer">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="heading">
						<h3 data-aos="zoom-in"  data-aos-delay="150">Quick links</h3>
						<div class="links" data-aos="fade-down"  data-aos-delay="280">
							<ul>
								<a href=""><li><i class="fa fa-angle-double-right"></i>Our Team</li></a>
								<a href=""><li><i class="fa fa-angle-double-right"></i>Offer</li></a>
								<a href=""><li><i class="fa fa-angle-double-right"></i>Feedback</li></a>
								<a href=""><li><i class="fa fa-angle-double-right"></i>Complain</li></a>
								<a href=""><li><i class="fa fa-angle-double-right"></i>FAQ</li></a>
								<a href=""><li><i class="fa fa-angle-double-right"></i>Privacy Policy</li></a>
								<a href=""><li><i class="fa fa-angle-double-right"></i>Selling & Return Policy</li></a>
								<a href=""><li><i class="fa fa-angle-double-right"></i>Terms Of Use</li></a>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="heading">
					    <h3 data-aos="zoom-in"  data-aos-delay="150">Services</h3>
						<div class="links" data-aos="fade-down"  data-aos-delay="280">
							<ul>
								<a href=""><li><i class="fa fa-angle-double-right"></i>Web Development</li></a>
								<a href=""><li><i class="fa fa-angle-double-right"></i>Software Development</li></a>
								<a href=""><li><i class="fa fa-angle-double-right"></i>SEO Services</li></a>
								<a href=""><li><i class="fa fa-angle-double-right"></i>Bulk sms</li></a>
								<a href=""><li><i class="fa fa-angle-double-right"></i>Email Marketing</li></a>
								<a href=""><li><i class="fa fa-angle-double-right"></i>Whatsapp Marketing</li></a>
								<a href=""><li><i class="fa fa-angle-double-right"></i>SSL Certificate</li></a>
								<a href=""><li><i class="fa fa-angle-double-right"></i>Payment Gateway</li></a>
							</ul>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="heading">
						<h3 data-aos="zoom-in"  data-aos-delay="150">Contact Info</h3>
						<div class="contact-info" data-aos="fade-left"  data-aos-delay="380">
							<ul>
								<li>Address : <p>S.1/.35.H.2 CHUPPEYPUR CENTRAIL JAIL ROAD NEAR AWADH
								 APARTMENT SHIVPUR</p></li>
								 <li>Phone : <p>+91-7619008882</p></li>
								 <li>E-mail : <p>info@earthitsolutions.in</p></li>
							</ul>
						</div>
						<div class="social-media" data-aos="fade-left"  data-aos-delay="380">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-instagram"></i></a>
							<a href=""><i class="fa fa-youtube-play"></i></a>
							<a href=""><i class="fa fa-google-plus"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
						</div>
						<div class="visitor">
							<div class="visitor-counter">
								<?php for($i=0;$i<$count;$i++) {?>
									<h1 id="total_visitor"><?php echo $counter[$i] ?></h1>
								<?php } ?>
								<p>Total Visiter</p>
							</div>
							<div class="visitor-counter">
								<h1 class="counter">0</h1>
								<p>Online Visiter</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="rights">
			<p>© 2020 Earth IT Solutions. All rights reserved | Design by Earth IT Solutions</p>
		</div>

	</footer>




<!----------------------------script-------------------------------->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

	<script type="text/javascript" src="js/main.js"></script>


</body>
</html>