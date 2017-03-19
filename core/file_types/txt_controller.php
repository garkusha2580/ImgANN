<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 15.03.2017
 * Time: 20:58
 */

namespace core\file_types;

use core\abstraction\Abs_file_cont;

class file_cont extends Abs_file_cont
{

    function __construct($filename)
    {
        parent::__construct($filename);
    }

    function delete()
    {
        // TODO: Implement delete() method.
    }

    protected function open()
    {
        // TODO: Implement open() method.
       return fopen($this->filename, $this->openType);
    }

    function read()
    {
        // TODO: Implement read() method.
        $data=file($this->filename);
        foreach($data as $v){
            echo "{$v}\n";
        }
    }

    function save($data)
    {
        // TODO: Implement save() method.
        $this->close();
        $this->unders("save");
        $stream=$this->open();
        fwrite($stream,$data."\n");
        $this->close();

    }

    function unders($type)
    {
        switch ($type) {
            case("create"):
                $this->openType = "w+";
                break;
            case ("write"):
                $this->openType = "w";
                break;
            case ("save"):
                $this->openType="a";
                break;
            default:
                $this->openType = "r";
        }
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        $this->close();
    }

    protected function close()
    {
        fclose($this->filename);
    }
}