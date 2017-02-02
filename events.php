<!doctype html>
<html >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> <!-- Montserrat -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
	 <meta http-equiv="Cache-control" content="no-transform">
	<meta name="theme-color" content="#000">
	 <!-- CSS reset -->
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/events.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

  	<style>
	body{
		background: #232526; /* fallback for old browsers */
		background: -webkit-linear-gradient(to left, #232526 , #414345); /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to left, #232526 , #414345); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	}

	header{
		position:sticky;o
	}

	.parallax-container {
		font-family: 'Montserrat', sans-serif !important;
	}

	.cd-main-content{
		background: #232526; /* fallback for old browsers */
		background: -webkit-linear-gradient(to left, #232526 , #414345); /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to left, #232526 , #414345); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		position:sticky;
	}

	.parallax-container {
		font-family: 'Montserrat', sans-serif !important;
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
<body onscroll="navcolor();">
	
	<?php
		include('header.html');
	?>
	<div class="parallax-container" style="height: 400px"> 
		<div class="section no-pad-bot">
	      <div class="container">
	        <div class="row center hide-on-med-and-down" style="margin-top: 16%; font-size: 100px; color: #fff; font-weight: 600;">
	          <div class="header col s12 dark" style="margin-left: -7%;">Events</div>
	        </div>
	        <div class="row center hide-on-large-only" style="margin-top: 50%; font-size: 50px; color: #fff; font-weight: 600;">
	          <div class="header col s12 dark" style="margin-left: -16%; ">Events</div>
	        </div>
	      </div>
	    </div>
      <div class="parallax"><img src="./images/events.jpg"> </div>
      <div class="parallax"><img src="https://em.wattpad.com/c7286e262409b8bbde9c3b5d7ba70466faa6ce4c/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f75357a394a68595147646d586b773d3d2d3334343730383933382e313438663839653531303761653033663133343434303535383335322e6a7067?s=fit&w=1280&h=1280"> </div>
    </div>


	<main class="cd-main-content">
		<div class="cd-tab-filter-wrapper" >
			<div class="cd-tab-filter " >
				<ul class="cd-filters">
					<li class="placeholder"> 
						<a data-type="all" href="#0">All</a> <!-- selected option on Event2 -->
					</li> 
					<li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
					<li class="filter" data-filter=".A"><a href="#0" data-type="A">Technical</a></li>
					<li class="filter" data-filter=".B"><a href="#0" data-type="B">Non-Technical</a></li>
					<li class="filter" data-filter=".C"><a href="#0" data-type="C">Special Events</a></li>
				</ul> <!-- cd-filters -->
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

		<section class="cd-gallery">
			<ul id="mix-wrapper">
				<li class="mix A">
				<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="detail.php" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/2.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>HELL IN THE CELL</h1> 
			                <p class="price">₹750 per Person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size">
			              	<br>
			              	Hell in the cell is a death match between machines where the sole purpose is to win by immobilizing your opponent’s robot. </div>
			          </div>
			        </div>
			     </div>
     			</li>	

     			<li class="mix C">
					<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/27.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>LASER TAG</h1> 
			                <p class="price">₹150 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size"> 
			              	<br>
			              	An event where players attempt to score points by tagging targets, typically with a hand-held infrared-emitting targeting device. </div>
			            </div>
			          </div>
			        </div>
			     	</div>
				</li>

				<li class="mix B">
					<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/15.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>BOX CRICKET</h1> 
			                <p class="price">₹100 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size"> 
			              	<br>
			              	It is a cricket tournament played within a defined boundary (box) with exciting rules. </div>
			            </div>
			          </div>
			        </div>
			     	</div>
				</li>

				<li class="mix B">
					<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/22.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>BOX FOOTBALL</h1> 
			                <p class="price">₹100 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size"> 
			              	<br>
			              	Test your football skills in a whole new way. Play football in the most exciting arena and show your moves to everyone.  </div>
			          </div>
			        </div>
			     	</div>
				</li>

				<li class="mix B">
					<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/17.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>LAZER MAZE</h1> 
			                <p class="price">₹100 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size"> 
			              	<br>
			              	Imagine entering a dark room and a puzzle of lasers popping out in every way in front of you. Target is to get through the lasers as quick as possible  </div>
			          </div>
			        </div>
			     	</div>
				</li>

				<li class="mix A">
				<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/1.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>ROBO CARRERA</h1> 
			                <p class="price">₹500 per Person</p>
			              </div>
			            </div>
			            <div class="product-option" style="word-wrap: break-word">
			              <div class="product-size ellipsis" >
			              	<br>The Carrera of Robots is back. Get your batteries fully charged and get ready to experience the real robot race. The door to the exit isn't far away. </div>
			        </div>
			     </div>
     			</li>
				
				<li class="mix A">
				<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/3.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>BOT SOCCER</h1> 
			                <p class="price">₹500 per Person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size">
			              	<br>
			              	This is a whole new exciting event to make alive the footballer in you. Now don’t just dream of football, Give a platform to your soccer fantasies.  </div>
			            </div>
			          </div>
			        </div>
			     </div>
     			</li>

				<li class="mix A">
				<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/4.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>MAZE RUNNER</h1> 
			                <p class="price">₹500 per Person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size">
			              	<br>
			              	The path to your goal is not that easy. Maze runner is an event in which participants will have to find the final destination for their robot by passing </div>
			          </div>
			        </div>
			     </div>
     			</li>		

				<li class="mix A">
				<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/5.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>STRUCTO</h1> 
			                <p class="price">₹150 per Person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size">
			              	<br>
			              	The essence of being an engineer does not lie in the ability to fill the gaps in existing technology; it lies instead in the art of original thinking, in creating new avenues. </div>
			            </div>
			          </div>
			        </div>
			     </div>
     			</li>

				<li class="mix A">
				<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/6.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>MAITRE_DE_CIVIL</h1> 
			                <p class="price">₹150 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size">
			              	<br>
			              	Make the gang of youths and test your civil engineering and architectural concepts from basic to creativity with lots of fun, friendship and enthusiasm.  </div>
			          	</div>
			        </div>
			    </div>
			    </li>

				<li class="mix A">
				<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/7.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>CODE-DES_PIRATE</h1> 
			                <p class="price">₹150 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size">
			              	<br>
			              	Code-des-pirate is a technical treasure hunt in which participants will be given a code to trace and obtain a numeric value which would lead to the next code.   </div>
			            </div>
			          </div>
			        </div>
			     </div>
				</li>

				<li class="mix A">
					
				<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/8.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>GEEK WARS</h1> 
			                <p class="price">₹150 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size">
			              	<br>
			              	Geek wars focuses on skills of using the technology and search engines and how well you know your computer.</div>
			            </div>
			          </div>
			        </div>
			     </div>
				</li>

				<li class="mix A">
				
				<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/9.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>HACKTIVIST</h1> 
			                <p class="price">₹150 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size">
			              	<br>
			              	Hacktivist is a game which is based on programming challenge where the players have to precise their program in a short time and in a short size.  </div>
			            </div>
			          </div>
			        </div>
			     </div>
				</li>

				<li class="mix A">
				
				<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/10.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>CRACK-D-SCRAP</h1> 
			                <p class="price">₹150per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size">
			              	<br>
			              	Code-des-pirate is a technical treasure hunt in which participants will be given a code to trace and obtain a numeric value which would lead to the next code.  </div>
			            </div>
			          </div>
			        </div>
			    </div>
				</li>

				<li class="mix B">
					<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/23.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>DR. HOLMES</h1> 
			                <p class="price">₹100 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size"> 
			              	<br>
			              	The entire event will test the detective and logical skills of the participants. It will be a 2 day event. First day will have 2 rounds and the last day will be for the final round.</div>
			            </div>
			          </div>
			        </div>
			     	</div>
				</li>

				<li class="mix A">
				<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/11.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>ENGINOMANIA</h1> 
			                <p class="price">₹150 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size">
			              	<br>
			              	Motto of this event is to check the ability of the participants regarding knowledge, skills, and creativity about an IC engine.   </div>
			            </div>
			          </div>
			        </div>
			    </div>
				</li>

				<li class="mix A">
					<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/12.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>CHEMOQUEST</h1> 
			                <p class="price">₹150 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size"> 
			              	<br>
			              	Relive your school days and fun in chemistry lab. Test your basic knowledge about chemistry. </div>
			            </div>
			          </div>
			        </div>
			     	</div>
				</li>
				
				<li class="mix B">
					<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/26.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>ANGRY BIRDS</h1> 
			                <p class="price">₹100 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size"> 
			              	<br>
			              	Let’s get back into the game mode and fly with angry birds. Use your skills and strategies to win it with fast paced smasher. May the almighty force always stay with you! </div>
			            </div>
			          </div>
			        </div>
			     	</div>
				</li>
				
				<li class="mix A">
					<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/13.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>SHOCK TRADIGATORS</h1>
			                <p class="price">₹150 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size"> 
			              	<br>
			              	Technology in business is a growing necessity. As the year passes, the business world is leaning more and more towards it </div>
			          </div>
			        </div>
			     	</div>
				</li>

				<li class="mix A">
					<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/14.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>SCIENCE OF STUPID</h1>
			                <p class="price">₹150 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size"> 
			              	<br>
			              	This is a simple event wherein we show some videos which comprises of inventions and discoveries from macro stellar level to micro cellular level   </div>
			          </div>
			        </div>
			     	</div>
				</li>
				
				<li class="mix B">
					<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/25.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>TALENT HUNT</h1> 
			                <p class="price">₹100 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size"> 
			              	<br>
			              	The event is a talent hunt in which you can showcase your talent in front of renowned judges and crowd. </div>
			            </div>
			          </div>
			        </div>
			     	</div>
				</li>

				<li class="mix B">
					<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/16.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>GROUND ZERO</h1> 
			                <p class="price">₹100 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size"> 
			              	<br>
			              	Ground zero is an event inspired from the military selection procedure. It will test all   your physical and mental strength along with focusing on your decision making abilities.  </div>
			            </div>
			          </div>
			        </div>
			     	</div>
				</li>
				
				<li class="mix B">
					<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/18.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>BLACK OUT</h1> 
			                <p class="price">₹100 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size"> 
			              	<br>
			              	Imagine entering in a scary dark room and steal all the objects! Black out is an event in which participants have to find given objects in different rounds in the dark room.</div>
			            </div>
			          </div>
			        </div>
			     	</div>
				</li>
				<li class="mix B">
					<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/19.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>TOTAL OVERDOSE</h1> 
			                <p class="price">₹100 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size"> 
			              	<br>
			              	Imagine entering in a scary dark room and steal all the objects! Black out is an event in which participants have to find given objects in different rounds in the dark room.</div>
			            </div>
			          </div>
			        </div>
			     	</div>
				</li>
				<li class="mix B">
					<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/20.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>LEMME TAKE A SELFIE</h1> 
			                <p class="price">₹50 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size"> 
			              	<br>
			              	An amazing experience of clicking selfies like never before. Form the best team you can and participate in clicking the selfies which are worth winning.  </div>
			            </div>
			          </div>
			        </div>
			     	</div>
				</li>
				<li class="mix B">
					<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/21.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>IPL AUCTION</h1> 
			                <p class="price">₹100 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size"> 
			              	<br>
			              	IPL auction is an event in which your horses about cricket and IPL will be tested. Bid it out to create your own dream team but don’t forget to have an eye at your budget. </div>
			            </div>
			          </div>
			        </div>
			     	</div>
				</li>
				
				
				<li class="mix B">
					<div class="col-md-3">
			        <div class="product-container">
			          <div class="product-image">
			            <span class="hover-link"></span>
			            <a href="#" class="product-link">view details</a>
			            <img class="img-responsive" src="logo/24.png" alt="">
			          </div>
			          <div class="product-description">
			            <div class="product-label">
			              <div class="product-name">
			                <h1>QUIZOPEDIA</h1> 
			                <p class="price">₹100 per person</p>
			              </div>
			            </div>
			            <div class="product-option">
			              <div class="product-size"> 
			              	<br>
			              	An event where your knowledge will be tested on the basis of your own luck. A fun event filled with lots of interesting questions based on topics like Bollywood, GK etc. </div>
			            </div>
			          </div>
			        </div>
			     	</div>
				</li>
				
				
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
			</ul>
			<div class="cd-fail-message">No results found</div>
		</section> <!-- cd-gallery -->
	</main> <!-- cd-main-content -->


	<?php 
	include('footer.html') 
	?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    
<script>
 $(document).ready(function(){
      $('.parallax').parallax();
	  $(".button-collapse").sideNav();
    });
</script>
</body>
</html>










