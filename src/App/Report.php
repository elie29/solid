<?php

namespace App;

use App\DB\GetReportDataInterface;
use App\Formatter\ReportFormatterInterface;
use App\Printer\ReportPrinterInterface;

class Report
{

    /**
     * @var GetReportDataInterface
     */
    protected $getReport;

    /**
     * @var ReportFormatterInterface
     */
    protected $reportFormatter;

    /**
     * @var ReportPrinterInterface
     */
    protected $reportPrinter;

    public function __construct(GetReportDataInterface $gr, ReportFormatterInterface $rf, ReportPrinterInterface $rp)
    {
        $this->getReport = $gr;
        $this->reportFormatter = $rf;
        $this->reportPrinter = $rp;
    }

    public function printAction()
    {
        $data = $this->getReport->getData();
        $formatedData = $this->reportFormatter->format($data);
        echo $this->reportPrinter->printOut($formatedData);
    }
}