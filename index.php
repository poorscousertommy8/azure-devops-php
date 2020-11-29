<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

$date = Carbon::now();

echo sprintf('Hello World it\'s %s', $date->toDayDateTimeString());