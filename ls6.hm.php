<?php
declare(strict_types=1);

//echo random_int(1,6) . "\n";
//sleep(1);
//$computer = random_int(1,6);

//echo "выпало: \n $computer";

echo "розыгрыш\n";
$lot1 = random_int(1,49);
$lot2 = random_int(1,49);
$lot3 = random_int(1,49);
$lot4 = random_int(1,49);
sleep(1);
$lot5 = random_int(1,49);

echo $lot1 . "\n" . $lot2 . "\n" . $lot3 . "\n" . $lot4 . "\n" . $lot5;

if ($lot1 === $lot2 && $lot1 === $lot3 && $lot1 === $lot4 && $lot1 === $lot5) { 
    echo "повторка попробуйте еще раз!" ;
    } ;