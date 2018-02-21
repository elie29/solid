<?php

use App\DB\DatabaseAccess;
use App\Formatter\ReportFormatter;
use App\Printer\ReportPrinter;
use App\Report;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$report = new Report(
    new DatabaseAccess,
    new ReportFormatter,
    new ReportPrinter
);
$report->printAction();