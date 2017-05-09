<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 08.05.2017
 * Time: 9:46
 */

namespace temps\ann;


class Hopfield
{

    static public $sumMatrix = null;

    private function createMatrix($reference)
    {
        //function to  create matrix of reference count of the number
        $arr = null;
        $length = count($reference);
        for ($i = 0; $i < $length; $i++) {
            for ($j = 0; $j < $length; $j++) {
                $arr[$j][$i] = $reference[$i] * $reference[$j];
            }
        }
        return $arr;
    }

    public function createReferenceMatrix($reference)
    {   //function to create sum of all reference matrix
        $referenceMatrix = $this->createMatrix($reference);
        $len = count($referenceMatrix);
        $height = count($referenceMatrix[0]);
        for ($i = 0; $i < $len; $i++) {
            for ($j = 0; $j < $height; $j++) {
                //on diagonal of sum all matrix make 0
                $j == $i ? self::$sumMatrix[$j][$i] = 0 : self::$sumMatrix[$j][$i] += $referenceMatrix[$j][$i];
            }
        }
    }
}