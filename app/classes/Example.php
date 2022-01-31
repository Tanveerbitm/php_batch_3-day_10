<?php


namespace App\classes;


class Example
{
    public $num;
    public $data = [];


    public function set($num){
       $this->num=$num;
    }

    public function fibonacci(){
        echo "FIBONACCI SEQUENCE IS: <br>";
        $a=0;
        $b=1;
        if($this->num === 1){
            echo $a."<br>";
        }
        elseif($this->num === 2){
            echo $a."<br>". $b."<br>";
        }
        else {

            echo $a . "<br>" . $b . "<br>";
            for ($i = 0; $i < $this->num - 2; $i++) {
                $c = $a + $b;
                $a = $b;
                $b = $c;
                echo $c . "<br>";
            }
        }
    }

    public function prime(){
        echo $this->num ." IS ";
        if($this->num === 0 || $this->num === 1){ echo "NOT PRIME NUMBER"; }
        for($i=2; $i <= sqrt($this->num)+2; $i++){
            if($this->num % $i === 0 ){echo "PRIME NUMBER"; return;}
        }
        echo "NOT PRIME NUMBER";
    }

    public function setArray(){
        $this->data = [10,20,30,'BITM',100.2,true];
        echo $this->data[11];
    }
}