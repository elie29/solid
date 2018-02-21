<?php

namespace App\Formatter;

class ReportFormatter implements ReportFormatterInterface
{

    /**
     * @return string Formatted data
     */
    public function format(array $data)
    {
        return implode($data, "\n");
    }

}
