<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 16.03.2017
 * Time: 8:26
 */

namespace core\abstraction;


class Abs_file_factory
{
    protected $current_file;

    protected function __construct($filename, $type)
    {
        $this->current_file = $filename . "." . $type;
        $this->checking($type, $filename);
    }

    protected function checking($type, $filename)
    {
        return new $type . "_controller" . ($filename);
    }
}