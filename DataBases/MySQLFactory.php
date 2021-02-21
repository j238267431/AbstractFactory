<?php


class MySQLFactory extends DB
{
    protected function createConnection(): DBConnection
    {
        return new MySQLConnection();
    }

    protected function recordData(): DBRecord
    {
        return new MySQLRecord();
    }

    protected function queryBuilder(): DBQueryBuilder
    {
        return new MySQLBuilder();
    }
}