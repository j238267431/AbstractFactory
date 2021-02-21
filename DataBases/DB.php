<?php


abstract class DB

{
    private DBConnection $connection;
    private DBRecord $record;
    private DBQueryBuilder $builder;

    public function __construct()
    {
        $this->connection = $this->createConnection();
        $this->record = $this->recordData();
        $this->builder = $this->queryBuilder();
    }


    public function startConnection()
    {
        $this->connection->connection();
        $this->record->recording();
        $this->builder->queryBuilder();
    }

    abstract protected function createConnection() : DBConnection;
    abstract protected function recordData() : DBRecord;
    abstract protected function queryBuilder() : DBQueryBuilder;
}