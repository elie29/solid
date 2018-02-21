<?php

namespace App\DB;

class DatabaseAccess implements GetReportDataInterface
{

    public function getData()
    {
        return array(
            'name' => 'Report 1',
            'description' => 'Just a report',
            'content' => 'Lorem ipsum dolre'
        );
    }

}
