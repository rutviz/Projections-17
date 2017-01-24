  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
        <!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/detail_contact_card.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <style>
		body{
			overflow:hidden;
		}
		@media screen and (max-width: 480px) {
			h1{
				font-size:20px !important;
				margin-bottom:4% !important;
			}
			.event{
				margin-top:18% !important;
				margin-bottom:2% !important;
			}
		}
		#Detailsheader li{
			display:inline-block !important;
			background-color:#;
			
			padding:5px;
			margin:5px;
			margin-left:5px;
		}
		#Detailsheader li:hover{
		color:black;
		background-color:#fff;
		cursor:pointer;
		outline-color: rgba(255, 255, 255, 255);
		outline-style: outset;
		outline-width: thick;
		font-size:20px;
	}
		.carousel{
			heigth:900px !important;
			overflow-Y:auto;
		}
	
.text--transparent {
    fill: transparent;
}
#eventtitle1{
	height:20%;
	background: url(img/London-Banner.jpg);
}	  
	  </style>
	  
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/Event_title_reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/Event_title_style.css"> <!-- Resource style -->
	<script src="js/Event_title_modernizr.js"></script> <!-- Modernizr -->	
		
		
		
    </head>

    <body class="black">
	<?php 
		include('header.html');
	?>
	<div id="eventtitle1">
	<section class="cd-intro" style="color: #fff;">
		<h1 class="cd-headline clip is-full-width" style="margin-top:30px;">

			<span class="cd-words-wrapper" >
				<b class="is-visible">Event Name</b>
				<b >ગુજરાતી</b>
				<b >गुजराती</b>
				<b >گجراتی</b>
				
				
			</span>
		</h1>
	</section> <!-- cd-intro -->
	 <!-- Resource jQuery -->
	 
<script src="js/Event_title_jquery-2.1.1.js"></script>
<script src="js/Event_title_main.js"></script>

	</div>

	
	<div id="Detailsheader">
	<div class="center white-text" >
	<ul style="height: 50px;">
		<li onclick="moveit(0)" id="demo">Description</li>
		<li onclick="moveit(1)" id="demo" >Rounds</li>	
		<li onclick="moveit(2)" id="demo">Rules</li>
		<li onclick="moveit(3)" id="demo">Contact</li>
	</ul>
	</div>
	</div>
	<div class="carousel carousel-slider center" >
    
    <div class="carousel-item white black-text" href="#one!" >
	  <p style="font-size:150%; font-weight:600;">Solve the quest, feel like a scientist !!</p>
      

<p style="font-size:150%;">Relive your school days and fun in chemistry lab. Test your basic knowledge about chemistry </p>

<p style="font-size:150%;" > PARTICIPANTS :-    Individual or a team of 2 </p>
<p style="font-size:150%;">Registration fees:- 150 per person </p>


	  </div>
    <div class="carousel-item blue white-text" href="#two!" style="background:cover;">
     <p style="font-size:150%; font-weight:600;">Round-1</p>
      

<p style="font-size:150%;">•	Topics from which questions is to be asked will be give to team at the beginning of round 1.</p>  
<p style="font-size:150%;">•	Each team has to choose 1 topic and questions would be asked from that topic only. FIRST COME FIRST SERVE.</p>  
 <p style="font-size:150%; font-weight:600;">Round-2</p>
      

<p style="font-size:150%;">•	Participants would be given the list to find out the chemicals. They would be given clues according to it. </p>  
<p style="font-size:150%;">•	As per maximum answer given, the participant will be selected for next round.</p>   

<p style="font-size:150%; font-weight:600;">Round-3</p>
      

<p style="font-size:150%;">•	The procedure and the chemicals would be given and they have to make the product as per the procedure.</p>  
<p style="font-size:150%;">•	Selection would be done on the basis of accurate product and the first one to complete it.</p>  
    
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <p style="font-size:150%">•	No use of internet until instructed to.</p>
<p style="font-size:150%">•	Take safety measure for chemicals.</p>
<p style="font-size:150%">•	Any damage to the property, participants would be responsible and has to pay fine as per it.</p>
<p style="font-size:150%">•	Discipline is must.</p>
</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
    
	<div class="teammember">
	<div class="teammember__img" title="Image of Jinil Patel" style="background: url(https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/3/000/0c0/17c/10a99d5.jpg); background-size: cover;">
	</div>
	<div class="teammember__content">
		<h1 class="teammember__content__name"> Jinil K. Patel
		</h1>
		<h3 class="teammember__content__job"> Co-ordinator
		</h3>
		<ul class="teammember__content__contact">
			<li id="phone" data-clipboard-text="+91 9173709999" class="teammember__content__contact__phone">+91 9173709999
			</li>
			<li id="email" data-clipboard-text="pateljinil02@gmail.com" class="teammember__content__contact__email">pateljinil02@gmail.com
			</li>
			
		</ul>
		
	</div>
	
</div>
<div class="teammember">
	<div class="teammember__img" title="Image of Jinil Patel" style="background: url(https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/3/000/0c0/17c/10a99d5.jpg); background-size: cover;">
	</div>
	<div class="teammember__content">
		<h1 class="teammember__content__name"> Jinil K. Patel
		</h1>
		<h3 class="teammember__content__job"> Co-ordinator
		</h3>
		<ul class="teammember__content__contact">
			<li id="phone" data-clipboard-text="+44 (0) 7702 422 203" class="teammember__content__contact__phone">+91 9173709999
			</li>
			<li id="email" data-clipboard-text="tim.mueller@marketgravity.com" class="teammember__content__contact__email">pateljinil02@gmail.com
			</li>
			
		</ul>
		
	</div>
	
	
</div>
    </div>
  </div>
<script type="text/javascript" src="js/details_contact_card.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.10/clipboard.min.js'></script>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	<script>
	$('.carousel.carousel-slider').carousel({full_width: true});
	function moveit(a,b)
	{
		
		$('.carousel').carousel('set', a);
	
	}
	
	</script>
	<script>
  $(document).ready(function(){
      $('.parallax').parallax();
	  $(".button-collapse").sideNav();
    });
 
</script>
	
     </body>
  </html>
        