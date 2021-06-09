<?php

namespace mvc_php;

class Model
{   
    //private $number1=null;
    //private $number2=null;
    private $sum = 0;

    private $errorMessage = "please enter valid data";
    
    public function setSum($number1,$number2)
    {
        $this->sum = $number1+$number2;
    }

    public function getSum()
    {
        return $this->sum;
    }

    public function printError(){
        return $this->errorMessage ;
    }

}