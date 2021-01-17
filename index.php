<?php

/**
 * Calculate for rectangle amount of all embedded rectangles with intersection
 * @param int $m > 1
 * @param int $n > 1
 * @return int (= 0 for incorrect args)
 */
function countEmbeddedRect(int $m, int $n) {
    if (($m <= 1) || ($n <= 1)) {
        var_dump ('Incorrect amount of dots, must be more than 1 for any side!');
        return 0;
    }

    return $m * ($m - 1) * $n * ($n - 1) / 4 ;
}

var_dump (countEmbeddedRect(9,9));