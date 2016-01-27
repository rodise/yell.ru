<?php

include_once('task_1_model_printer.php');
include_once('task_1_model_figures.php');

$user_shapes = [ 
	['type' => 'circle', 'params' => [
		'line_width' => 1,
		'center'     => '100,100',
		'radius'     => 50
	]],
	['type' => 'square', 'params' => [
		'line_width' => 2,
		'center'     => '200,200',
		'width'      => 50
	]],
];

$type = isset($_GET['type']) ? $_GET['type'] : '';
if(!empty($type)){
	$printer = new printer;
	$types   = $printer->types;
	if(in_array($type,$types)){

		$document = isset($_POST['shapes']) ? json_decode($_POST['shapes']) : $user_shapes;
		if(!empty($document)){
			die($printer->printDocument($document,$type));
		}


	}else{
		die('wrong params');
	}
}else{
	die('no params');
}

?>
