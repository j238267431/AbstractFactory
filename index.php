<?php

require 'DataBases/DB.php';
require 'DataBases/MySQLFactory.php';
require 'DataBases/OracleFactory.php';
require 'DataBases/PostgreSQLFactory.php';

require 'DBConnection/DBConnection.php';
require 'DBConnection/MySQLConnection.php';
require 'DBConnection/OracleConnection.php';
require 'DBConnection/PostgreSQLConnection.php';

require 'DBRecord/DBRecord.php';
require 'DBRecord/MySQLRecord.php';
require 'DBRecord/OracleRecord.php';
require 'DBRecord/PostgreSQLRecord.php';

require 'DBQueryBuilder/DBQueryBuilder.php';
require 'DBQueryBuilder/MySQLBuilder.php';
require 'DBQueryBuilder/OracleBuilder.php';
require 'DBQueryBuilder/PostgreSQLBuilder.php';

function run(DB $DB)
{
    $DB->startConnection();
}

run(new MySQLFactory()).'<br>';
echo '-------------'.'<br>';
run(new OracleFactory()).'<br>';
echo '-------------'.'<br>';
run(new PostgreSQLFactory()).'<br>';