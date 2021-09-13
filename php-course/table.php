<?php require 'head.php'?>


<?php

   $fille=fopen('myfile.txt', 'w');



   $arr = array (
  array("simon","assma","karmena"),
  array(18,90,20),
  array("Sohag","assuit","ana"),
);
    
fwrite($fille,$arr[0][0]." ,".$arr[0][1].", ".$arr[0][2].".<br>");
fwrite($fille,$arr[1][0]." ,".$arr[1][1].", ".$arr[1][2].".<br>");
fwrite($fille, $arr[2][0]." ,".$arr[2][1].", ".$arr[2][2].".<br>");


for ($row = 0; $row < 3; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$arr[$row][$col]."</li>";
  }
  echo "</ul>";
}



?>