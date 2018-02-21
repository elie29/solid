<?php

namespace App\Printer;

class ReportPrinter implements ReportPrinterInterface
{

    public function printOut($data)
    {
        return "Printing data on laser printer\n" . $data;
    }
}
