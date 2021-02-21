<?php

class PostgreSQLFactory extends DB
{

    protected function createConnection(): DBConnection
    {
        return new PostgreSQLConnection();
    }

    protected function recordData(): DBRecord
    {
        return new PostgreSQLRecord();
    }

    protected function queryBuilder(): DBQueryBuilder
    {
        return new PostgreSQLBuilder();
    }
}