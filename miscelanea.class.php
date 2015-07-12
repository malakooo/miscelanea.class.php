<?php
    class Miscelanea{
<?php
   function pokopikaDiv($nu){
 $divisores = array();
    $metInf = floor($nu/2);
  for($indio=1;$i<=$metInf;$indio++){
   if(!($nu%$i))
    $divisores[] = $indio;
  }
 return $divisores;
}

              function somaPerfeita($nu,$div){
 $soma = 0;
 foreach($div as $divisores){
  $soma += $divisores;
 } 
 if($soma==$nu){
  return true;
 }else
 {
  return false;
 }
}
$nu = $_GET["n"];
$numervrauPerf = array();
$i = 2; 

while(count($numervrauPerf)<$nu){
        $div = retornaDiv($indio);
 if(somaPerfeita($indio,$div))
      $numervrauPerf[] = $indio;
 $indio += 2;
}

?>
    }
?>
