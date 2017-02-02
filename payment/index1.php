<?php


session_start();
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$event=$_SESSION['event'];
$no=$_SESSION['num'];
$number=$_SESSION['number'];
$amount=$_SESSION['amount'];
		$_SESSION['name']=$name;
		$_SESSION['email']=$email;
		$_SESSION['event']=$event;
		$_SESSION['amount']=$amount;
		$_SESSION['no']=$no;
		$_SESSION['number']=$number;
//echo $email."email<br> ".$no."no <br>".$number." num<br>".$event." event<br> ".$amount." amount<br>".$name;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:81e33be378fed0c7a7cf9c597b0e1d64",
                  "X-Auth-Token:51b999d340f8ee52ce9286279f239956"));
$payload = Array(
    'purpose' => $event,
    'amount' => $amount,
    'phone' => $number,
    'buyer_name' => $name,
    'redirect_url' => 'http://www.shareme.noads.biz/payment/sucess.php',
    'send_email' => false,
    'webhook' => '',
    'send_sms' => true,
    'email' => $email,
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

$json_decode = json_decode($response,true);
$long_url = $json_decode['payment_request']['longurl'];
$id = $json_decode['payment_request']['id'];



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
Redirecting..
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
  var payID = "12345";
  mRef = firebase.database().ref().child('teams');
	mRef.child("<?php echo $no; ?>").child("payID").set("<?php echo $id; ?>",function(error){
			if(error)
			{
				alert("payment received error in updating please contact Projections Team");
			}else{
				window.open("<?php echo $long_url; ?>","_self")
			}
		  });
  
</script>
</body>
</html>