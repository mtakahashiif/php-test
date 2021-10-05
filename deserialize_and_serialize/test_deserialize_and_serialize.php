<?php

$yaml_object = yaml_parse_file('data.yml');
var_dump($yaml_object);

$output_text = yaml_emit($yaml_object, YAML_UTF8_ENCODING);
print($output_text)

?>
