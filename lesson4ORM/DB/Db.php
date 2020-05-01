<?php


abstract class Db
{
    public function __construct() {
        $this->DBConnection();
    }

    abstract public function DBConnection();
    abstract public function DBRecord(string $tableName);
    abstract public function DBQueryBuilder(string $param);

}