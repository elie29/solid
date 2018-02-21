<?php

namespace App\Printer;

class ReportLaserPrinter implements ReportPrinterInterface
{

    public function printOut($data)
    {
        return "Printing data on laser printer\n" . $data;
    }
}
