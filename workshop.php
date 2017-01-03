<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
	<link rel="stylesheet" href="css/workshop.css">
</head>
<body onscroll="navcolor();">
 <?php
	include("header.html");	
	?>
	<div class="parallax-container">
      <div class="parallax"><img src="http://materializecss.com/images/parallax1.jpg"></div>
    </div>
	<div style="background-color:#e0e0e0">
<div class="event-card">
<div class="event-card_details">
</div>
 <div class="event-card__image__date">
      <i class="material-icons icon">&#xE192;</i>
      <p><span class="number">11</span> JUN</p>
    </div>
	<div class="event-card__image__notif">  Registration Fee: Rs 500 per Individual</div>

<div class="event-card__text">
	
    <h1>Hacktrack</h1>
    <p>For the enthusiastic beginners to learn the basics of Ethical hacking</p>
	<h3>Speaker: Sunny Wagela</h3>
	
    <button>About Workshop</button>
  </div>
</div>
<div class="event-card">
<div class="event-card_details">
</div>
 <div class="event-card__image__date">
      <i class="material-icons icon">&#xE192;</i>
      <p><span class="number">11</span> JUN</p>
    </div>
	<div class="event-card__image__notif">  Registration Fee: Rs 500 per Individual</div>

<div class="event-card__text">
    <h1>Hacktrack</h1>
    <p>For the enthusiastic beginners to learn the basics of Ethical hacking</p>
	<h3>Speaker: Sunny Wagela</h3>
	
    <button>About Workshop</button>
  </div>
</div>
</div>
<script src="js/jquery-2.1.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
  
<script>
 $(document).ready(function(){
      $('.parallax').parallax();
    });
 function navcolor(){
 	 if (document.body.scrollTop > 350 || document.documentElement.scrollTop > 350) {
        $("header").css("background-color","#000");
    } else {
        $("header").css("background-color","transparent");
    }
 	
 }
</script>
</body>
</html>