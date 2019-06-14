<?php

use Jenssegers\Blade\Blade;

# Load Composer
require 'vendor/autoload.php';
$blade = new Blade('views', 'cache');

$json = file_get_contents("http://api.noopschallenge.com/hexbot");
$data = array();
$data = json_decode($json, true);
$hex = $data['colors'][0]['value'];

$colour = new Colour\ColourFind;

$data = [];
$data['colour'] = $colour->returnName($hex);
$data['hex'] = $hex;

echo $blade->make('homepage')->with('data', $data);


