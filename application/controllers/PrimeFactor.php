<?php
/**
 * Created by PhpStorm.
 * User: jerry.mei
 * Date: 2019/6/25
 * Time: 22:49
 */

class PrimeFactor
{
    public function getFactors($i)
    {
        $resArr = [];
        for ($j = 2; $j < $i; $j++) {
            while ($i % $j == 0 && $i != $j) {
                array_push($resArr, $j);
                $i = $i / $j;
            }
        }
        array_push($resArr, $i);
        return $resArr;
    }
}