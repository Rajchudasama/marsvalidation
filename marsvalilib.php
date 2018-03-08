<?php
class Validationlibrary{

    function isString($value){
        //removes extra space characters
        $Value=trim($value);
        if(ctype_alpha($Value)){
            //value is valid
            return true;
        }
        else{
            //value is invalid
            return false;
        }
    }
    function isNumber($value){
        $Value=trim($value);
        if(ctype_digit($Value)){
            return true;
        }
        else{
            return false;
        }
    }



}

