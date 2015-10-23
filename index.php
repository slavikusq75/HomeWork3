<?php

require 'vendor/autoload.php';

use HotelRooms\BungalowHotelRoom;
use HotelRooms\MainBuildingHotelRoom;

$room1=new BungalowHotelRoom(array
(
    "parastatus"=>"1",
    "price"=>"200 USD per day",
    "number"=>"1",
));

$room1->dataOutput();

$room2=new BungalowHotelRoom(array
(
    "parastatus"=>"0",
    "price"=>"100 USD per day",
    "number"=>"2",
));

$room2->dataOutput();
$room2->paranormalActivity(1);
$room2->dataOutput();


$room1408=new MainBuildingHotelRoom(array
(
    "parastatus"=>"1",
    "price"=>"200 USD per day",
    "number"=>"1408",
));

$room1408->dataOutput();
$room1408->paranormalActivity(2);
$room1408->dataOutput();

$room1000=new MainBuildingHotelRoom(array
(
    "parastatus"=>"0",
    "price"=>"200 USD per day",
    "number"=>"1000",
));

$room1000->dataOutput();
$room1000->paranormalActivity(0);
$room1000->dataOutput();








