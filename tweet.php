<?php
require_once('TwitterAPIExchange.php');
$settings = array(
    'oauth_access_token' => 	"914862267426107394-T2Z3er3lkkJERLArkz3YmkYbdNuXd9h",
    'oauth_access_token_secret' => "pM0TZrkCgvBZSEC4Ec8a7KEBacL9sZrGPmDZ3ZVoMRkh4",
    'consumer_key' => "tifZNX6vAjDb54FXYkmvxRHZM",
    'consumer_secret' => "SGmPIls2AKpxlkg7saxfMnYD4PDj9M2N3WwxJ8GMehjHqPSJlS"
	);
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'GET';

$getfield = '?q=#mumbaifloods';

$twitter = new TwitterAPIExchange($settings);
$response =  $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();
echo($response);
var_dump(json_decode($response));
?>