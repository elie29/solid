<?php

namespace App\DB;

interface QueryReportDataInterface
{

    /**
     * @param array $criteria
     *
     * @return array
     */
    public function doQuery($criteria);
}