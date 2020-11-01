<?php


	$conveyor = Array();

  //Запись в конвеерный буфер
	for($i = 0; $i < 10; $i++){
		conveyor($i, 5);
	}

  //Чтение из конвеерного буфера
	foreach($conveyor as $val){
		echo $val."<br/>";
	}


	function conveyor($value, $size=2){
		
		global $conveyor;
		for($i = 0; $i < $size; $i++){
			$conveyor[($size-1)-$i] = $conveyor[($size-2)-$i];
		}
		$conveyor[0] = $value;

	}



?>
