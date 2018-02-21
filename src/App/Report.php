<?php

namespace App;

use App\DB\DatabaseAccess;
use App\Formatter\ReportFormatter;
use App\Printer\ReportPrinter;

class Report
{

    public function printAction()
    {
        $dataBase = new DatabaseAccess();
        $data = $dataBase->getData();

        $formatter = new ReportFormatter();
        $formatedData = $formatter->format($data);

        $printer = new ReportPrinter();
        echo $printer->printOut($formatedData);
    }
}