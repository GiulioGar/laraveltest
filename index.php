<?php
require_once "vendor/autoload.php";

$faker= Faker\Factory::create('it_IT');

echo $faker->name();
?>

