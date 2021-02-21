<?php


class OracleFactory extends DB
{

    protected function createConnection(): DBConnection
    {
        return new OracleConnection();
    }

    protected function recordData(): DBRecord
    {
        return new OracleRecord();
    }

    protected function queryBuilder(): DBQueryBuilder
    {
        return new OracleBuilder();
    }
}