<?php 
$id = $_POST["clave"]; 
$lines = file("base.txt", FILE_IGNORE_NEW_LINES);
foreach ($lines as $valor){
$pos = strpos($valor, $id);
if ($pos === false) {    
} else {
$lin=$valor;
$name=explode(",",$lin);
echo '<a href="uploaded/'.$name[1].'" download>Download your file</a>';
break;
}  
}
if ($pos === false) {
  echo "No matches.";
} 
?>