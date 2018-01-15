<?php

require 'vendor/autoload.php';

use \atk4\ui\Header;

$app = new \atk4\ui\App('Welcome to the game!');
$app->initLayout('Centered');

    $max = $_GET['max'];
    $min = $_GET['min'];

    $number = round(($max+$min)/2);

    $app->add(new Header(['Is your number '.$number.' ?', 'size'=>1]));

    $button = $app->layout->add(['Button', "Yes, that's it!",'icon'=>'empty star']);
    $button->set(['primary'=>true]);
    $button->link(['win','number'=>$number]);

    $button = $app->layout->add(['Button', "No, it's smaller.",'icon'=>'arrow down']);
    $button->link(['main','max'=>$number,'min'=>$min]);

    $button = $app->layout->add(['Button', "No, it's bigger.",'icon'=>'arrow up']);
    $button->link(['main','max'=>$max,'min'=>$number]);

    $button = $app->layout->add(['Button', 'Play again.','icon'=>'refresh']);
    $button->link(['index']);
