<!doctype html>
<html >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
	 <meta http-equiv="Cache-control" content="no-transform">
	<meta name="theme-color" content="#000">
	<title>Detail page</title>
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-TileImage" content="images/1.jpg">
	<link rel="icon" href="images/3.jpg" sizes="32x32">
  	<style>
	body{
		overflow:hidden;
	}
	header{
		
		position:sticky;
	}
	#details{
		margin-top:8%;
		text-align:center;
		height:90%;
		overflow:hidden;
	}
	#details li{
		
		display:inline-block;
		font-size:20px;;
		font-weight:bold;
		font-family:inherit;
		padding:10px;
		transition:all 0.2s;
	}
	#details li:hover{
		color:white;
		background-color:#000;
		cursor:pointer;
		outline-color: rgba(255, 255, 255, 255);
		outline-style: outset;
		outline-width: thick;
	}
	.page{
		margin:15%;
		margin-top:0%;
	
	}
	@media only screen and (max-width: 640px) {
		#details li{ font-size: 10px; }
		#details{margin-top:15%;}
	}
	</style>
	<title>Filter</title>
	<script>
			
 function navcolor(){
 	 if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        $("header").css("background-color","#000");
    } else {
        $("header").css("background-color","transparent");
    }
 	
 }
	</script>
</head>
<body class="black" onscroll="navcolor();">
	
	<?php
		include('header.html');
	?>
		
	<div id="details">
		<div style="display:-webkit-inline-box">
			<ul class="white">
				<li>Descriptions</li>
				<li>Rounds</li>
				<li>Rules</li>
				<li>Contact</li>
			</ul>
		</div >
		<div class="1 white page">
		Be ready, the clock is ticking!!!

Defuse is a time bound event that puts your perseverance and teamwork to test. Analyze the circuit, crack the code and defuse a ticking time bomb in allotted time before it blows. If you are looking for the extreme experience to show your talent then here is the platform. Just survive 2 rounds and get your hands on the prize money.

3-5 Members per team
Prize worth INR 15000/-
Registration Fee Rs.150 per person.
		</div>
		<div id="2" class="green page hide"></div>
		<div id="3" class="pink page hide"></div>
	</div>


<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script>
 $(document).ready(function(){
      $('.parallax').parallax();
	  $(".button-collapse").sideNav();
	  $(".1").on("swipe",function(){
		alert("hello");
	});
	 
    });
	

</script>
</body>
</html>










