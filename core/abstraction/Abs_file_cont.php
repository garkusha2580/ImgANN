<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 15.03.2017
 * Time: 20:55
 */

namespace core\abstraction;


abstract class Abs_file_cont
{
    protected $filename;
    protected $openType;

    protected function __construct($filename)
    {
        $this->filename = $filename;
    }

    protected abstract function open();

    protected abstract function save($data);

    protected abstract function read();

    protected abstract function delete();

    protected abstract function close();
}