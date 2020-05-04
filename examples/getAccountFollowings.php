<?php
require __DIR__ . '../../vendor/autoload.php';
use Phpfastcache\Helper\Psr16Adapter;

/*$instagram = \InstagramScraper\Instagram::withCredentials('username', 'password', '
	path/to/cache/folder');*/

$instagram = \InstagramScraper\Instagram::withCredentials('brijeshtouch', 'iron#**#1', new Psr16Adapter('Files'));

$instagram->login();
sleep(2); // Delay to mimic user

$username = 'brijeshtouch';
$followers = [];
$account = $instagram->getAccount($username);



sleep(1);
$followers = $instagram->getFollowing($account->getId(), 1000, 100, true); // Get 1000 followings of 'kevin', 100 a time with random delay between requests

//echo $account->getId(); die;

//echo "<pre>"; print_r($followers); die;




echo '<pre>' . json_encode($followers, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '</pre>';