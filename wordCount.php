<?php

// if(isset($_GET["text"])){
//   $text= $_GET["text"];
// } else {
//   $text= "";
// }

$text= "Los errores Http son problemas de comunicación, ya sea por lado del cliente o del servidor. Pero este error viene acompañado de los códigos de estado Http, que son los mensajes numéricos que recibimos por parte del servidor explicandonos que existe un problema por el cual no podemos acceder a la información que buscamos. Normalmente ese código de estado es invisible de cara al usuario que está visitando la web. Solo en caso de que se produzca un error en la carga es posible que en el navegador se muestre el tipo de error que se está produciendo.";

function getCount($text){
  $no = array(",", ".");
  $replace = array("","");
  $count= [];
  $cleanText= str_replace($no, $replace, $text);
     // print_r($cleanText);

  $palabras= explode(" ",$cleanText);
  //print_r($palabras);
       $count= array_count_values($palabras);
       return $count;
}

echo "<pre>", print_r(getCount($text)),"</pre>";
