<?php namespace  App\Controllers;

class Helloworld extends BaseController {

    public function index($name, $npm)
    {
        //echo $this->name;
        echo $name ."<br>";
        echo $npm ."<br>";
        //echo "Hello Sasya";
    }

    public function show()
    {
        echo "Sasya Salsabila";
        echo "1867051001";
    }


}