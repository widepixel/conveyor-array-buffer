# conveyor-array-buffer
Conveyor Array Buffer - Массив в виде "конвеерного буфера". На подобе истории. Новая запись в массив, смещает старую.

<code>conveyor([value], [buffer_size])</code>

<h2>PHP</h2>

```

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
  
```
<h2>Javascript</h2>

```

   var conveyor = [];
	
  //Запись в конвеерный буфер
  for(var i = 0; i < 10; i++){
    conveyor(i, 5);
  }
  
  //Чтение из конвеерного буфера
  conveyor.forEach(function(val){
    console.log(val);
  });
  
  function conveyor(val, size=2){
    for(var i = 0; i < size; i++){
      conveyor[(size-1)-i] = conveyor[(size-2)-i];
    }
    conveyor[0] = val;
  }
  
```
