<?php

namespace App\DB;

interface PersistReportDataInterface
{

    /**
     * @return boolean
     */
    public function savaData(array $data);

    /**
     * @return boolean
     */
    public function deleteData(array $data);
}