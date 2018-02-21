<?php

namespace App\Formatter;

class ReportFormatter
{

    /**
     * @return string Formatted data
     */
    public function format(array $data)
    {
        return implode($data, "\n");
    }

}
