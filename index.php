<?php
spl_autoload_register();

//
//use temps\visitor\layer,temps\visitor\segm,temps\visitor\txtDump,temps\visitor\container;
//$data = new container();
//$data->setData(new segm());
//$data->setData(new layer());
//$data->setData(new segm());
//$cm = new txtDump();
//$data->accept($cm);
//print($cm->getTxt());
use \temps\ann\Intel;

$exec = new Intel();

//for($i=0;$i<count($data);$i++){
//    $data[$i]=$exec->inter($data[$i]);
//}
$arr=$exec->getImg("6.jpg");
//$result=[-1,-1,-1,1];
//$exec->study();
$data = $exec->init($arr);
echo  "<br>".bindec($data[0].$data[1].$data[2].$data[3]);