<?php
	session_start();
		
		$no=$_SESSION['no'];
		$amount=$_SESSION['amount'];
		//$no="98";
		if(isset($_POST['pay']))
		{
			$name=$_POST['name'];
			$num=$_POST['no'];
			$number=$_POST['number'];
			$event=$_POST['event'];
			$email=$_POST['email'];
			

			$_SESSION['name']=$name;
			$_SESSION['email']=$email;
			$_SESSION['event']=$event;
			$_SESSION['amount']=$amount;
			$_SESSION['num']=$num;
			$_SESSION['number']=$number;
			header("location:index1.php");
			
		}
	
	
?>

<!Doctype html>
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
<title>
	Redirecting...
</title>

<style>
	#line
	{
		margin-top:5%;
	}
</style>
</head>
<body>
<div id="line">


<center><img src='images/Loading_icon.gif' width="220" height="150" /><br></center>

</div>

<h3><center>Please Wait...</center>
<center>we are redirecting to payment gateway page</center></h3>
</div>
<div id="detail">
<form method="post" action="index2.php" >
	<input type="text" id="name" name="name" />
	<input type="text" id="email" name="email"/>
	<input type="text" id="event" name="event"/>
	<input type="text" id="number" name="number"/>
	<input type="text" id="no" name="no"/>
	
			 <input  onkeypress="if(event.keyCode == 13)submit();"  id="pay" type="submit" name="pay" style="display:none">
				  </input>
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!--<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	  
	  <script>
		
		$("#detail").hide();
		
		var myvar = <?php echo json_encode($no); ?>;
		var a=0;
		
		
		var mRef = firebase.database().ref().child("teams");
		
		
		
		$(document).ready(function() {
			
			
			
					mRef.on("child_added",snap => {
					var no = snap.child('team_no').val();
					if(no == myvar)
					{
							var name = snap.child('leader-first_name').val();
							var email = snap.child('leader-email').val();
							var event = snap.child('event_name').val();
							var number = snap.child('leader-number').val();
							var no = snap.child('team_no').val();
							
							/*alert(name);
							alert(email);
							alert(event);
							alert(number);
							alert(no);
							*/
							$("#name").val(name);
							$("#email").val(email);
							$("#event").val(event);
							$("#number").val(number);
							$("#no").val(no);
							a=1;
							
					}
					
					
			if(a==1){
				$("#pay").click();
			}
				
			});
			
	});
		
	  </script>
	  
</body>
</html>