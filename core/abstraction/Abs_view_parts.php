<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 16.03.2017
 * Time: 16:02
 */

namespace core\abstraction;


abstract class Abs_view_parts
{
    protected $elems_arr=array();
    public function __construct()
    {
        $this->view();
        $this->__destruct();
    }
    protected function view(){
        foreach($this->elems_arr as $v){
            echo $v."\n";
        }
    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        unset($this);
    }

}