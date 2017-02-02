<!doctype html>
<html>
<head>
	<!-- Meta tags & title /-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="robots" content="all,index,follow" />

	<title>About</title>
	<meta name="description" content="Team Page Layout" />

	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />   

	 <!--  Android Chrome Color-->
    <meta name="theme-color" content="#000000">

    <!-- Material Icons -->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 

    <!--Import materialize.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

<script>
			
 function navcolor(){
 	 if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        $("header").css("background-color","#000");
    } else {
        $("header").css("background-color","transparent");
    }
 	
 }

</script>

</head>
	
<body onscroll="navcolor();" style="

	background: #000000; /* fallback for old browsers */
	background: -webkit-linear-gradient(to left, #000000 , #434343); /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to left, #000000 , #434343); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	        ">

<?php include('header.html'); ?>
	
	<div class="parallax-container" style="height: 400px"> 
		<div class="section no-pad-bot">
	      <div class="container">
	        <div class="row center hide-on-med-and-down" style="margin-top: 11%; font-size: 100px; color: #fff; font-weight: 600;">
	          <div class="header col s12 dark">About</div>
	        </div>
	        <div class="row center hide-on-large-only" style="margin-top: 50%; font-size: 50px; color: #fff; font-weight: 600;">
	          <div class="header col s12 dark">About</div>
	        </div>
	      </div>
	    </div>
      <div class="parallax"><img src="./images/about.jpg" style="background-color: #222"> </div>
    </div>

    <div class="container">

   		<div class="row">
   			
   			<div class="col s12">
   				
   				<div class="aboutParul">
   					
   					<p class="light white-text">
   					Parul University is an amalgamation on 30 Institutes offering 150+ programs in Engineering & Technology, Pharmacy, Physiotherapy, Homoeopathy, Ayurveda, Architecture, Management, Business Administration, Computer Application, Fine Arts, Social Work and Vocational Education at Diploma, Under Graduate, Post Graduate & Doctoral Level in a 150+ acre modern infrastructure equipped campus housing 28000+ students, 700+ International Students from 37 Different Countries, 2000+ faculty members & providing in-campus residential facility to 7000+ students making it India’s Premier Multidisciplinary University. Well, it is also the only campus in Gujarat to have 109 faculty members from reputed organizations such as IITs & NITs.
Campus is a perfect blend of youth under the guidance of experienced academicians creating a positive aura of teaching, learning, knowledge & innovation for all the stake holders.
					</p>

   				</div>


   			</div>

   		</div>


   		<div class="row">
   			
   			<div class="col s12">
   				
   				<div class="aboutParul">
   					
   					<p class="light white-text">
   					Parul University is an amalgamation on 30 Institutes offering 150+ programs in Engineering & Technology, Pharmacy, Physiotherapy, Homoeopathy, Ayurveda, Architecture, Management, Business Administration, Computer Application, Fine Arts, Social Work and Vocational Education at Diploma, Under Graduate, Post Graduate & Doctoral Level in a 150+ acre modern infrastructure equipped campus housing 28000+ students, 700+ International Students from 37 Different Countries, 2000+ faculty members & providing in-campus residential facility to 7000+ students making it India’s Premier Multidisciplinary University. Well, it is also the only campus in Gujarat to have 109 faculty members from reputed organizations such as IITs & NITs.
Campus is a perfect blend of youth under the guidance of experienced academicians creating a positive aura of teaching, learning, knowledge & innovation for all the stake holders.
Parul University was established under Gujarat Private University Act 2009, vide a bill passed by the Government of Gujarat on 26th March 2015 giving University status to Parul Group of Institutes run by Parul Arogya Seva Mandal Trust.
Parul University has various support cells which facilitate 360 degree learning and career building, be during the period of study or after completion for Jobs / Further Students. Research & Development Cell, Entrepreneurship Development Cell, Career Development Cell, Training & Placement Cell, International Relations Cell, International Students’ Affair Cell, Department of Events & Media Relations, Students’ Council and Alumni Association to name a few.

					</p>

   				</div>


   			</div>

   		</div>

    	
    </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> <!-- Load jQuery -->
    
       <!-- Compiled and minified JavaScript -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

	<script>
		
  $(document).ready(function(){
      $('.parallax').parallax();
	  $(".button-collapse").sideNav();

  });
	</script>
</body>

</html>
