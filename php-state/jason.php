<?php

$foo = array('username' => 'foobar', 
			 'name'     => 'Isma',
			 'socialNetworks'  => array(
			 	array('twitter' => 'Ismi'),
			 	array('facebook' => 'LoverBoy69')

			 	),
			 'country'  => 'MX');


//print_r($foo);



echo "<br><br>";
$jason = json_encode($foo);

echo "El JASON ES: " . $jason;


$ulyses = '{"username":"foobar","name":"Isma","socialNetworks":[{"twitter":"Ismi"},{"facebook":"LoverBoy69"}],"country":"MX"}';


$bar = json_decode($ulyses);
echo "<br><br>";

print_r($bar);