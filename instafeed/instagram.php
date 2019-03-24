<?php
    
    // header('Content-Type: application/json');
	//The URL that we want to GET.
	$url = 'https://www.dcsamplify.com/partner/matalonia/'.$_POST['instaname'];
 
	//Use file_get_contents to GET the URL in question.
	$contents = file_get_contents($url);
 
//If $contents is not a boolean FALSE value.
	// if($contents !== false){
	//     //Print out the contents.
	//     echo json_encode($contents);
	// }
	echo $contents;
?>
	