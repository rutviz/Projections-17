  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
        <!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <style>
		body{
			overflow:hidden;
		}
		@media screen and (max-width: 480px) {
			h1{
				font-size:20px !important;
				margin-bottom:2% !important;
			}
			.event{
				margin-top:18% !important;
				margin-bottom:2% !important;
			}
		}
		li{
			display:inline-block !important;
			background-color:#;
			border-radius:10px;
			padding:5px;
			margin:5px;
		}
		.carousel{
			heigth:700px !important;
			overflow-Y:auto;
		}
	  </style>
    </head>

    <body class="black">
	<?php 
		include('header.html');
	?>
	<div class=" white-text center event" style="margin-top:4%;"><h1>Event name</h1></div>
	<div class="center white-text">
	<ul >
		<li onclick="moveit(0)" id="demo">Description</li>
		<li onclick="moveit(1)"  >Topics</li>	
		<li onclick="moveit(2)" >About</li>
		<li onclick="moveit(3)" >Contact</li>
	</ul>
	</div>
	<div class="carousel carousel-slider center white" >
    
    <div class="carousel-item red black-text" href="#one!">
      <h2>First Panel</h2>
      <p class="black-text">This is your first panel</p>
	  </div>
    <div class="carousel-item amber white-text" href="#two!">
      <h2>Second Panel</h2>
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>Fourth Panel</h2>
      <p class="white-text">This is your fourth panel</p>
    </div>
  </div>
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
     </body>
  </html>
        