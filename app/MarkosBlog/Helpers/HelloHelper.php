<?php namespace MarkosBlog\Helpers;
/**
 * Created by PhpStorm.
 * User: marko
 * Date: 20/04/2015
 * Time: 21:22
 */

class HelloHelper {

    public function __construct(){

    }

    public function sayHello($number){

        for($i=0;$i<$number;$i++){
            if($i == 0) {
                echo "Hello! <br>";
            }
            else if($i == $number-1){
                echo "Goodbye! <br>";
            }
            else {
                echo "Hello again! <br>";
            }
        }
    }
} 