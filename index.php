<?php
require 'vendor/autoload.php';

use \Slim\Slim;
use Provider\OpenWeather\Service\WeatherService;
use Provider\OpenWeather\Model\WeatherQuery;

$app = new Slim();
$weatherService = new WeatherService();
$query = new WeatherQuery();
$query->setCity('Hamburg');

$app->get($weatherService->getEndPoint($query), function ($response) {
    var_dump($response);
});
$app->run();
