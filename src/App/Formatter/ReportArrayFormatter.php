<?php

namespace App\Formatter;

class ReportArrayFormatter extends ReportFormatter
{

    public function format(array $data)
    {
        $result = array();
        foreach ($data as $k => $v){
            $result[] = "$k => $v";
        }
        return parent::format($result);
    }

}
