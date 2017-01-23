<?php
	session_start();
	$email=$_SESSION['name'];
	$event=$_SESSION['event'];
	$no=$_SESSION['no'];
	$_GET['payment_id']
	echo "<script>var no=\"".$no."\"</script>";
?>
<script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
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
  mRef = firebase.database().ref().child('teams');
  mRef.child(""+no).child("payment").set("receivedit",function(error){
	if(error)
	{
		alert("payment received error in updating please contact Projections Team");
	}else{
		window.open("sucess.php","_self");
	}
  });

  
</script>