
<!DOCTYPE html>
  <html>
    <head>
		 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Projections is International Technical festival">
	 <meta name="theme-color" content="#000">
	<meta http-equiv="Cache-control" content="no-transform">
    <title>Projections 2016 | Home</title>
   
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link rel="stylesheet" href="css/style.css"></link>
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"></style>
	
	  <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	    <style type="text/css">
	
</style>
    </head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
	
    <body class="black"  style="overflow:hidden;">
    <?php
	include("header.html");	
	?>

	<div class="shade">
    

      <article class="layer" >
        <div class="layer__background">
          <canvas id="starfield"></canvas>
        </div>
        <div class="layer__back">
        <div class="scene scene-00"> </div>
		<div class="scene scene-01"></div>
        <div class="scene scene-02"></div>
        <div class="scene scene-03"></div>
        <div class="scene scene-04"></div>
		<div class="scene scene-05"></div>
        </div>
      </article>
	  </div>
	 
	   <div id="total" class="animated hide-on-med-and-down" style="/*background-color:#336699;*/display:inline-block;top:35%;left:28%;position:fixed;">
	<img class="animated bounceInDown" id="p3" src="png/3.png" width="18%"></img>
	<img class="animated bounceInUp" id="p2" src="png/2.png" width="41%" ></img>
	<img class="animated bounceInRight" id="p1" src="png/1.png" width="35%"></img>
	<h1 class="animated flipInY" id="name">PROJECTIONS'17</h1>
	</div>
	<div id="mtotal" class="animated hide-on-large-only" style="top:43%;left:20%;position:fixed;">
	<img class="animated bounceInDown" id="mp3" src="png/3.png" width="20px"></img>
	<img class="animated bounceInUp" id="mp2" src="png/2.png" width="41px" ></img>
	<img class="animated bounceInRight" id="mp1" src="png/1.png" width="35px"></img>
	<h6 class="animated flipInY" id="mname" style="font-size: 30px;">PROJECTIONS'17</h6>
	</div>
	<div class=" animated bounceInDown white-text workshops"> 
		<h4>Workshop : 1 & 2 March</h4>
	</div>
	<div class=" animated bounceInDown white-text events"> 
		<h4>Events : 3 & 4 March</h4>
	</div>
	
	</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
    <script src="js/top.js"></script>
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	<script>
	$('#mname').on('webkitAnimationEnd animationend',function(event){
 		$("#mtotal").addClass('zoomOut');

	} );

	$('#name').on('webkitAnimationEnd animationend',function(event){
		$("#total").addClass('zoomOut');

	} );
	

	
	
	if ($(document).height() > $(window).height()) {
     var scrollTop = ($('html').scrollTop()) ? $('html').scrollTop() : $('body').scrollTop(); // Works for Chrome, Firefox, IE...
     $('html').addClass('noscroll').css('top',-scrollTop);         
}
	
	$( document ).ready(function(){
		$(".button-collapse").sideNav();
	});

	
	</script>
    </body>
  </html>
 