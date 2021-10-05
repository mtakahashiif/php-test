<?php
  $yaml_object = yaml_parse_file('data.yml');

  print($yaml_object["int_value"]."\n");
  print($yaml_object["string_value"]."\n");
?>
