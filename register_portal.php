
<?php

	if(isset($_POST['pay']))
	{
		$name=$_POST['luser_name'];
		$no=$_POST['team_no'];
		$number=$_POST['lnumber'];
		$event=$_POST['event_name'];
		$email=$_POST['lemail'];
		$amount=$_POST['fees'];
		
		//echo $email." ".$no." ".$number." ".$event." ".$amount;
		session_start();
		$_SESSION['name']=$name;
		$_SESSION['email']=$email;
		$_SESSION['event']=$event;
		$_SESSION['amount']=$amount;
		$_SESSION['no']=$no;
		$_SESSION['number']=$number;
		header("location:payment/index.php");
	}
?>
  
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css--> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <style>
		body{
			background-color:#fff;
		}
		select{
			margin-bottom:10px;
		}
		.btn{
		
		}
		
	  </style>
    </head>

    <body>
	
	<div class="container" style="width:50%;">
		<form method="post" action="register_portal.php" class="row" style="padding:10%">
		
		<div class="col s12">
			<select id="event" class="browser-default">
				<option value="" disabled selected >Select the Event</option>
				 <optgroup id="tech_events" label="Tech">
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
				  </optgroup>
				  <optgroup label="Non-Technical">
					<option value="1">Angry Bird</option>
					<option value="2">Black Out</option>
					<option value="3">Box Cricket</option>
					<option value="4">Box Football</option>
					<option value="5">Dr. Holmes</option>
					<option value="6">Ground Zero</option>
					<option value="7">IPL</option>
					<option value="8">Lazer Combact</option>
					<option value="9">Lazer Maze</option>
					<option value="10">Lemme Take a Selfie</option>
					<option value="11">Talent Hunt</option>
					<option value="12">TOD Reloaded</option>
				  </optgroup>	
			</select>
			<input class="hide" type="text" id="name_of_event" name="event_name"/>
			<input class="hide" type="text" id="no_of_team" name="team_no"/>
			<select id="team" class="browser-default"></select>
		</div>
		
			<div class="form">
				<div class="preload">
				<div class="preloader-wrapper small active">
					<div class="spinner-layer spinner-green-only">
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
				 <input id="fees" style="display:none" name="fees"/>
		<div id="1">
			<h4	 align="center" style="padding:10%">Leader</h4>
			<div class="row">
			<div class="col s12">
				<div class="row">
					<div class="input-field col s6">
					  <input name="luser_name" placeholder="Placeholder" onkeypress="if(event.keyCode == 13)submit();" id="first_name" type="text" class="validate">
					  <label for="first_name">First Name</label>
					</div>
					<div class="input-field col s6">
					  <input id="number" name="lnumber" onkeypress="if(event.keyCode == 13)submit();" type="text" class="validate">
					  <label for="number">Number</label>
					</div>
					<div class="input-field col s6">
					  <input id="email" name="lemail" onkeypress="if(event.keyCode == 13)submit();" type="text" class="validate">
					  <label for="last_name">Email</label>
					</div>
				</div>
			</div>
			
				<div id="2">
					<h4	 align="center" style="padding:10%">Member 1</h4>
					 <div class="input-field col s6">
					  <input placeholder="Placeholder" onkeypress="if(event.keyCode == 13)submit();" id="first_name" type="text" class="validate">
					  <label for="first_name">First Name</label>
					</div>
					<div class="input-field col s6">
					  <input id="number" type="text" onkeypress="if(event.keyCode == 13)submit();" class="validate">
					  <label for="number">Last Name</label>
					</div>
					<div class="input-field col s6">
					  <input id="email" name="email" onkeypress="if(event.keyCode == 13)submit();" type="text" class="validate">
					  <label for="last_name">Email</label>
					</div>
				</div>
				
				<div id="3">
					<h4	 align="center" style="padding:10%">Member 2</h4>
					 <div class="input-field col s6">
					  <input placeholder="Placeholder" id="first_name" onkeypress="if(event.keyCode == 13)submit();" type="text" class="validate">
					  <label for="first_name">First Name</label>
					</div>
					<div class="input-field col s6">
					  <input id="number" type="text" onkeypress="if(event.keyCode == 13)submit();" class="validate">
					  <label for="number">Last Name</label>
					</div>
					<div class="input-field col s6">
					  <input id="email" name="email" onkeypress="if(event.keyCode == 13)submit();" type="text" class="validate">
					  <label for="last_name">Email</label>
					</div>
				</div>
				
				<div id="4">
					<h4	 align="center" style="padding:10%">Member 3</h4>
					 <div class="input-field col s6">
					  <input placeholder="Placeholder" id="first_name" onkeypress="if(event.keyCode == 13)submit();" type="text" class="validate">
					  <label for="first_name">First Name</label>
					</div>
					<div class="input-field col s6">
					  <input id="last_name" type="text" onkeypress="if(event.keyCode == 13)submit();" class="validate">
					  <label for="last_name">Last Name</label>
					</div>
					<div class="input-field col s6">
					  <input id="email" name="email" onkeypress="if(event.keyCode == 13)submit();" type="text" class="validate">
					  <label for="last_name">Email</label>
					</div>
				</div>
				
				<div id="5">
					<h4	 align="center" style="padding:10%">Member 4</h4>
					 <div class="input-field col s6">
					  <input placeholder="Placeholder" id="first_name" onkeypress="if(event.keyCode == 13)submit();" type="text" class="validate">
					  <label for="first_name">First Name</label>
					</div>
					<div class="input-field col s6">
					  <input id="last_name" type="text" onkeypress="if(event.keyCode == 13)submit();" class="validate">
					  <label for="last_name">Last Name</label>
					</div>
					<div class="input-field col s6">
					  <input id="email" name="email" onkeypress="if(event.keyCode == 13)submit();" type="text" class="validate">
					  <label for="last_name">Email</label>
					</div>
				</div>
				
				<div class="col s12">
				 <div onclick="submit()" class="btn waves-effect blue waves-light" style="width:100%" >Submit
				  </div>
				  <button id="pay" type="submit" name="pay" style="display:none">Submit
				  </button>
				</div>
				
			</div>
			</div>
		</div>
		</form>
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
		var user_no,event_name;
		var total_team,fees;
		var mRef = firebase.database().ref().child("tech_events");
		
		mRef.on("child_added",snap => {
			var name = snap.child('name').val();
			var no = snap.child('id').val();
		});
		
	   $(document).ready(function() {
			$('#team').hide();
			$('#1').hide();
			$('#2').hide();
			$('#3').hide();
			$('#4').hide();
			$('#5').hide();
			$('.preload').hide();
			
				$('#event').on('change', function() {
					$('#1').hide();
					$('#2').hide();
					$('#3').hide();
					$('#4').hide();
					$('#5').hide();
					$('.preload').show();
					
					var no=$(this).val();
					var min,max;
					
					mRef.on("child_added",snap => {
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
				var val = $("#"+i+" #first_name").val();
				var val1 = $("#"+i+" #number").val();
				if(val == "" || val1 =="" )
				{
					alert("Please fill all fields");
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
				
				var val = $("#"+i+" #first_name").val();
				var number = $("#"+i+" #number").val();
				var email = $("#"+i+" #email").val();
				alert(number.length);
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
				mRefSub.child(""+total_team).child(pos+"first_name").set(val);
				mRefSub.child(""+total_team).child(pos+"email").set(email);
				
				mRefSub.child(""+total_team).child("payment").set("waiting");
				
				
			}
			$("#name_of_event").val(event_name);
				$("#no_of_team").val(total_team);
				$("#fees").val(fees);
				alert(fees);
				
			alert("Registered");
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
	  </script>
    </body>
  </html>
=======

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
			padding-top: 3% !important;
	    	margin-left: 0.5%;
	    }

	    .svgs_right{
 
	    	float: right;
	    	margin-top: 3%;
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
    </head>

    <body>
	
	<?php include('header.html'); ?>

	 <div class="svg_group" style="background-color: #222; height: 330px;">
	    
	    <div class="svgs_right hide-on-med-and-down">
	    	<?php include('amaze.html'); ?>
	    </div>

	    <div class="svgs_left">
	    	<?php include('amaze.html'); ?>
	    	<img class="hide-on-med-and-down" src="images/logop17.png" style=" width: 11%; margin-left: 4%;"/>
	    </div>
	    
	</div> 
        
	<div class="row" style="padding:2%">
	<div id="regis"> <h3>Register Here</h3> </div>
	<div class="col s10">
		  <div class="card horizontal" id="cardopt">

			  <select id="event" class="browser-default">
				<option value="" disabled selected>Select the Event</option>
				 <optgroup id="tech_events" label="Tech">
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
				  </optgroup>
				  <optgroup label="Non-Technical">
					<option value="1">Angry Bird</option>
					<option value="2">Black Out</option>
					<option value="3">Box Cricket</option>
					<option value="4">Box Football</option>
					<option value="5">Dr. Holmes</option>
					<option value="6">Ground Zero</option>
					<option value="7">IPL</option>
					<option value="8">Lazer Combact</option>
					<option value="9">Lazer Maze</option>
					<option value="10">Lemme Take a Selfie</option>
					<option value="11">Talent Hunt</option>
					<option value="12">TOD Reloaded</option>
				  </optgroup>
				
			  </select>
			  <select id="team" class="browser-default">
			  </select>
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
			    <form class="col s11">
			      <div class="row">
			       <h4 class="center-align" style="padding-top: 2%;">Leader</h4>
			        <div class="input-field col s5 offset-s1">
			          <input id="luser_name" type="text" name="luser_name" class="validate">
			          <label for="luser_name">Full Name</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input id="number" type="text" name="lnumber" class="validate">
			          <label for="number">Mobile Number</label>
			        </div>
			       </div>

			       <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input id="email" type="text" name="lemail" class="validate">
			          <label for="email">Email</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input type="date" name="ldob" id="datepick1" class="datepicker">
			          <label for="datepick1">Date of Birth</label>
			        </div> 
			      </div>

			      <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input id="dept" type="text" name="ldept" class="validate">
			          <label for="dept">Department</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input id="std_year" type="text" name="lstd" class="validate">
			          <label for="std_year">Studying Year</label>
			        </div>
			      </div>

			      <div class="row">
			         <div class="input-field col s5 offset-s1">
			          <input id="clg_name" type="text" name="lclg" class="validate">
			          <label for="clg_name">College Name</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input id="city" type="text" class="validate">
			          <label for="city">City</label>
			        </div>
			      </div>

			      <div class="row center-align">
			      	Gender
			      	<p class="center-align">
				      <input class="with-gap" name="lgender" type="radio" id="male1"  />
				      <label for="male1">Male</label>

				      <input class="with-gap" name="lgender" type="radio" id="female1"  />
				      <label for="female1">Female</label>
				    </p>
			      </div>
			    </form>
			</div>
		</div>
				<div id="2" class="row card curve">
				   <form class="col s11">
				     <h4 class="center-align" style="padding-top: 2%;">Member 1</h4>
				      <div class="row">
				      <div class="input-field col s5 offset-s1">
			          <input id="luser_name" type="text" name="user_name" class="validate">
			          <label for="luser_name">Full Name</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input id="number" type="text" name="number" class="validate">
			          <label for="number">Mobile Number</label>
			        </div>
			       </div>

			       <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input id="email" type="text" name="email" class="validate">
			          <label for="email">Email</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input type="date" name="ldob" id="datepick2" class="datepicker">
			          <label for="datepick2">Date of Birth</label>
			        </div> 
			      </div>

			      <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input id="dept" type="text" name="dept" class="validate">
			          <label for="dept">Department</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input id="std_year" type="text" name="std" class="validate">
			          <label for="std_year">Studying Year</label>
			        </div>
			      </div>

			      <div class="row">
			         <div class="input-field col s5 offset-s1">
			          <input id="clg_name" type="text" name="clg" class="validate">
			          <label for="clg_name">College Name</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input id="city" type="text" class="validate">
			          <label for="city">City</label>
			        </div>
			      </div>

			      <div class="row center-align">
			      	Gender
			      	<p class="center-align">
				      <input class="with-gap" name="gender" type="radio" id="male2"  />
				      <label for="male2">Male</label>

				      <input class="with-gap" name="gender" type="radio" id="female2"  />
				      <label for="female2">Female</label>
				    </p>
			      </div>
			    </form>
			</div>


		<div id="3" class="row card curve">
				   <form class="col s11">
				     <h4 class="center-align" style="padding-top: 2%;">Member 2</h4>
				      <div class="row">
				      <div class="input-field col s5 offset-s1">
			          <input id="luser_name" type="text" name="user_name" class="validate">
			          <label for="luser_name">Full Name</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input id="number" type="text" name="number" class="validate">
			          <label for="number">Mobile Number</label>
			        </div>
			       </div>

			       <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input id="email" type="text" name="email" class="validate">
			          <label for="email">Email</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			            <input type="date" name="ldob" id="datepick3" class="datepicker">
			          <label for="datepick3">Date of Birth</label>
			        </div> 
			      </div>

			      <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input id="dept" type="text" name="dept" class="validate">
			          <label for="dept">Department</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input id="std_year" type="text" name="std" class="validate">
			          <label for="std_year">Studying Year</label>
			        </div>
			      </div>

			      <div class="row">
			         <div class="input-field col s5 offset-s1">
			          <input id="clg_name" type="text" name="clg" class="validate">
			          <label for="clg_name">College Name</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input id="city" type="text" class="validate">
			          <label for="city">City</label>
			        </div>
			      </div>

			      <div class="row center-align">
			      	Gender
			      	<p class="center-align">
				      <input class="with-gap" name="gender" type="radio" id="male3"  />
				      <label for="male3">Male</label>

				      <input class="with-gap" name="gender" type="radio" id="female3"  />
				      <label for="female3">Female</label>
				    </p>
			      </div>
			    </form>
			</div>


		<div id="4" class="row card curve">
				   <form class="col s11">
				     <h4 class="center-align" style="padding-top: 2%;">Member 3</h4>
				      <div class="row">
				      <div class="input-field col s5 offset-s1">
			          <input id="luser_name" type="text" name="user_name" class="validate">
			          <label for="luser_name">Full Name</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input id="number" type="text" name="number" class="validate">
			          <label for="number">Mobile Number</label>
			        </div>
			       </div>

			       <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input id="email" type="text" name="email" class="validate">
			          <label for="email">Email</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input type="date" name="ldob" id="datepick4" class="datepicker">
			          <label for="datepick4">Date of Birth</label>
			        </div> 
			      </div>

			      <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input id="dept" type="text" name="dept" class="validate">
			          <label for="dept">Department</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input id="std_year" type="text" name="std" class="validate">
			          <label for="std_year">Studying Year</label>
			        </div>
			      </div>

			      <div class="row">
			         <div class="input-field col s5 offset-s1">
			          <input id="clg_name" type="text" name="clg" class="validate">
			          <label for="clg_name">College Name</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input id="city" type="text" class="validate">
			          <label for="city">City</label>
			        </div>
			      </div>

			      <div class="row center-align">
			      	Gender
			      	<p class="center-align">
				      <input class="with-gap" name="gender" type="radio" id="male4"  />
				      <label for="male4">Male</label>

				      <input class="with-gap" name="gender" type="radio" id="female4"  />
				      <label for="female4">Female</label>
				    </p>
			      </div>
			    </form>
			</div>


		<div id="5" class="row card curve">
				   <form class="col s11">
				     <h4 class="center-align" style="padding-top: 2%;">Member 4</h4>
				      <div class="row">
				      <div class="input-field col s5 offset-s1">
			          <input id="luser_name" type="text" name="user_name" class="validate">
			          <label for="luser_name">Full Name</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input id="number" type="text" name="number" class="validate">
			          <label for="number">Mobile Number</label>
			        </div>
			       </div>

			       <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input id="email" type="text" name="email" class="validate">
			          <label for="email">Email</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input type="date" name="ldob" id="datepick5" class="datepicker">
			          <label for="datepick5">Date of Birth</label>
			        </div> 
			      </div>

			      <div class="row">
			        <div class="input-field col s5 offset-s1">
			          <input id="dept" type="text" name="dept" class="validate">
			          <label for="dept">Department</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input id="std_year" type="text" name="std" class="validate">
			          <label for="std_year">Studying Year</label>
			        </div>
			      </div>

			      <div class="row">
			         <div class="input-field col s5 offset-s1">
			          <input id="clg_name" type="text" name="clg" class="validate">
			          <label for="clg_name">College Name</label>
			        </div>
			        <div class="input-field col s5 offset-s1">
			          <input id="city" type="text" class="validate">
			          <label for="city">City</label>
			        </div>
			      </div>

			      <div class="row center-align">
			      	Gender
			      	<p class="center-align">
				      <input class="with-gap" name="gender" type="radio" id="male5"  />
				      <label for="male5">Male</label>

				      <input class="with-gap" name="gender" type="radio" id="female5"  />
				      <label for="female5">Female</label>
				    </p>
			      </div>
			    </form>
			</div>


			<div class="col s10">
				 <button onclick="submit()" class="btn btn-large waves-effect blue waves-light hide-on-large-only" style=" max-width: 150px; border-radius: 5%; margin-left: 40%;" type="submit" name="action"><i class="material-icons right">send</i> Submit
				  </button>

				  <button onclick="submit()" class="btn btn-large waves-effect blue waves-light hide-on-med-and-down" style=" max-width: 200px; border-radius: 5%; margin-left: 53%;" type="submit" name="action"><i class="material-icons right">send</i> Submit
				  </button>
			</div>
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
	    selectMonths: true,
	    selectYears: 37, 
	    max: new Date()
	  });

		var mRef = firebase.database().ref().child("tech_events");
		mRef.on("child_added",snap => {
			var name = snap.child('name').val();
			var no = snap.child('id').val();
		});
		var user_no,event_name;
	   $(document).ready(function() {
			$('#team').hide();
			$('#1').hide();
			$('#2').hide();
			$('#3').hide();
			$('#4').hide();
			$('#5').hide();
			$('.preload').hide();
			$('#event').on('change', function() {
				$('#1').hide();
				$('#2').hide();
				$('#3').hide();
				$('#4').hide();
				$('#5').hide();
				$('.preload').show();
				var no=$(this).val();
				var min,max;
				mRef.on("child_added",snap => {
				var id=snap.child('id').val();
				if(id==no){
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
				$('.preload').hide();
				 user_no = $('#team').val();
				for(var i=1;i<=user_no;i++)
					$("#"+i).show();
			});
			$('select').material_select();
	  });
	  function submit()
	  {
		for(var i=1;i<=user_no;i++)
		{
			var val = $("#"+i+" #first_name").val();
			var val1 = $("#"+i+" #last_name").val();
			if(val == "" || val1 =="")
			{
				alert("Please fill all fields");
				return;
			} 
		}
		var total_team;
		var mRefSub = firebase.database().ref().child("teams");
		var mReftot = firebase.database().ref().child("total");
		mReftot.on("child_added",snap => {
			total_team = snap.child('no').val();
			total_team++;
			alert(total_team);
		});
		for(var i=1;i<=user_no;i++)
		{
			var pos;
			var val = $("#"+i+" #first_name").val();
			var val1 = $("#"+i+" #last_name").val();
			if(i==1)
				pos="leader-";
			else
				pos="member-"+(i-1);
				mReftot.child("1").child("no").set(total_team);
			mRefSub.child(""+total_team).child("event_name").set(event_name);
			mRefSub.child(""+total_team).child(pos+"first_name").set(val);
			mRefSub.child(""+total_team).child(pos+"last_name").set(val1);
				
		}
		alert("Registered");
	  } 
	  </script>
    </body>
  </html>
>>>>>>> 4ebb80068bfb02a01a5ef0b1ff23fadbf8f822e8
        