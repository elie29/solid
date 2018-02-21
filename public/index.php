<?php

use App\DB\DatabaseAccess;
use App\Formatter\ReportFormatter;
use App\Report;
use App\Printer\ReportLaserPrinter;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$report = new Report(
    new DatabaseAccess,
    new ReportFormatter,
    new ReportLaserPrinter
);
$report->printAction();