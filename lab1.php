<?php 
    // Datatypes of php
    $num = 1;
    $char = 'A';
    $str = "Hello, World!";
    $float = 12.12;
    $bool = true;
    $arr = array(1, 2, 3, 4, 5);
    $obj = new stdClass();
    $obj->name = "John";
    $obj->age = 30;

    echo $num . ' is a an integer'.'<br>' ;
    echo $char. '  is a character' .'<br>';
    echo $str . ' is a string'.'<br>';
    echo $float . ' is a float'.'<br>';
    echo $bool. ' is a boolean datatype'.'<br>';

    echo '<pre>' . print_r($arr) .'<pre>';
    echo '<pre>' . var_dump($obj). 'is an object datatype'.'<pre>';
    echo '<pre>' . var_dump($arr).'<pre>';
?>