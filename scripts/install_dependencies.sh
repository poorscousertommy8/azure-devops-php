#!/bin/bash
if ! [ -x "$(command -v apache2)" ]; then sudo apt-get install -y apache2; exit 1; fi