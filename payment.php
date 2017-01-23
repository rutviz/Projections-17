<?php
	include('instamojo.php');
	$api = new Instamojo\Instamojo('be603649dc53b0d1eef16dd894fc0e2a', 'cfcdb85a91462cd10ed34fbd3a50bdfe";', 'https://test.instamojo.com/api/1.1/');
	
	try {
		$response = $api->paymentRequestCreate(array(
			"purpose" => "Projections",
			"amount" => "1",
			"send_email" => true,
			"email" => "rutvizvyas27@gmail.com",
			"redirect_url" => "shareme.noads.biz/p17test/events.php"
			));
		print_r($response);
	}
	catch (Exception $e) {
		print('Error: ' . $e->getMessage());
	}
?>