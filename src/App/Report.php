<?php

namespace App;

use App\DB\DatabaseAccess;
use App\Formatter\ReportFormatter;
use App\Printer\ReportPrinter;

class Report
{

    /**
     * @var DatabaseAccess
     */
    protected $databaseAccess;

    /**
     * @var ReportFormatter
     */
    protected $reportFormatter;

    /**
     * @var ReportPrinter
     */
    protected $reportPrinter;

    public function __construct(DatabaseAccess $da, ReportFormatter $rf, ReportPrinter $rp)
    {
        $this->databaseAccess = $da;
        $this->reportFormatter = $rf;
        $this->reportPrinter = $rp;
    }

    public function printAction()
    {
        $data = $this->databaseAccess->getData();
        $formatedData = $this->reportFormatter->format($data);
        echo $this->reportPrinter->printOut($formatedData);
    }
}