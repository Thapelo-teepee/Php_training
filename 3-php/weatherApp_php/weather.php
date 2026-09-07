<?php
require_once __DIR__ . '/vendor/autoload.php';
use Thapelo\WeatherAppPhp\WeatherService;
$weatherService = new WeatherService();

$city = 'Vienna';

$weather = $weatherService->getWeather($city);

var_dump($weather);