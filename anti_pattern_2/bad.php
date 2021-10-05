<?php
  $yaml_object = [];

  if($file = fopen("data.yml", "r")){
    while ($line = fgets($file)) {
      $key_value = preg_split("/:\s*/",rtrim($line),2);
      $yaml_object[$key_value[0]] = $key_value[1];
    }
  }
  fclose($file);

  print($yaml_object["int_value"]."\n");
  print($yaml_object["string_value"]."\n");
?>
