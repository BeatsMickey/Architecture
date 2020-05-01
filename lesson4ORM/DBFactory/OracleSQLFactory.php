<?php


class OracleSQLFactory extends DbFactory
{
    public function createConnection()
    {
        return new OracleSQL();
    }
}