<?php
include "DB/Db.php";
include "DB/MySQL.php";
include "DB/PostgreSQL.php";
include "DB/OracleSQL.php";

include "DBFactory/DbFactory.php";
include "DBFactory/MySQLFactory.php";
include "DBFactory/PostgreSQLFactory.php";
include "DBFactory/OracleSQLFactory.php";



function test(DbFactory $dbFactory) {
    $db = $dbFactory->createConnection();
    $db->DBRecord("table");
    $db->DBQueryBuilder("param1, param2");
}

test(new MySQLFactory());
test(new PostgreSQLFactory());
test(new OracleSQLFactory());
