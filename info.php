<?php
$name = "Jo Brand";

echo getCelebPhoto(urlencode($name));



function getCelebPhoto($celeb) {
	$url = "https://ajax.googleapis.com/ajax/services/search/images?v=1.0&q=".$celeb;

	// sendRequest
	// note how referer is set manually
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_REFERER, "whoogle.fredb.me");
	$body = curl_exec($ch);
	curl_close($ch);

	// now, process the JSON string
	$json = json_decode($body);
	// now have some fun with the results...
//	echo "<pre>";
//	var_dump(json_decode($body));
//	echo "</pre>";
	$result = $json->responseData->results;

	$image = $result[0];
	$url = $image->url;

return $url;
}
exit();
?>


<?
phpinfo();
?>
