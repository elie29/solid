<?php

namespace App\DB;

interface PersistReportDataInterface
{

    public function savaData(array $data);
    public function deleteData(array $data);
}