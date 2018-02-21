<?php

namespace App\Printer;

class ReportInkjetPrinter implements ReportPrinterInterface
{

    public function printOut($data)
    {
        return "Printing data on ink jet printer\n" . $data;
    }
}
