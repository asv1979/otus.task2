<?php
declare(strict_types=1);

use asv2108\String\MathStringChecker;

$checker = new MathStringChecker();

try {
    $handle = fopen("math.txt", "r");
    while (!feof($handle)) {
        $buffer = fgets($handle, 4096);
        var_dump ($checker($buffer));
    }
} catch(Exception $e) {
    var_dump($e->getMessage());
}
