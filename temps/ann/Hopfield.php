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
                $j == $i ? self::$sumMatrix[$i][$j] = 0 : self::$sumMatrix[$i][$j] += $referenceMatrix[$i][$j];
            }
        }
    }

    public function createVector($example)
    {
        $arr = array();
        $lenExample = count($example);
        $lenReference = count(self::$sumMatrix[0]);
        for ($i = 0; $i < $lenExample; $i++) {
            for ($j = 0; $j < $lenReference; $j++) {
                $arr[$i] += self::$sumMatrix[$i][$j]*$example[$j];
            }
        }
        return $this->polarBin($arr);
    }

    public function viewMatrix($matrix)
    {
        echo "<table border='1px'>";
        foreach ($matrix as $v) {
            echo "<tr>";
            foreach ($v as $j) {
                echo <<<html
                    <td>{$j}</td>
html;

            }
            echo "</tr>";
        }
        echo "</table>";
    }
    private function polarBin($vector){
       array_walk_recursive($vector,function(&$v,$k){
         $v= $v<0?-1:1;
       });
       return $vector;
    }
}