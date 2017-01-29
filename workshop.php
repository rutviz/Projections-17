<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> <!-- Montserrat -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
	<link rel="stylesheet" href="css/workshop.css">
</head>
<body class="back" onscroll="navcolor();">
 
 <?php include("header.html"); ?>
	
    <div class="parallax-container" style="height: 400px"> 
        <div class="section no-pad-bot">
          <div class="container">
            <div class="row center hide-on-med-and-down" style="margin-top: 11%; font-size: 100px; color: #fff; font-weight: 600;">
              <div class="header col s12 dark">Workshop</div>
            </div>
            <div class="row center hide-on-large-only" style="margin-top: 50%; font-size: 50px; color: #fff; font-weight: 600;">
              <div class="header col s12 dark">Workshop</div>
            </div>
          </div>
        </div>
      <div class="parallax"><img src="http://www.planwallpaper.com/static/images/City_Landscape_Background.jpg" style="background-color: #222"> </div>
    </div>

	
        <div class="event-card">
            <div class="event-card_details" >
            <img src="logo/w1.png"/>
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
            <div class="event-card_details" >
            <img src="logo/w2.png"/>
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
        <div class="event-card_details" >
        <img src="logo/w3.png"/>
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
<div class="event-card_details" >
<img src="logo/w4.png"/>
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
<div class="event-card">
<div class="event-card_details" >
<img src="logo/w5.png"/>
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
<div class="event-card">
<div class="event-card_details" >
<img src="logo/w6.png"/>
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
	  $(".button-collapse").sideNav();
    });

			
 function navcolor(){
 	 if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        $("header").css("background-color","#000");
    } else {
        $("header").css("background-color","transparent");
    }
 	
 }
	</script>
</body>
</html>