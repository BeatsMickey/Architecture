<?php


class PostgreSQLFactory extends DbFactory
{
    public function createConnection()
    {
        return new PostgreSQL();
    }
}