<?php

class printer{
	var $types        = ['img','data'];
	var $default_type = 'img';

    function printDocument($document = [], $type = ''){
    	if(empty($document)) return 'nothing to print';
    	if(empty($type)) $type = $this->default_type;
    	switch($type){
    		case 'img':
    			return $this->drawImg($document);
    		break; 
    		case 'data':
    			return $this->printCoodrs($document);
    		break; 
    	}
    }

    function drawImg($shapes = []){
    	$sheet = [];
    	foreach($shapes as $shape){
    		if(class_exists($shape['type'])){
    			$element = new $shape['type']($shape['params']);
    			$sheet[] = $element->drawImg();
    		}
    	}
    	return implode('<br>',$sheet);
    }

    function printCoodrs($shapes = []){
    	$sheet = [];
    	foreach($shapes as $shape){
    		if(class_exists($shape['type'])){
    			$element = new $shape['type']($shape['params']);
    			$sheet[] = $element->printCoords();
    		}
    	}
    	return $sheet;
    }
}

?>
