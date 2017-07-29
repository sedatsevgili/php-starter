
<?php 

$array1 = array("Adem", "Ahmet", "Ercan", "Mehmet", "Hasan","Ayse");
$array2 = array("Eda", "Adem", "Aslı", "Ayse","Hasan");

for($x=0;$x<count($array1);$x++){
if (in_array($array1[$x], $array2))
  {	  
  echo 'Intersection : '.$array1[$x];
  echo "\n";
  }
else
  {
  echo 'Difference : '.$array1[$x];
  echo "\n";
  }
}

?> 

