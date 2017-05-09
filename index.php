<?php
spl_autoload_register();

use \temps\ann\Intel, \temps\ann\Hopfield;

$exec = new Intel();
$alg = new Hopfield();

//for($i=0;$i<count($data);$i++){
//    $data[$i]=$exec->inter($data[$i]);
//}

$alg->createReferenceMatrix($exec->getImg("0.jpg"));
$alg->createReferenceMatrix($exec->getImg("1.jpg"));
$alg->createReferenceMatrix($exec->getImg("2.jpg"));
$alg->createReferenceMatrix($exec->getImg("3.jpg"));
$alg->createReferenceMatrix($exec->getImg("4.jpg"));
$alg->createReferenceMatrix($exec->getImg("5.jpg"));
$alg->createReferenceMatrix($exec->getImg("6.jpg"));
$alg->createReferenceMatrix($exec->getImg("7.jpg"));
$alg->createReferenceMatrix($exec->getImg("8.jpg"));
$alg->createReferenceMatrix($exec->getImg("9.jpg"));

$result = $alg->createVector($exec->getImg("1(2).jpg"));
$result = $alg->createVector($result);
$alg->viewMatrix(Hopfield::$sumMatrix);
//$result=[-1,-1,-1,1];
//$exec->study();
//$data = $exec->init($result);
//var_dump($data);
//$exec->test($arr,$result);
//printf("%.2f|%.2f|%.2f|%.2f",$data[0],$data[1],$data[2],$data[3]);
