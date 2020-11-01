  
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
