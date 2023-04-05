<?php
$stdt = array("name" => "ram", "age" => "20", "experience" => "5");
krsort($stdt);

print_r(array_change_key_case($stdt,CASE_UPPER));
echo "<br>";
print_r(array_change_key_case($stdt,CASE_LOWER));
echo "<br>";

$stdlen = count($stdt);
foreach($stdt as $x => $value){
  echo $x."  ".$value;
  echo "<br>";
}

?>
