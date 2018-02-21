<?php

use App\DB\DatabaseAccess;
use App\Formatter\ReportArrayFormatter;
use App\Formatter\ReportFormatter;
use App\Printer\ReportInkjetPrinter;
use App\Printer\ReportLaserPrinter;
use App\Printer\ReportPrinter;
use PHPUnit\Framework\TestCase;

/**
 * Report test case.
 */
class ReportTest extends TestCase
{

    /**
     * Tests Report->printAction()
     */
    public function testPrintActionReport()
    {
        $report = new \App\Report(
            new DatabaseAccess,
            new ReportFormatter,
            new ReportLaserPrinter
        );
        $this->process($report);
    }

    /**
     * Tests Report->printAction()
     */
    public function testPrintActionReportWithArrayFormatter()
    {
        $report = new \App\Report(
            new DatabaseAccess,
            new ReportArrayFormatter,
            new ReportInkjetPrinter
            );
        $this->process($report);
    }

    /**
     * Tests Report->printAction()
     */
    public function testPrintActionReportWithReportPrinter()
    {
        $report = new \App\Report(
            new DatabaseAccess,
            new ReportArrayFormatter,
            new ReportPrinter
            );
        $this->process($report);
    }

    private function process($report)
    {
        ob_start();
        $report->printAction();
        $output = ob_get_clean();
        assertThat($output, containsString('Report'));
    }

}