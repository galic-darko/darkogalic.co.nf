<?php

//phpinfo();
require_once __DIR__.'/silex/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function() { 
    return '{"hello" : " root"}'; 
}); 

$app->get('/hello', function($name) use($app) { 
    return '{"hello" : " default"}'; 
}); 


$app->get('/hello/{name}', function($name) use($app) { 
    return 'Hello '.$app->escape($name); 
}); 

$app['debug'] = true;
$app->run();

?>