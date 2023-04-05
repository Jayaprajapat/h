<?php
g$arr = array("ram"=>"2", "rohan"=>"5", "rajat"=>"8");

foreach($arr as $a => $value){

echo $a. "  has experience of  " .$value." years.";
echo "<br>";
}
?>
<?php
$stdt = array("name", "age", "experience");
sort($stdt);

$stdlen = count($stdt);
for($x = 0; $x < $stdlen; $x++){
  echo $stdt[$x];
  echo "<br>";
}
?>