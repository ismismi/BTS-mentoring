<?php

$students = array('Pris', 'Isma', 'Lucio');
$proyects = array('Book Manager', 'Job Board', 'Anon Suggestion box');


shuffle($proyects);

//print_r($proyects);
//print_r($students);

foreach ($students as $Student) {
	$idx = rand(0, 2);
	echo "<br> A " . $Student .
	 ' le toca el proy: ' . array_pop($proyects);
}