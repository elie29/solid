<?php

namespace App\Formatter;

class ReportFormatter
{

    public function format(array $data)
    {
        return implode($data, "\n");
    }

}
