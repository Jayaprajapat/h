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
<?php
$stdt = array("name" => "ram", "age" => "20", "experience" => "5");
asort($stdt);

$stdlen = count($stdt);
foreach($stdt as $x => $value){
  echo $x."  ".$value;
  echo "<br>";
}
?>

<?php
$stdt = array("name" => "ram", "age" => "20", "experience" => "5");
ksort($stdt);

$stdlen = count($stdt);
foreach($stdt as $x => $value){
  echo $x."  ".$value;
  echo "<br>";
  
}
echo current($stdt);
  echo "<br>";
  echo next($stdt);
  echo "<br>";
  echo end($stdt);
  echo "<br>";
  echo prev($stdt);
  echo "<br>";
  echo reset($stdt);
  echo "<br>";

  if (in_array("ram", $stdt))
  {
  echo "found";
  }
  else
  {
  echo "not found";
  }

  $st = array("ram", "riya", "raj");
  
  echo "key position is:" .key($st);
  echo "<br>";
  
  
  
  $stdt = array("name" => "ram", "age" => "20", "experience" => "5");
  echo "key position:".key($stdt);
   echo "<br>";
   $st = array("ram", "riya", "raj", "ritik");
  list($x, $y, $k) = $st;
  echo "she has 3 friends $x $y $k";
   echo "<br>";
  list($x, , , $k) = $st;
  echo "she has 2 friends $x $k";

  $st = array("ram", "priya", "aman", "Ritik", "Naman", "neha");
  natsort($st);
  print_r($st);
   echo "<br />";
   
  natcasesort($st);
  print_r($st);
   echo "<br />";

   $stdt = range(a,D);
    print_r($stdt);
    echo "<br />";

    $a = "ram";
    $b = "riya";
    $c = "ritik";
    
    $arr = compact(a,b,c);
    print_r($arr);
    
    function myfunction($value,$key)
    {
    echo "the key $key and value $value<br>";
    }
    $a = array("1" =>"mango ","2" =>"pineapple ");
    $a1 = array($a,"3" =>"orange ","4" =>"papaya");
    array_walk_recursive($a1,"myfunction");
    
    $stdt = array("1" =>"mango ","2" =>"pineapple ","3" =>"orange ","4" =>"papaya");
    print_r(array_values($stdt));
    echo "<br />";
    
    array_unshift($stdt, "apple", "custard apple");
    print_r($stdt);
    echo "<br />";
    
    $stdt = array("1" =>"mango ","2" =>"papaya ","3" =>"orange ","4" =>"papaya");
    print_r(array_unique($stdt));
    echo "<br>";


    
    function myfunc($a,$b)
    {
    if ($a===$b)
    {
    return 0;
    }
    return ($a>$b)?1:-1;
    }
    
     $stdt = array("1" =>"mango ","2" =>"pineapple ","3" =>"orange ","4" =>"papaya");
     $stdt1 = array("1" =>"mango ","2" =>"papaya ","4" =>"orange ","5" =>"papaya");
     
     $arr = array_uintersect($stdt, $stdt1, "myfunc");
     print_r($arr);
         echo "<br>";
     
     $arr2 = array_uintersect_assoc($stdt, $stdt1, "myfunc");
     print_r($arr2);
     echo "<br>";
    


    
   
?>