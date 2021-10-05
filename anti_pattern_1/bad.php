<?php
  $bool_value = true;
  $string_value = "10";

  $data = "bool_value: $bool_value\n";
  $data .= "string_value: $string_value\n";
  
  $fh = fopen("bad-data.yml", "w");
  fwrite($fh, $data);
  fclose($fh);
?>
