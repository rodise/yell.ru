<?php

abstract class figure{
    abstract function __construct($params);
    abstract function drawImg();
    abstract function printCoords();
}

class circle extends figure{
	var $props = [];
    function __construct($params){  $this->props = $params;}
    function drawImg(){
    	return    'circle into img: ' . implode( ', ' , $this->props) . '<br>';
	}
    function printCoords(){
    	return 'circle into coords: ' . implode( ', ' , $this->props) . '<br>';
    }
}

class square extends figure{
	var $props = [];
    function __construct($params){  $this->props = $params;}
    function drawImg(){
    	return    'square into img: ' . implode( ', ' , $this->props) . '<br>';
	}
    function printCoords(){
    	return 'square into coords: ' . implode( ', ' , $this->props) . '<br>';
    }
}

?>
