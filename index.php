<?php

include "vendor/autoload.php";

use App\Bmw;
use App\Audi;

$newObj = new Bmw();
$newObj2 = new Audi();


echo $newObj->enginee."<br>";
echo $newObj2->enginee."<br>";

echo $newObj->type;


?>