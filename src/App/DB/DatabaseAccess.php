<?php

namespace App\DB;

class DatabaseAccess implements DatabaseAccessInterface
{

    public function getData()
    {
        return array(
            'name' => 'Report 1',
            'description' => 'Just a report',
            'content' => 'Lorem ipsum dolre'
        );
    }

    /**
     * @codeCoverageIgnore
     * {@inheritDoc}
     * @see \App\Solid\Version4\DatabaseAccess::doQuery()
     */
    public function doQuery($criteria)
    {
        throw new \BadMethodCallException('doQuery not used');
    }

    /**
     * @codeCoverageIgnore
     * {@inheritDoc}
     * @see \App\Solid\Version4\DatabaseAccess::savaData()
     */
    public function savaData(array $data)
    {
        throw new \BadMethodCallException('savaData not used');
    }

    /**
     * @codeCoverageIgnore
     * {@inheritDoc}
     * @see \App\Solid\Version4\DatabaseAccess::deleteData()
     */
    public function deleteData(array $data)
    {
        throw new \BadMethodCallException('deleteData not used');
    }
}
