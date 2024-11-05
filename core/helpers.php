<?php

function add_class_invalid(string $fieldName):void{
    echo isset(Session::get("errors")[$fieldName])? "is-invalid":"";
}

function dd(mixed $data){
    dump($data);die;
}

function dump(mixed $data){
    echo "<Pre>";
    var_dump($data);
    echo "</Pre>";

}