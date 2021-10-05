#!/usr/bin/env php

<?php

$v = True;
print $v;

$yaml_object = yaml_parse_file('data.yml');
var_dump($yaml_object);

?>
