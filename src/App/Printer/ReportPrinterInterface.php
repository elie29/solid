<?php

namespace App\Printer;

interface ReportPrinterInterface
{

    /**
     * @param string $data
     *
     * @return string
     */
    public function printOut($data);
}
