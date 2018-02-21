<?php

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$report = new \App\Report();
$report->printAction();