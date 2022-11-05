<?php
    declare(strict_types=1);

    function getSum(float $x = 0, float $y = 0 ) : float{
        return $x + $y;
    }

    $result = getSum(.9, .3);

    echo $result;
?>