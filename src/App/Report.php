<?php

namespace App;

class Report
{

    /**
     * Report Class Responsibilities:
     *  - Connecting to database and getting report data
     *  - Formatting data
     *  - Printing data on a laser printer
     */
    public function printAction()
    {
        $data = $this->getDataFromDababase();

        $formatedData = $this->format($data);

        echo $this->laserPrint($formatedData);
    }

    protected function getDataFromDababase()
    {
        return array(
            'name' => 'Report 1',
            'description' => 'Just a report',
            'content' => 'Lorem ipsum dolores'
        );
    }

    protected function format(array $data)
    {
        return implode($data, "\n");
    }

    protected function laserPrint($data)
    {
        return "Printing data on laser printer\n" . $data;
    }
}