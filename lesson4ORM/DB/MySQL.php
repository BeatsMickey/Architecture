<?php


class MySQL extends Db
{
    public function DBConnection() {
        echo "устанавливаем конект с MySQL".PHP_EOL;
    }

    public function DBRecord(string $tableName) {
        echo "запись таблицы {$tableName} из базы данных MySQL".PHP_EOL;
    }

    public function DBQueryBuilder(string $param) {
        echo "запрос с параметрами {$param} из базы данных MySQL".PHP_EOL;
    }
}