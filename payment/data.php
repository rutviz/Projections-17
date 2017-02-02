<?php

	if(isset($_POST['pay']))
	{
		$name=$_POST['leder_name'];
		$no=$_POST['team_no'];
		$number=$_POST['lnumber'];
		$event=$_POST['event_name'];
		$email=$_POST['lemail'];
		//$amount=$_POST['fees'];
		
		//echo $email." ".$no." ".$number." ".$event." ".$amount;
		session_start();
		$_SESSION['name']=$name;
		$_SESSION['email']=$email;
		$_SESSION['event']=$event;
		//$_SESSION['amount']=$amount;
		$_SESSION['no']=$no;
		$_SESSION['number']=$number;
		header("location:index.php");
	}
?>


<!Doctype html>
<html>
<head>
<title>data</title>

 <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css--> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  
	  <style>
	  
		body
		{
			margin:0;
			padding:10px;
		}
		a
		{
			color:blue !important;
			font-weight:bold;
			
		}
		
		.tabs .indicator
		{
			background-color:black !important;
			height:3px;
			border-radius:50px;
		}
		table 
		{
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
			border: 3px solid green;
		}

		th
		{
			background-color: green;
			border: 1px solid green;
			color:white;
			text-align: center;
			padding: 8px;
		}
		td 
		{
			border: 1px solid #dddddd;
			text-align: center;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #dddddd;
		}
		
	  </style>	
	  
	  
</head>
<body>

<input id="leader" style="display:none" name="leader_name"/>
<input id="team_no" style="display:none" name="team_no"/>
<input id="number" style="display:none" name="lnumber"/>
<input id="event" style="display:none" name="event_name"/>
<input id="email" style="display:none" name="lemail"/>
<input id="fees" style="display:none" name="fees"/>
<input id="number" style="display:none" name="number"/>

<center>
	<ul id="tabs-swipe-demo" class="tabs">
		<li class="tab col s3"><a class="active" href="#test-swipe-1">Payment Due</a></li>
		<li class="tab col s3"><a href="#test-swipe-2">Payment Done</a></li>
	</ul> 
</center>

<hr disabled color="white">

<div id="box">
<div id="test-swipe-1" class="col s12 white">
	<table id="table1">
	<thead>
		<tr>
			<th>No.</th>
			<th>Fname</th>
			<th>Lname</th>
			<th>Email</th>
			<th>Eventname</th>
			<th>Payment Status</th>
		</tr>
	</thead>
	<tbody id="table_body">
		
	</tbody>
	</table>
</div>
</div>
<div id="test-swipe-2" class="col s12 ">
	
	<table>
	<thead>
		<tr>
			<th>No.</th>
			<th>Fname</th>
			<th>Lname</th>
			<th>Email</th>
			<th>Eventname</th>
			<th>Payment Status</th>
		</tr>
	</thead>
	<tbody id="table_body2">
		
	</tbody>
	</table>
	
</div>
  


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
			var rootRef = firebase.database().ref().child("teams");
			var rootRef2 = firebase.database().ref().child("tech_events");
			var a = 100;
			var num = 9999900000;
			rootRef.on("child_added",snap => {
				var team_no = snap.child("team_no").val();
				var fname = snap.child("leader-first_name").val();
				var lname = snap.child("leader-last_name").val();
				var email = snap.child("leader-email").val();
				var event = snap.child("event_name").val();
				var payment = snap.child("payment").val();
				var payID = snap.child("payID").val();
				
				
				
			
			if(payment == "waiting")
			{
				$("#table_body").append("<tr  id=\""+team_no+"\"><td>"+ team_no +"</td><td>"+ fname +"</td><td>"+ lname +"</td><td>"+ email +"</td><td>"+ event +"</td><td id=\"paydone"+ team_no +"\"><a href=\"https://test.instamojo.com/@rutvizvyas27/"+ payID +"\" id=\"pay"+ team_no +"\">Pay now</a></td></tr>");
			}
			else
			{
				$("#table_body2").append("<tr id=\""+team_no+"\"><td>"+ team_no +"</td><td>"+ fname +"</td><td>"+ lname +"</td><td>"+ email +"</td><td>"+ event +"</td><td> Payment-Done </td></tr>");
			}
				
			});
			
			rootRef.on("child_changed",snap => {
				var team_no = snap.child("team_no").val();
				var name = snap.child("leader-first_name").val();
				var email = snap.child("leader-email").val();
				var event = snap.child("event_name").val();
				var payment = snap.child("payment").val();
				var payID = snap.child("payID").val();
				
				if(payment == "waiting")
			{
				$("#table_body #"+team_no).html("<td>"+ team_no +"</td><td>"+ name +"</td><td>"+ email +"</td><td>"+ event +"</td><td id=\"paydone"+ team_no +"\"><a href=\"https://test.instamojo.com/@rutvizvyas27/"+ payID +"\" id=\"pay"+ team_no +"\">Pay now</a></td>");
					/*$("#leader").val(name);
					$("#team_no").val(team_no);
					$("#event").val(event);
					$("#email").val(email);
					$("#fees").val(a);
					$("#number").val(num);*/
					
			}
			else
			{
				$("#table_body #"+team_no).html("<td>"+ team_no +"</td><td>"+ name +"</td><td>"+ email +"</td><td>"+ event +"</td><td> Payment-Done </td>");
			}
				
				
				
			
			
				
			});
			
			
			
		</script>
		
		
	 

</body>
</html>