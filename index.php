<?php

use Jenssegers\Blade\Blade;

# Load Composer
require 'vendor/autoload.php';
require 'config.php';


if(DEV_MODE){
	$dotenv = Dotenv\Dotenv::create(__DIR__, 'example.env');
}else{
	$dotenv = Dotenv\Dotenv::create(__DIR__, '.env');
}

$dotenv->load();

Crew\Unsplash\HttpClient::init([
	'applicationId'	=> $_ENV['SPLASH_APP_ID'],
	'secret'		=> $_ENV['SPLASH_SECRET'],
	'callbackUrl'	=> $_ENV['SPLASH_CALLBACK'],
	'utmSource' => $_ENV['SPLASH_APP_NAME']
]);

$blade = new Blade('views', 'cache');

$json = file_get_contents("http://api.noopschallenge.com/hexbot");
$data = array();
$data = json_decode($json, true);
$hex = $data['colors'][0]['value'];


$colour = new Colour\ColourFind;


$data = [];

$search = $colour->returnName($hex);
$page = 1;
$per_page = 1;
$orientation = 'landscape';
$result = Crew\Unsplash\Search::photos($search, $page, $per_page, $orientation);


print_r($result);


$data['colour'] = $colour->returnName($hex);
$data['hex'] = $hex;

echo $blade->make('homepage')->with('data', $data);


