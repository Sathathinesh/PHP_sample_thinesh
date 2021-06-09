<?php

namespace mvc_php;

class Controller
{   
    private $model;

    public function __construct($model)
    {
        $this->model =  $model;
    }
    public function setVeriable($variable1 ,$variable2)
    {
        $this->model->setSum($variable1 ,$variable2);
    }

    public function getOutput()
    {
        return $this->model->getSum();
    }
    
    public function getError(){
        return $this->model->printError();
    }
}