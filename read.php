<?php

require __DIR__ . '/vendor/autoload.php';

// $log = new Monolog\Logger('name');
// $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
// $log->addWarning('Foo');

$loader = require __DIR__ . '/vendor/autoload.php';
$loader->addPsr4('Acme\\Test\\', __DIR__);


use BoyHagemann\Wave\Wave;

// if ( ! class_exists('User')) 
//     die('There is no hope!');


echo "\nhello php!";

$wave = new Wave();
$wave->setFilename('test.wav');

$data = $wave->getWaveformData();

// echo serialize($data);


// Get the amplitude values for each channel
foreach($data->getChannels() as $channel) {
    $amplitudes[] = $channel->getValues();

    print_r($amplitudes);
    echo serialize($amplitudes);

}




// $log = new Monolog\Logger('name');
// $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
// $log->addWarning($data);

#header("Content-Type: plain/text");
// print_r($data);

// print_r( gettype($data));

echo "\ndone!";

?>