<?php


$url = 'https://api.sendgrid.com/api/mail.send.json';
$data = array('api_user' => 'matalonia', 'api_key' => 'Albertino13', 'to'=>'daniel@singularads.com',
				'toname' => 'gayankavirathne', 'subject' => 'singularads', 'text' => "username : ".$_POST['instaname']."\nFailed to find that name", 'from' => 'daniel@singularads.com' );

	// use key 'http' even if you send the request to https://...
		$options = array(
		    'http' => array(
		        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		        'method'  => 'POST',
		        'content' => http_build_query($data)
		    )
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		if ($result === FALSE) { /* Handle error */ }

		echo $result ;

?>
