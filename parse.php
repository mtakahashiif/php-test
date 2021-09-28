<?php

function parse_and_emit_yaml(string $input_text){
    $yaml_object = yaml_parse($input_text);
    var_dump($yaml_object);
    
    $output_text = yaml_emit($yaml_object, YAML_UTF8_ENCODING);
    var_dump($output_text);
}

function emit_yaml(array $yaml_object){
    $output_text = yaml_emit($yaml_object, YAML_UTF8_ENCODING);
    var_dump($output_text);
}


$input = <<<EOD
ブーリアン: yes
ブーリアンの文字列: "yes"
整数: 10
整数の文字列: "10"
ヌル: null
文字列のヌル: "null"
配列:
  - yes
  - "yes"
  - 10
  - "10"
  - null
  - "null"
EOD;

parse_and_emit_yaml($input);


$input = [
    "ブーリアン" => true,
    "ブーリアンの文字列" => "yes",
    "整数" => 10,
    "整数の文字列" => "10",
    "ヌル" => NULL,
    "文字列のヌル" => "null",
        "配列" => [
        true, "yes", 10, "10", NULL, "null"
    ]
];

emit_yaml($input);



// tag:yaml.org,2002:seq”, “tag:yaml.org,2002:map” or “tag:yaml.org,2002:str

$input = <<<EOD
マップ: !<tag:yaml.org,2002:map>
  key0: "value0"
  key1: "value1"
  key2: "value2"

シーケンス: !<tag:yaml.org,2002:seq>
  - "value0"
  - "value1"
  - "value2"

文字列: !<tag:yaml.org,2002:str> 10

ヌル: !<tag:yaml.org,2002:null> null

ブーリアン: !<tag:yaml.org,2002:bool> true

整数: !<tag:yaml.org,2002:int> 10

浮動小数点: !<tag:yaml.org,2002:float> 10
EOD;

parse_and_emit_yaml($input);


$input = <<<EOD
文字列1: "Hello,YAML!"
文字列2: !!str 10
浮動小数点1: 10.0
浮動小数点2: !!float 10
ヌル: null
ブーリアン1: Yes
ブーリアン2: off
EOD;

parse_and_emit_yaml($input);

?>
