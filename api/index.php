<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function() use ( $app ) {
    
    echo "Welcome to REST API";
    
});

$app->get('/tasks', function() use ( $app ) {
    
    $tasks = getTasks();
    echo json_encode($tasks);

    
});

function getTasks() {
    
    $tasks = array (
        array('id'=>1,'description'=>'learn_REST','done'=>false),
        array('id'=>2,'description'=>'learn_JavaScript','done'=>false),
        array('id'=>3,'description'=>'learn_NodeJS','done'=>false),
    );
    return $tasks;
}

$app->run();

?>
