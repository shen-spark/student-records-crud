<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
->withServiceAccount('crud-shen-firebase-adminsdk-fbsvc-450ba94285.json')
->withDatabaseUri('https://crud-shen-default-rtdb.firebaseio.com');

$database = $factory->createDatabase();

?>