<?php


class MySQLFactory extends DbFactory
{
    public function createConnection()
    {
        return new MySQL();
    }
}