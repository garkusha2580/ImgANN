<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 03.05.2017
 * Time: 19:52
 */

namespace temps\ann;


class Intel
{

    public function test($data,$res){
        $train_file = (dirname(__FILE__) . "/xor_float.net");
        if (!is_file($train_file))
            die("The file xor_float.net has not been created! Please run simple_train.php to generate it");

        $ann = fann_create_from_file($train_file);
        if (!$ann)
            die("ANN could not be created");

        fann_train($ann,$data,$res);
        fann_save($ann, dirname(__FILE__) . "/xor_float.net");
        fann_destroy($ann);
    }
    public function getImg($name){
        echo "<br>";
        $data = null;
        $dir = dirname(__FILE__)."/".$name;
        if(!file_exists($dir)){
            throw new \Exception("error data");
        }
        $str=null;
        $size = getimagesize($dir);
        $matrix =array();
        $file = imagecreatefromjpeg($dir);
        for ($i = 0;$i<$size[0];$i++){
            for ($j=0;$j<$size[1];$j++){
               $data=imagecolorsforindex($file,imagecolorat($file,$i,$j));
               $matrix[$j][$i]= $data["red"]&&$data["blue"]&&$data["green"]>85?-1:1;
            }
        }
        $data = null;
        foreach ($matrix as $v){

                foreach ($v as $d){
                echo $d>0?"<b>".$d."</b>..":"....";
                $str[]=$d;
                $data.=$d." ";

            }
            echo "<br>";

        }
        return $str;
    }
    public function study($data=null,$result=null)
    {
        $num_input =96;
        $num_output = 4;
        $num_layers = 3;
        $num_neurons_hidden =10;
        $desired_error = 0.00001;
        $max_epochs = 500000;
        $epochs_between_reports = 1000;

        $ann = fann_create_standard($num_layers, $num_input, $num_neurons_hidden, $num_output);
//           fann_train($ann,$data,$result);
//            fann_save($ann, dirname(__FILE__) . "/xor_float.net");
        if ($ann) {
            fann_set_activation_function_hidden($ann, FANN_SIGMOID_SYMMETRIC);
            fann_set_activation_function_output($ann, FANN_SIGMOID_SYMMETRIC);

            $filename = dirname(__FILE__) . "/xor.data";
            if (fann_train_on_file($ann, $filename, $max_epochs, $epochs_between_reports, $desired_error))
                fann_save($ann, dirname(__FILE__) . "/xor_float.net");

            fann_destroy($ann);
        }
    }

    public function init(array $data)
    {
        $train_file = (dirname(__FILE__) . "/xor_float.net");
        if (!is_file($train_file))
            die("The file xor_float.net has not been created! Please run simple_train.php to generate it");

        $ann = fann_create_from_file($train_file);
        if (!$ann)
            die("ANN could not be created");

        $calc_out = fann_run($ann, $data);
        fann_destroy($ann);
        return $calc_out;
    }
}