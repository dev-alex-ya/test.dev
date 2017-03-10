<?php
$app->get('/', function(){return 'index';});
$app->get('/home', function($request, $response){
    return $this->view->render($response, 'home.twig');

});