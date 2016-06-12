<!DOCTYPE html>
<html lang="en">
<head>
	<title>Paws N Pose</title>
	<meta charset="utf-8">
	<meta name="author" content="PNPC">
	<meta name="description" content="Paws N Pose Cuttery & Bed N Biscuit"/>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/fancybox-thumbs.css">
	<link rel="stylesheet" type="text/css" href="css/fancybox-buttons.css">
	<link rel="stylesheet" type="text/css" href="css/fancybox.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/fancybox.js"></script>
    <script type="text/javascript" src="js/fancybox-buttons.js"></script>
    <script type="text/javascript" src="js/fancybox-media.js"></script>
    <script type="text/javascript" src="js/fancybox-thumbs.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<!-- hidden inline form -->
<div id="inline">
	<h2>Send us a Message</h2>

	<form id="contact" name="contact" action="#" method="post">
		<label for="email">Your E-mail</label>
		<input type="email" id="email" name="email" class="txt">
		<br>
		<label for="msg">Enter a Message</label>
		<textarea id="msg" name="msg" class="txtarea"></textarea>
		
		<button id="send">Send E-mail</button>
	</form>
</div>

<!-- basic fancybox setup -->
<script type="text/javascript">
	function validateEmail(email) { 
		var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return reg.test(email);
	}

	$(document).ready(function() {
		$(".modalbox").fancybox();
		$("#contact").submit(function() { return false; });

		
		$("#send").on("click", function(){
			var emailval  = $("#email").val();
			var msgval    = $("#msg").val();
			var msglen    = msgval.length;
			var mailvalid = validateEmail(emailval);
			
			if(mailvalid == false) {
				$("#email").addClass("error");
			}
			else if(mailvalid == true){
				$("#email").removeClass("error");
			}
			
			if(msglen < 4) {
				$("#msg").addClass("error");
			}
			else if(msglen >= 4){
				$("#msg").removeClass("error");
			}
			
			if(mailvalid == true && msglen >= 4) {
				// if both validate we attempt to send the e-mail
				// first we hide the submit btn so the user doesnt click twice
				$("#send").replaceWith("<em>sending...</em>");
				
				$.ajax({
					type: 'POST',
					url: 'sendmessage.php',
					data: $("#contact").serialize(),
					success: function(data) {
						if(data == "true") {
							$("#contact").fadeOut("fast", function(){
								$(this).before("<p><strong>Success! Your feedback has been sent, thanks :)</strong></p>");
								setTimeout("$.fancybox.close()", 1000);
							});
						}
					}
				});
			}
		});
	});
</script>
<section class="billboard light">
		<header class="wrapper light">
			<a href="index.html"><img class="logo" src="img/logo_light.png" alt=""/></a>
			<nav>
				<ul>
				    <li><a href="index.html">Home</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="">Gallery</a></li>
					<li><a href="">Journal</a></li>
					<li><a href="">Contact Us</a></li>
				</ul>
			</nav>
		</header>

		<div class="caption light animated wow fadeInDown clearfix">
			<h1>Paws N' Pose</h1>
			<p>Grooming, Boarding and Caring in the convenience of your driveway</p>
			<hr>
		</div>
		<div class="shadow"></div>
	</section><!--  End billboard  -->


	<section class="" style="padding: 5px;">
		<ul class="clearfix">
			<li class="animated wow fadeInDown">
				<div style="text-align:center;"><img class="icon" src="img/icon1.png" alt=""/></div>
				<span class="separator"></span>
				<h2></h2>
				<p style="font-size:22px;">

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome to Paws N’, my name is Shari. I am the company founder, accredited dog groomer and loving dog owner. I feel that a home is never complete without a loyal and forever caring canine companion. They protect our homes, love us unconditionally and always treat us like family. Our dogs should be treated with kindness and respect for all they do for us. With that in mind I took up dog grooming to keep our loyal friends happy, healthy and clean.

        My goal is to provide a warm and caring experience for my customers so they feel at ease during their grooming session. Each dog is treated as a valued customer.<br/>  <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paws N Pose Cuttery uses the very latest in mobile grooming technology, to ensure that your pet’s grooming experience is a safe and happy one…We currently provide service in Middlesex County Area of  New Jersey. We offer professional grooming self-contained in a custom vehicle that arrives at your door to take care of your pet’s grooming needs. Mobile pet grooming is preferred by most of today’s busy pet owners. The convenience for you and the exclusive attention for your pet make it desirable to use a mobile dog grooming service.

</p>
			</li>
		</ul>
	</section><!--  End services  -->


	<section class="video">
		<img src="img/video_logo.png" alt="" class="video_logo animated wow fadeInDown"/>
		<h3 class="animated wow fadeInDown">who we are</h3>
		<a href="#" id="play_btn" class="fancybox animated wow flipInX" data-wow-duration="2s"></a>
	</section><!--  End video  -->
	

	<section class="blog_posts">
		<div class="wrapper">
			<div class="title animated wow fadeIn">
				<h2>Happy Dogs</h2>
				<h3>Our most recent customers</h3>
				<hr class="separator"/>
			</div>

			<ul class="clearfix">
				<li class="animated wow fadeInDown">
					<div class="media">
						<div class="date">
							<span class="day">25</span>
							<span class="month">Nov</span>
						</div>
						<a href="#">
							<a href="img/Bandit112515.jpg" class="fancybox"><img src="img/Bandit112515.jpg" alt=""/></a>
						</a>
					</div>
					<a href="#">
						<h1></h1>
					</a>
				</li>

				<li class="animated wow fadeInDown" data-wow-delay=".2s">
					<div class="media">
						<div class="date">
							<span class="day">25</span>
							<span class="month">Nov</span>
						</div>
						<a href="#">
							<img src="img/Bella112515.jpg" alt=""/>
						</a>
					</div>					
					<a href="#">
						<h1></h1>
					</a>
				</li>

				<li class="animated wow fadeInDown" data-wow-delay=".4s">
					<div class="media">
						<div class="date">
							<span class="day">24</span>
							<span class="month">Nov</span>
						</div>
						<a href="#">
							<img src="img/Paws112415.jpg" alt=""/>
						</a>
					</div>
					<a href="#">
						<h1></h1>
					</a>
				</li>

				<li class="animated wow fadeInDown" data-wow-delay=".6s">
					<div class="media">
						<div class="date">
							<span class="day">24</span>
							<span class="month">Nov</span>
						</div>
						<a href="#">
							<img src="img/Sparky112415.jpg" alt=""/>
						</a>
					</div>
					<a href="#"><h1></h1>
				</a>
				</li>
			</ul>
		</div>
	</section><!--  End blog_posts  -->


	<footer>
		<div class="wrapper">
			<div class="rights">
				<img src="img/footer_logo.png" alt="" class="footer_logo"/>
				<p>© PNPC 2015</p>
			</div>

			<nav>
				<ul>
					<li><a href="#">About</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>		
	</footer><!--  End footer  -->
    <script src='../ga.js'></script>

</body>

</html>