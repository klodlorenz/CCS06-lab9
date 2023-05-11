<?php

require "config.php";

use App\Pet;

try {
	Pet::register('Cody', 'Male', '10-17-2002', 'Cod', 'cody@gmail.com', 'Magalang Province', '09397424112');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Kath',
			'gender' => 'Female',
			'birthdate' => '08-11-2008',
			'owner' => 'Kathy',
			'email' => 'kath123@gmail.com',
			'address' => 'Magalang Province',
			'contact_number' => '09397243213'
		],
		[
			'name' => 'Jose',
			'gender' => 'Male',
			'birthdate' => '06-20-2014',
			'owner' => 'Drei',
			'email' => 'drei06@gmail.com',
			'address' => 'Magalang Province',
			'contact_number' => '09438756432'
		]
	];
	Pet::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}