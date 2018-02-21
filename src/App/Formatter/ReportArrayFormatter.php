<?php

namespace App\Formatter;

class ReportArrayFormatter extends ReportFormatter
{

    /**
     * Liskov violation: format returns array instead of a string.
     *
     * @return array
     */
    public function format(array $data)
    {
        $result = array();
        foreach ($data as $k => $v){
            $result[] = "$k => $v";
        }
        return $result;
    }

}
