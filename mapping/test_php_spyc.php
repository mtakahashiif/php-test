#!/usr/bin/env php

<?php

require_once "spyc.php";

$yaml_object = spyc_load_file('data.yml');
var_dump($yaml_object);

?>
