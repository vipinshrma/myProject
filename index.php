<!DOCTYPE html>
<html>
<head>
<title>iStudent</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" type="text/css" href="css/media.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Maitree|Ropa+Sans" rel="stylesheet">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/dd708c37ee.js" crossorigin="anonymous"></script>
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
<style>
.msg-alert{
  display: none;
  position: fixed;
  left: 50%;
 -ms-transform: translate(-50%);
  transform: translate(-50%); 
  bottom:0;
  z-index: 9999;
}

.msg-alert p{
  font-family: calibri;
  border-radius: 5px 5px 0px 0px;
  padding: 5px 8px;
  font-size: 20px;
  color: white;
}
</style>
</head>

<body id="home">
	<div class="msg-alert"><p></p></div>
	<div class="cssload-loader">
	<div class="cssload-flipper">
		<div class="cssload-front"></div>
		<div class="cssload-back"></div>
	</div><br/>
	<center><span id="loading">Loading</span></center>
	</div>

	<div class="clr-switch"></div>
	<div class="bubble-1"></div>
	<div class="bubble-2"></div>
	<div class="bubble-3"></div>
	<header>
		<div class="wrap-width">
		<a href="#home">
			<div class="navbar-logo">
				<img src="images/logo.png"/>
				<img id="hat" src="images/hat.png"/>
			</div> <!-- navbar-logo -->
		</a>
		<!--<a href="#nav"><i class="material-icons">reorder</i></a>-->
		<div class="horizontal-page-links" id="nav">

			<div class="register-user">
				<a id="student" href="/practice_php/student_dashboard/student_login.php">Student</a>
				<a id="teacher">Teacher</a>
				<a id="admin">Admin</a>
				<!--<a id="register" href="#register">Register</a>-->
			</div>	<!-- register-user -->
			
			<ul>	
				<div class="sliding-out links"><li><a href="#home">Home</a></li></div>
				<div class="sliding-out links"><li><a href="#about">About </a></li></div>
				<div class="sliding-out links"><li><a href="#contact">Contact </a></li></div>
				<div class="last-navbar-link"><li></li></div>
			</ul>
			
		</div> <!-- horizontal-page-links -->
		</div>
	</header>
	
	<div class="content">
	<!-- Welcome Page -->
	<div class="welcome wrap-width">
		<div class="empty-layout"></div>
		<center>
		<img class="welcome-image" src="images/img1.png">
		<div class="welcome-text">
			<p id="text-heading">iStudent.me</p><br>
			<p id="text-context">iStudent is a platform where companies can find the internees,<br>employees, workers for them. It provides the educational documents,<br> certificates, curriculum vitae (CV) of the users. </p>
			<a id="readmore" href="#about">Read More</a>
		</div> <!-- welcome-text -->
		</center>
	</div>	<!-- welcome -->

	<div class="link-container clearfix">
		<div class="wrap-width">
			<a id="register" href="/practice_php/student_dashboard/student_login.php">Sign Up Now</a>
			<p id="join">Join the iStudent - Be a part of the growing community.</p>
		</div> 
	</div>	 <!-- link-container -->

	
	<div class="about-container clearfix wrap-width" id="about">
		<p id="title">Everything you need to know about us.</p><hr class="style-1" style="width: 600px; align-self: center;"><br/>

		<div class="col-container">
		<span class="text-back tooltip" onclick="slider()"></span>
		<i class="material-icons arrow arrow-back">navigate_before</i>
		<img id="about-img" src="images/we.png"/>
		<div class="col_one_third col_1st">
		<h1>WHO ARE <span>WE</span>.</h1>
		<div class="bottom-border"></div>

		<p>We are a group of highly motivated students and we are trying to solve the daily life problems of students which hinder them to be successful in their lives.  </p>
		</div>	<!-- col_one_third -->
		<div class="col_one_third col_2nd">
		<h1>OUR <span>MISSION</span>.</h1>
		<div class="bottom-border"></div>	<!-- border-bottom -->
		
		<p>We aim to promote the digital document attestation and verification. Our sole mission is to save the time that the students consume in attesting their docs.</p>
		</div>	<!-- col_one_third -->
		<div class="col_one_third col_3rd">
		<h1>WHAT WE <span>PROVIDE</span>.</h1>
		<div class="bottom-border"></div> <!-- border-bottm -->	
		<p>iStudent is a platform where students can get their documents verified and attested digitally. Companies can view their docs and offer them internships and jobs.</p>
		</div>	<!-- col_one_third col_last -->
	
		<i class="material-icons arrow arrow-forward">navigate_next</i>
		<span class="text-forward tooltip"></span>
		
		</div> <!-- col-conatiner -->
	</div>	<!-- About-container -->
	<script>
	var slide = 1;
	
	var myVar = setInterval(slider, 4000);
	$(".col_one_third").hover(function(ev){
			clearInterval(myVar);
		}, function(ev){
			myVar = setInterval(slider,4000);
	});

	function slider(){
		slide+=1;
		if(slide>3){
			slide = 1;
		}

		$(".col_one_third").css("animation","fadeInRight 0.6s ease-out");
		$("#about-img").css("animation","fadeInLeft 0.4s ease-out");
		move();
	}
	</script>	
	<script>
	function move(){
		if (slide ==1){
		$(".radio-1").html("radio_button_checked");
		$(".radio-2").html("radio_button_unchecked");
		$(".radio-3").html("radio_button_unchecked");
		$(".col_1st").show();
		$(".col_2nd").hide();
		$(".col_3rd").hide();
		$("#about-img").prop("src","images/we.png");
		$(".text-back").text("What we provide");
		$(".text-forward").text("Our mission");
		}
		else if (slide==2){
		$(".radio-1").html("radio_button_unchecked");
		$(".radio-2").html("radio_button_checked");
		$(".radio-3").html("radio_button_unchecked");
		$(".col_1st").hide();
		$(".col_2nd").show();
		$(".col_3rd").hide();
		$("#about-img").prop("src","images/mission.png");
		$(".text-back").text("Who are we");
		$(".text-forward").text("What we provide");
		}
		else if (slide==3){
		$(".radio-1").html("radio_button_unchecked");
		$(".radio-2").html("radio_button_unchecked");
		$(".radio-3").html("radio_button_checked");
		$(".col_1st").hide();
		$(".col_2nd").hide();
		$(".col_3rd").show();
		$("#about-img").prop("src","images/provide.png");
		$(".text-back").text("Our mission");
		$(".text-forward").text("Who are we");
		}
	}
	</script>
	<center>
		
		<i class="material-icons radio-1">radio_button_checked</i>
		<i class="material-icons radio-2">radio_button_unchecked</i>
		<i class="material-icons radio-3">radio_button_unchecked</i>
	
	</center>
	<center>
	<div class="contact-container " id="contact">
		
		<div id="form-main">
  			<div class="contact-div form-div">
	  			<p class="contact-title" id="title">Contact us<br></p>
				<form class="form" id="form1" name="form1" action="#" method="post">
      				<p class="name">
        			<input type="text" pattern="^[a-zA-Z ]+$" class="feedback-input" maxlength="35" placeholder="Your Name" id="name" name="name" required/>
      				</p>
      
      				<p class="email">
        			<input type="email" class="feedback-input" id="email" name="email" placeholder="Your Email" required/>
      				</p>
      
      				<p class="text">
        			<textarea class="feedback-input" id="message" name="message" placeholder="Message" required></textarea>
      				</p>
            
    				<div class="submit">
    	    		<input type="submit" value="SEND" id="button-send"/>
    	    		<div class="ease"></div>
    	  			</div>
    			</form>
    		<script>
				$(function() {
		  			$("form[name='form1']").validate({
    					rules: {
      						name: {
        						required: true,
        						maxlength: 35
      						},
      						email: {
        						required: true,
        						email: true
      						},
      						message: {
        						required: true,
        						minlength: 20,
        						maxlength:250
      						}
    					},
    
  						messages: {
      						name: {
        						required: "Please enter your good name",
        						maxlength: "Name must be less than 35 characters"
      						},
      						email: "Please enter an email address",
      						email: "Please enter a valid email address"
    					},
  					});
				});
			</script>
    		</div>

    		<div class="contact-div contact-detail">
    			<p class="contact-title" id="ct-details">Contact Details</p>
    			<div class="detail-container" id="phone-no">
    				<i class="material-icons first">contact_phone</i>
    				<p class="contact-context" id="phone-text">+918557936869</p>
    			</div>
    			<div class="detail-container" id="email-id">
    				<i class="material-icons second">email</i>
	    			<p class="contact-context" id="mail-text">query@istudent.me</p>
	    		</div>
	    		<div class="detail-container" id="facebook-id">
		    		<i class="fa fa-facebook-square first" aria-hidden="true"></i>
	    			<iframe src="#" scrolling="no" frameborder="0" allowTransparency="true" id="fb"></iframe>
	    		</div>
	    		<div class="detail-container" id="location">
	    			<i class="material-icons second">place</i>
    			</div>			
    		</div>
    		<div class="contact-div" id="map"></div>
    		
    		<script async defer
    			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSsR2S_1urJWvhSn_bCLWaoDtEBntXIlI&callback=initMap">
    		</script>
    		</div>
			</div>	<!-- contact-container -->
			</center>
	</div>
	<footer>
		<a href="#home"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
		<div id="copyrights">
				<span class="siteName">iStudent ©  2017. All rights reserved.</span>
            </div><!--copyrights-->
	</footer>
<script async type="text/javascript">
		
  	function login(){
  	FB.login(function(response) {
  		if (response.status === 'connected') {
  
  			$("#login-form").hide();
  			$('.content, footer,header').css("pointer-events","auto");
  			$("a#login").html("Logout");
  			FB.api('/me', function(response) {
      			alert('Successful login for: ' + response.name);
    		});

  			setTimeout(dashboard, 1000); 
        function dashboard(){
            window.open("profile.php","_self");
        }

  			$("a#login").click(function(){
  				FB.logout(function(response) {
  					$("a#login").html("Login");
   					alert("logged out successfully.");
				});
  			});
        

  		} else {
    		// The person is not logged into your app or we are unable to tell.
      		document.getElementById('status').innerHTML = 'Please log ' +
        	'into this website.';
  		}
	});
  	}

  	// This function is called when someone finishes with the Login
  	// Button.  See the onlogin handler attached to it in the sample
  	// code below.
  	function checkLoginState() {
    	FB.getLoginStatus(function(response) {
     		statusChangeCallback(response);
    	});
  	}

  	window.fbAsyncInit = function() {
  		FB.init({
    		appId      : '732114246968740',
    		cookie     : true,  // enable cookies to allow the server to access the session
    		xfbml      : true,  // parse social plugins on this page
    		version    : 'v2.8' // use graph api version 2.8
  		});

  		FB.getLoginStatus(function(response) {
    		statusChangeCallback(response);
  		});
  	};

  	// Load the SDK asynchronously
  	(function(d, s, id) {
    	var js, fjs = d.getElementsByTagName(s)[0];
    	if (d.getElementById(id)) return;
    		js = d.createElement(s); js.id = id;
    		js.src = "//connect.facebook.net/en_US/sdk.js";
    		fjs.parentNode.insertBefore(js, fjs);
  	}(document, 'script', 'facebook-jssdk'));

	</script>
	

<script defer src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script defer type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/additional-methods.js"></script>
<script defer src="js/animate.js"></script>

</body>

</html>