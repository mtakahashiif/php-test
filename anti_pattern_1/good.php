<?php
  $bool_value = true;
  $string_value = "10";

  $data["bool_value"] = $bool_value;
  $data["string_value"] = $string_value;
  
  yaml_emit_file("good-data.yml", $data);
?>
