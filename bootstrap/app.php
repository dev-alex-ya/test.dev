<?php
session_start();
require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App(['displayErrorDetails' => true]);

$app->get('/', function (){return "index";});