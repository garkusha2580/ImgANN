<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 15.03.2017
 * Time: 21:02
 */


namespace core\factories;

use core\abstraction\Abs_file_factory;

class coreFactory extends Abs_file_factory
{
    protected function __construct($filename, $type)
    {
        parent::__construct($filename, $type);
    }
}