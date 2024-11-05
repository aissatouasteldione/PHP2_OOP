<?php
class Validator{
    public static array $errors=[];

    public static function isValide():bool{
        return count(self::$errors)==0;
    }

    public static function add(string $key , mixed $data){
        $errors[$key]=$data;
    }
    public static function isEmpty(string $valueField, string $nameField , string $message="champ obligatoire"){
        if(empty($valueField)){
            self::$errors[$nameField]=$message;
        }
    }
    
}
?>