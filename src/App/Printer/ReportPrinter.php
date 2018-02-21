<?php

namespace App\Printer;

class ReportPrinter
{

    public function printOut($data)
    {
        return "Printing data on laser printer\n" . $data;
    }
}
