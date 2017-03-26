<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once("watch.php");

$testeString = "testeasd";


$testeArray = array( array("title"=>"rose", "price"=>1.25 , "number"=>15),
               array("title"=>"daisy", "price"=>0.75 , "number"=>25),
               array("title"=>"orchid", "price"=>1.15 , "number"=>7) 
             );

$testeArray2 = ['um','dois'];

$testeArray3 = array("title"=>"rose", "price"=>1.25 , "number"=>15);

$debugger = new watch();

$debugger->_break($testeArray3);




?> 
