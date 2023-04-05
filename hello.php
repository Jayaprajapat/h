<?php
echo "new";

<!DOCTYPE html>
<html>
<body>

<?php
$fruit = array("mango","apple","banana","custardapple");
$arrlen = count($fruit);

for($a = 0; $a <= $arrlen; $a++) {
echo $fruit[$a];
echo "<br>";
}

$arr = array("ram"=>"2", "rohan"=>"5", "rajat"=>"8");

foreach($arr as $a => $value){

echo $a." "."has experience of"." " .$value." "."years";
echo "<br>";
}

?>
</body>
</html>

