<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  
  <title>Parallax Template - Materialize</title>

</head>
<body>
<div>
<form action="reg2.php">
	   <button  onclick="sub()" type="submit" name="action">Submit</button>
</form>
</div>
<script src="js/jquery.js"></script>
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

<script type="text/javascript">
	
	var firebaseRet = firebase.database().ref().child("user");
	   function sub()
	   {		   
	   
	   firebaseRet.on("child_added",snap => {
		   alert("hi");
			var total = snap.child(""+no).val();
			alert(total);
		});
	  }

</script>

	
</body>
</html>