<?php

require_once('twitter_proxysuggestions.php');

// Twitter OAuth Config options
$oauth_access_token = '517801153-tojQ0UocezSfqGHvKyg70M4zmqOagTF25YvFyU2M';
$oauth_access_token_secret = 'O2OWryesKJyX8EtYY5AsQnw45DqPNH7BEl2cMLcLbNQqe';
$consumer_key = 'pHWqXUqzDKmnzH73bYAfMIPeT';
$consumer_secret = '2Zq6dGr9RBy2rsnmmlKbktbtz5zPuuhyMfLg6MRd5drVoVqgdZ';
//$user_id = '1';
//$id = '1';
//$screen_name = 'ujjwaljoshi93';
//$count = 5;

$twitter_url = 'users/suggestions.json';
//$twitter_url .= '?id=' . $id;
//$twitter_url .= '?user_id=' . $user_id;
//$twitter_url .= '&screen_name=' . $screen_name;
//$twitter_url .= '&count=' . $count;

// Create a Twitter Proxy object from our twitter_proxysuggestions.php class
$twitter_proxysuggestions = new TwitterProxysuggestions(
	$oauth_access_token,			// 'Access token' on https://apps.twitter.com
	$oauth_access_token_secret,		// 'Access token secret' on https://apps.twitter.com
	$consumer_key,					// 'API key' on https://apps.twitter.com
	$consumer_secret				// 'API secret' on https://apps.twitter.com
	//$id
	//$user_id						// User id (http://gettwitterid.com/)
	//$screen_name,					// Twitter handle
	//$count							// The number of tweets to pull out
);

// Invoke the get method to retrieve results via a cURL request
$tweets = $twitter_proxysuggestions->get($twitter_url);

echo $tweets;

?>