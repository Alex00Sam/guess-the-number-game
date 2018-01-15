<?php
require 'vendor/autoload.php';

use \atk4\ui\Header;

$app = new \atk4\ui\App('Welcome to the game!');
$app->initLayout('Centered');

$app->add(['Header', 'Instruction']);

$text = $app->add(['Text']);
$text->addParagraph('Эта игра демонстрирует, как использовать Links, Buttons, Headers, Text в Agile Toolkit.This game demonstrates how to use links, buttons, headers and text in Agile Toolkit.');
$text->addParagraph("You have to pick a number in interval 1-100. Next you press 'Start game!' button!");

$button = $app->layout->add(['Button', "Start game!",'iconRight'=>'smile']);
//$button->set(['primary'=>true]);
$button->link(['main','max'=>100,'min'=>0]);
$button->addClass('teal inverted');
