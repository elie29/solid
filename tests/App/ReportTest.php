<?php

use App\DB\DatabaseAccess;
use App\Formatter\ReportFormatter;
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