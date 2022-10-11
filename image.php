<?php

require_once 'vendor/autoload.php';
use Intervention\Image\ImageManager;

// create an image manager instance with favored driver
$manager = new ImageManager(['driver' => 'gd']);

$image = $manager->make('public/bois.jpg')->resize(300, 200);
$image->save('public/bar-sm.jpg');


?>
