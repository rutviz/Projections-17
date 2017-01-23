<?php


session_start();
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$event=$_SESSION['event'];
$no=$_SESSION['no'];
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
curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:37ff7049bb84a7c006fa8f086d82fa48",
                  "X-Auth-Token:f7f48c488f33329f618e3326c14cfe6c"));
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