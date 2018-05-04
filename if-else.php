<?php 
  $my_num = -1;

  if($my_num == -1)
  {
    echo "my_num is -1";
    echo "<br>";
  }
  elseif($my_num == 0)
  {
    echo "my_num is 0";
    echo "<br>";
  }
  elseif($my_num == 1)
  {
    echo "my_num is 1";
    echo "<br>";
  }
  else
  {
    echo "my_num is less than -1 or greater than 1";
    echo "<br>";
  }
  

  // Ternery operator demo
  $my_bool = true;
  echo ($my_bool == true)? "my_bool is true" : "my_bool is false";
?>