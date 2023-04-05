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
<?php
$a = array("ram","riya","rajat","rupali");
$b = array("5","6","4","4");
$c = array("ram","riya","rajat","raina");

print_r(array_combine($a,$b));
echo "<br>";

print_r(array_chunk($a,2));
echo "<br>";

print_r(array_count_values($b));
echo "<br>";

print_r(array_diff($a,$c));
echo "<br>";

$new = array("name" => "riya", "id" => 101, "city1" => "indore");
$new2 = array("name" => "riya", "id" => 101, "city" => "ujjain");
$new3 = array("name" => "rajat", "id" => 103, "city" => "indore");

print_r(array_diff_assoc($new,$new2));
echo "<br>";

print_r(array_diff_key($new,$new3));
?>