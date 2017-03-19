<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 14.03.2017
 * Time: 14:39
 */


require_once(__DIR__ . "/../vendor/autoload.php");
require_once(__DIR__ . "/../core/Controller.php");
use \core\Controller;
use PHPUnit\Framework\TestCase;

class ControllerTest extends TestCase
{
    private $obj = null;

    function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

    }

//    function testStringCannotByEmpty()
//    {
//
//        $this->obj->setAttrs(15, "");
//        $this->assertFalse($this->obj->saveData());
//
//        $this->obj->setAttrs(15, "aaaaa");
//        $this->assertTrue($this->obj->saveData());
//    }
//
//    function testCheckingNumber()
//    {
//        $this->obj->setAttrs(2, "test1");
//        $this->assertFalse($this->obj->saveData());
//
//        $this->obj->setAttrs(10, "test2");
//        $this->assertFalse($this->obj->saveData());
//
//        $this->obj->setAttrs(25, "test2");
//        $this->assertFalse($this->obj->saveData());
//
//        $this->obj->setAttrs(15, "test2");
//        $this->assertTrue($this->obj->saveData());
//    }
//
//    function testSaveLoad()
//    {
//        $i = 12;
//        $str = "testing";
//        $this->obj->setAttrs($i, $str);
//        $this->assertTrue($this->obj->saveData());
//
//        $this->assertTrue($this->obj->loadData());
//        $this->assertEquals($this->obj->num, $i);
//        $this->assertEquals($this->obj->str, $str);
//    }
}