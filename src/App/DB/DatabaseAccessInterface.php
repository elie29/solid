<?php

namespace App\DB;

interface DatabaseAccessInterface
{

    public function getData();

    public function doQuery($criteria);

    public function savaData(array $data);
    public function deleteData(array $data);
}