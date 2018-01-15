<?php

require 'vendor/autoload.php';

use \atk4\ui\Header;

$number = $_GET['number'];

$app = new \atk4\ui\App('Welcome to the game!');
$app->initLayout('Centered');

$app->add(['Header', ' I won, your guessed number is '.$number.' !']);

$button = $app->layout->add(['Button', 'Play again.','iconRight'=>'refresh']);
$button->link(['main','max'=>100,'min'=>0]);
