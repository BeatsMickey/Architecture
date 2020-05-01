<?php


class OracleSQL extends Db
{
    public function DBConnection() {
        echo "устанавливаем конект с OracleSQL".PHP_EOL;
    }

    public function DBRecord(string $tableName) {
        echo "запись таблицы {$tableName} из базы данных из базы данных OracleSQL".PHP_EOL;
    }

    public function DBQueryBuilder(string $param) {
        echo "запрос с параметрами {$param} из базы данных OracleSQL".PHP_EOL;
    }
}