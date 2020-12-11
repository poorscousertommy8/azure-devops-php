<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

$date = Carbon::now();

echo sprintf('Hello ITF it\'s %s', $date->toDayDateTimeString());