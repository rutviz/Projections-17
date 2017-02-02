<?php

	if(isset($_POST['pay']))
	{
		$no=$_POST['team_no'];
		$amount=$_POST['fees'];
		
		
		
		//echo $email."email ".$no."no ".$number." num".$event." event ".$amount." amount".$name;
		session_start();
		$_SESSION['no']=$no;
		$_SESSION['amount']=$amount;
		header("location:index2.php");
	}
?>
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css--> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

	  <!-- Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <title>Register</title>
	  <style>
		body{
			background-color: #f2f2f2;
		}
		select{
			margin-top: 10px;
			margin-bottom: 10px;
			width: 90%;
			margin-left: 5%;
			margin-right: 5%;
		}
		#cardopt{
			margin-left: 20%;
		}
		#cardopt1{
			margin-left: 20%;
		}
		#cardopt0{
			margin-left: 20%;
		}

		.curve {
			border-radius: 10px;
		}
		.card{
			width: 80%;
			margin-left: 10%;
			margin-top: 2%;
			box-shadow: 0 0 0 0 #ccc;
			 -webkit-transition:  box-shadow .3s ease-out;
		}

		.card:hover{ 
	    box-shadow: 0 10px 47px 0 rgba(0, 0, 0, 0.17);
	    -webkit-transition:  box-shadow .3s ease-in;
	  	}

		.s3{
			margin-left: 2% !important;
		}

		.svgs_left {
			padding-top:3% !important;
	    	margin-left: 0.5%; 
	    }

	    .svgs_right{
			margin-top:3% !important;
	    	float: right;
	    	-moz-transform: scaleX(-1);    /* Gecko */
			-o-transform: scaleX(-1);      /* Opera */
			-webkit-transform: scaleX(-1); /* Webkit */
			transform: scaleX(-1);         /* Standard */
			filter: FlipH;   
	    }

	    #regis{
	    	text-align: center;
	    	padding-bottom: 2%;
	    }

	    h3{
	    	font-family: 'Montserrat', sans-serif;
	    }

	    h4{
	    	font-family: 'Roboto', sans-serif;
	    }

	   
	  </style>
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

    <body onscroll="navcolor();" class="noEnterSubmit">
	
	<?php include('header.html'); ?>

	<div class="svg_group" style="background-color: #222;height:330px">
	    
	    <div class="svgs_right hide-on-med-and-down">
	    	<?php include('amuze.html'); ?>
	    </div>

	    <div class="svgs_left">
	    	<?php include('amuze.html'); ?>
	    	<img class="hide-on-med-and-down" src="images/logo.png" style=" width: 11%; margin-left: 4%;"/>
	    </div>
	    
	</div>
    
		
	<div class="row" style="padding:2%">
	<div id="regis"> <h3>Register Here</h3> </div>
	<div class="col s10">
		
		  <div class="card horizontal" id="cardopt">
		  
			
			  <select id="Type" class="browser-default">
				<option value="" disabled selected>Select Your Interest</option>
					<option value="1">Technical Events</option>
					<option value="2">Non-Technical Events</option>
					<option value="3">Robotics</option>
					<option value="4">Special Event</option>
					<option value="5">Workshops</option>
				</select>	
					
		  </div>
		  <div class="card horizontal" id="cardopt0">
			  <select id="event" class="browser-default">
				<option value="" disabled selected>Select the Event</option>
					<option value="1">Chemo-Quest</option>
					<option value="2">Code Des Pirate</option>
					<option value="3">Crack-De-Scrap</option>
					<option value="4">Enginomania</option>
					<option value="5">GeekWars</option>
					<option value="6">Hactivist</option>
					<option value="7">Maitre-De-Civil</option>
					<option value="8">Sci-Of-Stupid</option>
					<option value="9">Shock-Tradiagtor</option>
					<option value="10">Structo-Draft</option>
				  </select>
				  
				  
					<select id="event2" class="browser-default">
					<option value="" disabled selected>Select the Event</option>
					<option value="1">Box Cricket</option>
					<option value="2">Ground Zero</option>
					<option value="3">Lazer MAZE</option>
					<option value="4">Black Out</option>
					<option value="5">Total OverDose</option>
					<option value="6">Lemme take a Selfie</option>
					<option value="7">IPL Auction</option>
					<option value="8">Box Football</option>
					<option value="9">Dr.Holmes</option>
					<option value="10">Quizopedia</option>
					<option value="11">Show Us What You Go</option>
					<option value="12">Angry Birds</option>
					</select>
				  
				
				
				
			  <select id="event3" class="browser-default">
					<option value="" disabled selected>Select the Event</option>
					<option value="1">ROBO CARRERA</option>
					<option value="2">HELL IN THE CELL</option>
					<option value="3">BOT SOCCER</option>
					<option value="4">MAZE RUNNER</option>
					</select>
					
			  <select id="event4" class="browser-default">
				<option value="" disabled selected>Select the Event</option>
				<option value="1">Lazer Tag</option>
			  </select>
			  
			  
			  <select id="event5" class="browser-default">
					<option value="" disabled selected>Select the Workshop</option>
					<option value="1">INTERNET OF THINGS</option>
					<option value="2">RACE CAR DESIGN</option>
					<option value="3">SIXTH SENSE ROBOTICS</option>
					<option value="4">QUADCOPTER</option>
					<option value="4">BRIDGE DESIGN</option>
					<option value="4">3-D PRINTING</option>
					</select>
			  
			  
		  </div>
		  
		  <div class="card horizontal" id="cardopt1">
			<select id="team" class="browser-default"></select>
		  </div>
	</div>
</div>

<div class="row">
	<div class="form">
		<div class="preload center-align">
			<div class="preloader-wrapper small active">
		      <div class="spinner-layer spinner-blue">
		        <div class="circle-clipper left">
		          <div class="circle"></div>
		        </div><div class="gap-patch">
		          <div class="circle"></div>
		        </div><div class="circle-clipper right">
		          <div class="circle"></div>
		        </div>
		      </div>

		      <div class="spinner-layer spinner-red">
		        <div class="circle-clipper left">
		          <div class="circle"></div>
		        </div><div class="gap-patch">
		          <div class="circle"></div>
		        </div><div class="circle-clipper right">
		          <div class="circle"></div>
		        </div>
		      </div>

		      <div class="spinner-layer spinner-yellow">
		        <div class="circle-clipper left">
		          <div class="circle"></div>
		        </div><div class="gap-patch">
		          <div class="circle"></div>
		        </div><div class="circle-clipper right">
		          <div class="circle"></div>
		        </div>
		      </div>

		      <div class="spinner-layer spinner-green">
		        <div class="circle-clipper left">
		          <div class="circle"></div>
		        </div><div class="gap-patch">
		          <div class="circle"></div>
		        </div><div class="circle-clipper right">
		          <div class="circle"></div>
		        </div>
		      </div>
		    </div>
		 </div>
		
		<div id="1" >
			 
			 <div class="row card curve">
			    <div class="col s11">
			      <div class="row">
			       <h4 class="center-align" style="padding-top: 2%;">Leader</h4>
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="first_name" type="text" name="first_name" class="validate">
			          <label for="first_name">First Name</label>
					  </div>
					  <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="last_name" type="text" name="last_name" class="validate">
			          <label for="last_name">Last Name</label>
			        </div>
			       </div>
					<div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="number" type="text" name="lnumber" class="validate">
			          <label for="number">Mobile Number</label>
			        </div>
			       </div>

			       <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="email" type="text" name="lemail" class="validate">
			          <label for="email">Email</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  type="date" name="ldob" id="datepick1" class="datepicker">
			          <label for="datepick1">Date of Birth</label>
			        </div> 
			      </div>

			      <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="dept" type="text" name="ldept" class="validate">
			          <label for="dept">Department</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          
					  <select id="year" class="browser-default">
					  <option value="" disabled selected>Select Studying Year</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					  </select>
			        </div>
			      </div>

			      <div class="row">
			         <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="clg_name" type="text" name="lclg" class="validate">
			          <label for="clg_name">College Name</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="city" type="text" class="validate">
			          <label for="city">City</label>
			        </div>
			      </div>

			      <div class="row center-align">
			      	Gender
			      	<p class="center-align">
				      <input  onkeypress="submit();"  class="with-gap noEnterSubmit" name="lgender" value="Male" type="radio" id="male1"  />
				      <label for="male1">Male</label>

				      <input  onkeypress="submit();"  class="with-gap noEnterSubmit" name="lgender" value="Female" type="radio" id="female1"  />
				      <label for="female1">Female</label>
				    </p>
			      </div>
			    </div>
			</div>
			 
		</div>
				<div id="2" class="row card curve">
				   <div class="col s11">
				     <h4 class="center-align" style="padding-top: 2%;">Member 1</h4>
				      <!--<div class="row">
				      <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="first_name" type="text" name="user_name" class="validate">
			          <label for="first_name">Full Name</label>
			        </div>-->
					
					<div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="first_name" type="text" name="first_name" class="validate">
			          <label for="first_name">First Name</label>
					  </div>
					  <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="last_name" type="text" name="last_name" class="validate">
			          <label for="last_name">Last Name</label>
			        </div>
			       </div>
					
					
				   <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="number" type="text" name="number" class="validate">
			          <label for="number">Mobile Number</label>
			        </div>
			       </div>

			       <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="email" type="text" name="email" class="validate">
			          <label for="email">Email</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  type="date" name="ldob" id="datepick2" class="datepicker">
			          <label for="datepick2">Date of Birth</label>
			        </div> 
			      </div>

			      <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="dept" type="text" name="dept" class="validate">
			          <label for="dept">Department</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          
					  <select id="year" class="browser-default">
					  <option value="" disabled selected>Select Studying Year</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					  </select>
			        </div>
			      </div>

			      <div class="row">
			         <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="clg_name" type="text" name="clg" class="validate">
			          <label for="clg_name">College Name</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="city" type="text" class="validate">
			          <label for="city">City</label>
			        </div>
			      </div>

			      <div class="row center-align" id="rates">
			      	Gender
			      	<p class="center-align">
				      <input  onkeypress="submit();"  class="with-gap" value="Male" name="gender1" type="radio" id="male2"  />
				      <label for="male2">Male</label>

				      <input  onkeypress="submit();"  class="with-gap" value="Female" name="gender1" type="radio" id="female2"  />
				      <label for="female2">Female</label>
				    </p>
			      </div>
			    </div>
			</div>


		<div id="3" class="row card curve">
				   <div class="col s11">
				     <h4 class="center-align" style="padding-top: 2%;">Member 2</h4>
				      
					
					<div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="first_name" type="text" name="first_name" class="validate">
			          <label for="first_name">First Name</label>
					  </div>
					  <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="last_name" type="text" name="last_name" class="validate">
			          <label for="last_name">Last Name</label>
			        </div>
			       </div>
					
					
				   <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="number" type="text" name="number" class="validate">
			          <label for="number">Mobile Number</label>
			        </div>
			       </div>

			       <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="email" type="text" name="email" class="validate">
			          <label for="email">Email</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			            <input  onkeypress="if(event.keyCode == 13)submit();"  type="date" name="ldob" id="datepick3" class="datepicker">
			          <label for="datepick3">Date of Birth</label>
			        </div> 
			      </div>

			      <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="dept" type="text" name="dept" class="validate">
			          <label for="dept">Department</label>
			        </div><div class="input-field col s5 offset-s1">
			          
					  <select id="year" class="browser-default">
					  <option value="" disabled selected>Select Studying Year</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					  </select>
			        </div>
			      </div>

			      <div class="row">
			         <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="clg_name" type="text" name="clg" class="validate">
			          <label for="clg_name">College Name</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="city" type="text" class="validate">
			          <label for="city">City</label>
			        </div>
			      </div>

			      <div class="row center-align">
			      	Gender
			      	<p class="center-align">
				      <input  onkeypress="if(event.keyCode == 13)submit();"  class="with-gap" value="Male" name="gender2" type="radio" id="male3"  />
				      <label for="male3">Male</label>

				      <input  onkeypress="if(event.keyCode == 13)submit();"  class="with-gap" value="Female" name="gender2" type="radio" id="female3"  />
				      <label for="female3">Female</label>
				    </p>
			      </div>
			    </div>
			</div>


		<div id="4" class="row card curve">
				   <div class="col s11">
				     <h4 class="center-align" style="padding-top: 2%;">Member 3</h4>

				     <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="first_name" type="text" name="first_name" class="validate">
			          <label for="first_name">First Name</label>
					  </div>
					  <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="last_name" type="text" name="last_name" class="validate">
			          <label for="last_name">Last Name</label>
			        </div>
			       </div>
					
					
				   <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="number" type="text" name="number" class="validate">
			          <label for="number">Mobile Number</label>
			        </div>
			       </div>


			       <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="email" type="text" name="email" class="validate">
			          <label for="email">Email</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  type="date" name="ldob" id="datepick4" class="datepicker">
			          <label for="datepick4">Date of Birth</label>
			        </div> 
			      </div>

			      <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="dept" type="text" name="dept" class="validate">
			          <label for="dept">Department</label>
			        </div><div class="input-field col s5 offset-s1">
			          
					  <select id="year" class="browser-default">
					  <option value="" disabled selected>Select Studying Year</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					  </select>
			        </div>
			      </div>

			      <div class="row">
			         <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="clg_name" type="text" name="clg" class="validate">
			          <label for="clg_name">College Name</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="city" type="text" class="validate">
			          <label for="city">City</label>
			        </div>
			      </div>

			      <div class="row center-align">
			      	Gender
			      	<p class="center-align">
				      <input  onkeypress="if(event.keyCode == 13)submit();"  class="with-gap" value="Male" name="gender3" type="radio" id="male4"  />
				      <label for="male4">Male</label>

				      <input  onkeypress="if(event.keyCode == 13)submit();"  class="with-gap" value="Female" name="gender3" type="radio" id="female4"  />
				      <label for="female4">Female</label>
				    </p>
			      </div>
			    </div>
			</div>


		<div id="5" class="row card curve">
				   <div class="col s11">
				     <h4 class="center-align" style="padding-top: 2%;">Member 4</h4>
				      <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="first_name" type="text" name="first_name" class="validate">
			          <label for="first_name">First Name</label>
					  </div>
					  <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="last_name" type="text" name="last_name" class="validate">
			          <label for="last_name">Last Name</label>
			        </div>
			       </div>
					
					
				   <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="number" type="text" name="number" class="validate">
			          <label for="number">Mobile Number</label>
			        </div>
			       </div>

			       <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="email" type="text" name="email" class="validate">
			          <label for="email">Email</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  type="date" name="ldob" id="datepick5" class="datepicker">
			          <label for="datepick5">Date of Birth</label>
			        </div> 
			      </div>

			      <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="dept" type="text" name="dept" class="validate">
			          <label for="dept">Department</label>
			        </div>
					<div class="input-field col s5 offset-s1">  
					  <select id="year" class="browser-default">
					  <option value="" disabled selected>Select Studying Year</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					  </select>
			        </div>
			      </div>

			      <div class="row">
			         <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="clg_name" type="text" name="clg" class="validate">
			          <label for="clg_name">College Name</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="city" type="text" class="validate">
			          <label for="city">City</label>
			        </div>
			      </div>

			      <div class="row center-align">
			      	Gender
			      	<p class="center-align">
				      <input  onkeypress="if(event.keyCode == 13)submit();"  class="with-gap" value="Male" name="gender4" type="radio" id="male5"  />
				      <label for="male5">Male</label>

				      <input  onkeypress="if(event.keyCode == 13)submit();"  class="with-gap" value="Female" name="gender4" type="radio" id="female5"  />
				      <label for="female5">Female</label>
				    </p>
			      </div>
			    </div>
			</div>

			
		<div id="6" class="row card curve">
				   <div class="col s11">
				     <h4 class="center-align" style="padding-top: 2%;">Member 5</h4>
				    <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="first_name" type="text" name="first_name" class="validate">
			          <label for="first_name">First Name</label>
					  </div>
					  <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="last_name" type="text" name="last_name" class="validate">
			          <label for="last_name">Last Name</label>
			        </div>
			       </div>
					
					
				   <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="number" type="text" name="number" class="validate">
			          <label for="number">Mobile Number</label>
			        </div>
			       </div>

			       <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="email" type="text" name="email" class="validate">
			          <label for="email">Email</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  type="date" name="ldob" id="datepick6" class="datepicker">
			          <label for="datepick5">Date of Birth</label>
			        </div> 
			      </div>

			      <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="dept" type="text" name="dept" class="validate">
			          <label for="dept">Department</label>
			        </div>
					<div class="input-field col s5 offset-s1">  
					  <select id="year" class="browser-default">
					  <option value="" disabled selected>Select Studying Year</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					  </select>
			        </div>
			      </div>

			      <div class="row">
			         <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="clg_name" type="text" name="clg" class="validate">
			          <label for="clg_name">College Name</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="city" type="text" class="validate">
			          <label for="city">City</label>
			        </div>
			      </div>

			     <div class="row center-align">
			      	Gender
			      	<p class="center-align">
				      <input  onkeypress="if(event.keyCode == 13)submit();"  class="with-gap" value="Male" name="gender5" type="radio" id="male6"  />
				      <label for="male6">Male</label>

				      <input  onkeypress="if(event.keyCode == 13)submit();"  class="with-gap" value="Female" name="gender5" type="radio" id="female6"  />
				      <label for="female6">Female</label>
				    </p>
			      </div>
			    </div>
			</div>
			
			<div id="7" class="row card curve">
				   <div class="col s11">
				     <h4 class="center-align" style="padding-top: 2%;">Member 6</h4>
				      <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="first_name" type="text" name="first_name" class="validate">
			          <label for="first_name">First Name</label>
					  </div>
					  <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="last_name" type="text" name="last_name" class="validate">
			          <label for="last_name">Last Name</label>
			        </div>
			       </div>
					
					
				   <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="number" type="text" name="number" class="validate">
			          <label for="number">Mobile Number</label>
			        </div>
			       </div>

			       <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="email" type="text" name="email" class="validate">
			          <label for="email">Email</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  type="date" name="ldob" id="datepick7" class="datepicker">
			          <label for="datepick5">Date of Birth</label>
			        </div> 
			      </div>

			      <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="dept" type="text" name="dept" class="validate">
			          <label for="dept">Department</label>
			        </div>
					<div class="input-field col s5 offset-s1">  
					  <select id="year" class="browser-default">
					  <option value="" disabled selected>Select Studying Year</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					  </select>
			        </div>
			      </div>

			      <div class="row">
			         <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="clg_name" type="text" name="clg" class="validate">
			          <label for="clg_name">College Name</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input  onkeypress="if(event.keyCode == 13)submit();"  id="city" type="text" class="validate">
			          <label for="city">City</label>
			        </div>
			      </div>
				<div class="row center-align">
			      	Gender
			      	<p class="center-align">
				      <input  onkeypress="if(event.keyCode == 13)submit();"  class="with-gap" value="Male" name="gender6" type="radio" id="male7"  />
				      <label onkeypress="if(event.keyCode == 13)submit();"  for="male7">Male</label>

				      <input  onkeypress="if(event.keyCode == 13)submit();"  class="with-gap" value="Female" name="gender6" type="radio" id="female7"  />
				      <label onkeypress="if(event.keyCode == 13)submit();" for="female7">Female</label>
				    </p>
			      </div>
			    </div>
			</div>
			<form method="post" action="register_portal_1.php" >
			<input  onkeypress="if(event.keyCode == 13)submit();"  type="text" id="no_of_team" name="team_no" style="display:none"/>
			<input  onkeypress="if(event.keyCode == 13)submit();"   type="text" id="fees" name="fees" style="display:none"/>
			<input  onkeypress="if(event.keyCode == 13)submit();"  id="pay" type="submit" name="pay" style="display:none">
				  
			</form>
			<div class="col s10">
				 <a  onclick="submit()" class="btn btn-large waves-effect blue hide-on-large-only" style=" max-width: 150px; border-radius: 5%; margin-left: 40%;background-color:blue" ><i class="material-icons right">send</i> Submit
				  </a>

				  <a onclick="submit()" class="btn btn-large waves-effect blue hide-on-med-and-down" style=" max-width: 200px; border-radius: 5%; margin-left: 53%;background-color:blue" ><i class="material-icons right">send</i> Submit
				  </a>
				 
				</div>
			</div>
		</div>
		

	
	
      <!--Import jQuery before materialize.js-->
      <script src="https://www.gstatic.com/firebasejs/3.6.5/firebase.js"></script>
		<script>
		  // Initialize Firebase
		  var config = {
			apiKey: "AIzaSyDZHxJQ7UN9B80FqImAFw3z2lKPL1XmYao",
			authDomain: "projection-3d94b.firebaseapp.com",
			databaseURL: "https://projection-3d94b.firebaseio.com",
			storageBucket: "projection-3d94b.appspot.com",
			messagingSenderId: "565147429356"
		  };
		  firebase.initializeApp(config);
		</script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	  
	<script>

		$('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 37,
		max: new Date()
	  });
</script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	  
		<script>
		
		var user_no=1,event_name;
		var total_team,fees;
		var value; 
		
		var mRef = firebase.database().ref().child("tech_events");
		var mRef2 = firebase.database().ref().child("non-tech");
		var mRef3 = firebase.database().ref().child("robotics");
		var mRef4 = firebase.database().ref().child("Special Events");
		var mRef5 = firebase.database().ref().child("Workshops");
		
		mRef.on("child_added",snap => {
			var name = snap.child('name').val();
			var no = snap.child('id').val();
		});
		
	   $(document).ready(function() {
			
			$('#event').hide();
			$('#event2').hide();
			$('#event3').hide();
			$('#event4').hide();
			$('#event5').hide();	
			$('#team').hide();
			$('#1').hide();
			$('#2').hide();
			$('#3').hide();
			$('#4').hide();
			$('#5').hide();
			$('#6').hide();
			$('#7').hide();
			$('.preload').hide();
			
			$('#Type').on('change',function(){
						
					var no=$(this).val();
					
					value = $("#Type option:selected").text();

						//alert(value);
					

					
					if(no==1)
					{
						$('#event').show();
						$('#event2').hide();
						$('#event3').hide();
						$('#event4').hide();
						$('#event5').hide();
						$('#team').hide();
					}
					else if(no==2)
					{
						
						$('#event').hide();
						$('#event2').show();
						$('#event3').hide();
						$('#event4').hide();
						$('#event5').hide();
						$('#team').hide();
					}
					else if(no==3)
					{
						
						$('#event').hide();
						$('#event2').hide();
						$('#event3').show();
						$('#event4').hide();
						$('#event5').hide();
						$('#team').hide();
					}
					else if(no==4)
					{
						
						$('#event').hide();
						$('#event2').hide();
						$('#event3').hide();
						$('#event4').show();
						$('#event5').hide();
						$('#team').hide();
					}
					else 
					{
						
						$('#event').hide();
						$('#event2').hide();
						$('#event3').hide();
						$('#event4').hide();
						$('#event5').show();
						$('#team').hide();
					}
					
			});
			
			
				$('#event').on('change', function() {
					$('#1').hide();
					$('#2').hide();
					$('#3').hide();
					$('#4').hide();
					$('#5').hide();
					$('#6').hide();
					$('#7').hide();
					$('.preload').show();
					
					var no=$(this).val();
					var min,max;
					
					mRef.on("child_added",snap => {
						var id=snap.child('id').val();
						if(id==no)
						{
							fees = snap.child('fees').val();
							//alert(fees);
							min = snap.child('min-member').val();
							max = snap.child('max-member').val();
							event_name = snap.child('name').val();
							$('#team').html("<option value=\"\" disabled selected>Select Members</option>");
							for(var i=min;i<=max;i++)
							{
								$('#team').append("<option value=\""+i+"\">"+i+"</option>");
							}
							$('#team').show();
							$('.preload').hide();
						}
					});
					
				});
				
				
				$('#event2').on('change', function() {
					$('#1').hide();
					$('#2').hide();
					$('#3').hide();
					$('#4').hide();
					$('#5').hide();
					$('#6').hide();
					$('#7').hide();
					$('.preload').show();
					
					var no=$(this).val();
					var min,max;
					
					mRef2.on("child_added",snap => {
						var id=snap.child('id').val();
						if(id==no)
						{
							fees = snap.child('fees').val();
							//alert(fees);
							min = snap.child('min-member').val();
							max = snap.child('max-member').val();
							event_name = snap.child('name').val();
							$('#team').html("<option value=\"\" disabled selected>Select Members</option>");
							for(var i=min;i<=max;i++)
							{
								$('#team').append("<option value=\""+i+"\">"+i+"</option>");
							}
							$('#team').show();
							$('.preload').hide();
						}
					});
					
				});
				
				$('#event3').on('change', function() {
					$('#1').hide();
					$('#2').hide();
					$('#3').hide();
					$('#4').hide();
					$('#5').hide();
					$('#6').hide();
					$('#7').hide();
					$('.preload').show();
					
					var no=$(this).val();
					var min,max;
					
					mRef3.on("child_added",snap => {
						var id=snap.child('id').val();
						if(id==no)
						{
							fees = snap.child('fees').val();
							min = snap.child('min-member').val();
							max = snap.child('max-member').val();
							event_name = snap.child('name').val();
							$('#team').html("<option value=\"\" disabled selected>Select Members</option>");
							for(var i=min;i<=max;i++)
							{
								$('#team').append("<option value=\""+i+"\">"+i+"</option>");
							}
							$('#team').show();
							$('.preload').hide();
						}
					});
					
				});
				
				$('#event4').on('change', function() {
					$('#1').hide();
					$('#2').hide();
					$('#3').hide();
					$('#4').hide();
					$('#5').hide();
					$('#6').hide();
					$('#7').hide();
					$('.preload').show();
					
					var no=$(this).val();
					var min,max;
					
					mRef4.on("child_added",snap => {
						var id=snap.child('id').val();
						if(id==no)
						{
							fees = snap.child('fees').val();
							min = snap.child('min-member').val();
							max = snap.child('max-member').val();
							event_name = snap.child('name').val();
							$('#team').html("<option value=\"\" disabled selected>Select Members</option>");
							for(var i=min;i<=max;i++)
							{
								$('#team').append("<option value=\""+i+"\">"+i+"</option>");
							}
							$('#team').show();
							$('.preload').hide();
						}
					});
					
				});
				
				$('#event5').on('change', function() {
					$('#1').hide();
					$('#2').hide();
					$('#3').hide();
					$('#4').hide();
					$('#5').hide();
					$('#6').hide();
					$('#7').hide();
					$('.preload').show();
					
					var no=$(this).val();
					var min,max;
					
					mRef5.on("child_added",snap => {
						var id=snap.child('id').val();
						if(id==no)
						{
							fees = snap.child('fees').val();
							min = snap.child('min-member').val();
							max = snap.child('max-member').val();
							event_name = snap.child('name').val();
							$('#team').html("<option value=\"\" disabled selected>Select Members</option>");
							for(var i=min;i<=max;i++)
							{
								$('#team').append("<option value=\""+i+"\">"+i+"</option>");
							}
							$('#team').show();
							$('.preload').hide();
						}
					});
					
				});
				
			$('#team').on('change', function() {
				$('#1').hide();
				$('#2').hide();
				$('#3').hide();
				$('#4').hide();
				$('#5').hide();
				$('#6').hide();
				$('#7').hide();
				$('.preload').hide();
				 user_no = $('#team').val();
				 fees *= user_no;
				for(var i=1;i<=user_no;i++)
					$("#"+i).show();
			});
			$('select').material_select();
	});
	window.addEventListener('keydown',function(e){if(e.keyIdentifier=='U+000A'||e.keyIdentifier=='Enter'||e.keyCode==13){if(e.target.nodeName=='INPUT'&&e.target.type=='text'){e.preventDefault();submit(); return false;}}},true);

	
	
	function submit()
	{
			
			for(var i=1;i<=user_no;i++)
			{
				//alert("checking "+user_no);
				var fname = $("#"+i+" #first_name").val();
				var lname = $("#"+i+" #last_name").val();
				var number = $("#"+i+" #number").val();
				var email = $("#"+i+" #email").val();
				//var date = $("#"+i+" #date").val();
				
				var date = new Date($("#"+i+" #datepick"+i).val());
				  day = date.getDate();
				  month = date.getMonth() + 1;
				  year = date.getFullYear();
				var dates = day + " - " + month + " - " + year; 
				var dept = $("#"+i+" #dept").val();
				var std = $("#"+i+" #year").val();
				var college = $("#"+i+" #clg_name").val();
				var city = $("#"+i+" #city").val();
				
				var lgender = $('input[name=lgender]:checked').val();
				var gender1 = $('input[name=gender1]:checked').val();
				var gender2 = $('input[name=gender2]:checked').val();
				var gender3 = $('input[name=gender3]:checked').val();
				var gender4 = $('input[name=gender4]:checked').val();
				var gender5 = $('input[name=gender5]:checked').val();
				var gender6 = $('input[name=gender6]:checked').val();
				
				
				
				/*alert(lgender);
				alert(gender1);
				alert(gender2);
				alert(gender3);
				alert(gender4);
				alert(gender5);
				alert(gender6);*/
				
			if(fname == "" || lname == "" || number =="" || email == "" || date =="" || dept == "" || std =="" || college == "" || city =="")
				{
					alert("Please fill all fields");
					return;
				} 
				
				
				if(lgender == "" || gender1 =="" || gender2 == "" || gender3 =="" || gender4 == "" || gender5 == "" || gender6 == "" )
				{
					alert("Please Fill Your Gender");
					return;
				} 
			}
			
			var mRefSub = firebase.database().ref().child("teams");
			var mReftot = firebase.database().ref().child("total");
			
			mReftot.on("child_added",snap => {
				total_team = snap.child('no').val();
				
				total_team++;
				for(var i=1;i<=user_no;i++)
				{
					var pos;
					
					var fname = $("#"+i+" #first_name").val();
					var lname = $("#"+i+" #last_name").val();
					var number = $("#"+i+" #number").val();
					var email = $("#"+i+" #email").val();
					
					var date = new Date($("#"+i+" #datepick"+i).val());
					  day = date.getDate();
					  month = date.getMonth() + 1;
					  year = date.getFullYear();
					 var dates = day + " - " + month + " - " + year; 
					  
					
					var dept = $("#"+i+" #dept").val();
					var std = $("#"+i+" #year").val();
					var college = $("#"+i+" #clg_name").val();
					var city = $("#"+i+" #city").val();
					
					var gender1 = $('input[name=lgender]:checked').val();
					var gender2 = $('input[name=gender1]:checked').val();
					var gender3 = $('input[name=gender2]:checked').val();
					var gender4 = $('input[name=gender3]:checked').val();
					var gender5 = $('input[name=gender4]:checked').val();
					var gender6 = $('input[name=gender5]:checked').val();
					var gender7 = $('input[name=gender6]:checked').val();
					
					
					/*alert(fname);
					alert(lname);
					alert(number);
					alert(email);
					alert(dates);
					alert(dept);
					alert(std);
					alert(college);
					alert(city);
					alert(gender1);*/
					
					if(number.length != 10) {
						
						alert("Phone number must be 10 digits.");
						$("#"+i+" #number").focus();
						return false;
					}
					else
					{
							var mob = /^[1-9]{1}[0-9]{9}$/;
							if (mob.test(number) == false) {
							alert("Please enter valid mobile number.");
							return;
							}
					}
					
					if(!validateEmail(email))
					{
						$("#"+i+" #email").focus();
						return;
					}
					
					if(i==1){
						pos="leader-";
						mRefSub.child(""+total_team).child("team_no").set(total_team);
						}
					else
						pos="member-"+(i-1);
					
					mReftot.child("1").child("no").set(total_team);
					mRefSub.child(""+total_team).child("event_name").set(event_name);
					mRefSub.child(""+total_team).child(pos+"email").set(email);
					mRefSub.child(""+total_team).child(pos+"first_name").set(fname);
					mRefSub.child(""+total_team).child(pos+"last_name").set(lname);
					mRefSub.child(""+total_team).child(pos+"number").set(number);
					mRefSub.child(""+total_team).child(pos+"Dept").set(dept);
					mRefSub.child(""+total_team).child(pos+"Birth_Date").set(dates);
					mRefSub.child(""+total_team).child(pos+"Std_year").set(std);
					mRefSub.child(""+total_team).child(pos+"College_Name").set(college);
					mRefSub.child(""+total_team).child(pos+"City").set(city);
					mRefSub.child(""+total_team).child("payment").set("waiting");
					if(i==1)
					mRefSub.child(""+total_team).child(pos+"gender").set(gender1);
					else if(i==2)
					mRefSub.child(""+total_team).child(pos+"gender").set(gender2);

					else if(i==3)
					mRefSub.child(""+total_team).child(pos+"gender").set(gender3);

					else if(i==4)
					mRefSub.child(""+total_team).child(pos+"gender").set(gender4);

					else if(i==5)
					mRefSub.child(""+total_team).child(pos+"gender").set(gender5);					
					
					else if(i==6)
					mRefSub.child(""+total_team).child(pos+"gender").set(gender6);					
					
					else if(i==7)
					mRefSub.child(""+total_team).child(pos+"gender").set(gender7);					
				}
				$("#name_of_event").val(event_name);
				$("#no_of_team").val(total_team);
				$("#fees").val(fees);
			//alert(fees);
				
			//alert("Registered");
			
			
		
		//	alert("click");
			$("#pay").click();
			
		});
	}
	
	function validateEmail(sEmail) {
	  var reEmail = /^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!\.)){0,61}[a-zA-Z0-9]?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!$)){0,61}[a-zA-Z0-9]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/;
	  if(!sEmail.match(reEmail)) {
		alert("Invalid email address");
		return false;
	  }
	  return true;
	}
	$('.noEnterSubmit').keypress(function(e){
//		alert("test "+e.which);
    if ( e.which == 13 ){ submit();
		return false;
	}
    
});

	  </script>
    </body>
  </html>
        