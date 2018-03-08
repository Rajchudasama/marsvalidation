<?php
class Validationlibrary{
    //compare validation
    private $comparevalue1;
    private $comparevalue2;

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
    //getter and setter for compare validator
    function setcomparevalue1($value){
        $this->comparevalue1=trim($value);
    }
    function setcomparevalue2($value){
        $this->comparevalue2=trim($value);
    }
    function getcomparevalue1(){
        return $this->comparevalue1;
    }
    function getcomparevalue2(){
        return $this->comparevalue2;
    }
    //compare validation
    function compareValidation($value,$comparevalue){
        $this->setcomparevalue1($value);
        $this->setcomparevalue2($comparevalue);
        if($this->getcomparevalue1()==$this->getcomparevalue2()){
            return true;
        }
        else{
            return false;
        }
    }


//Email validation
    function email_validation($data){
        if(filter_var($data,FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }
    //Postal code validation
    function postal_validate($data){
        $pattern = "/[A-Za-z]\d[A-Za-z] ?\d[A-Za-z]\d/";
        if(preg_match($pattern, $data)){
            return true;

        }else{
            return false;
        }
    }
    }

