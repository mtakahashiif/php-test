#!/usr/bin/env python3

import yaml

with open('data.yml') as file:
    yaml_object = yaml.load(file, Loader=yaml.CLoader)

    for key, value in yaml_object.items():
        print("{}: {}  <--- {}".format(key, value, type(value)))
