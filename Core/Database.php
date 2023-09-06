<?php

namespace Core;

use PDO;

class Database
{
    public $connection;
    public $statement;
    public function __construct($config, $username = 'root', $password = '')
    {


        $db_connector = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($db_connector, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $params = [])
    {

        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }
    public function getDb()
    {
        return $this->statement->fetchAll();
    }
    public function find()
    {
        return $this->statement->fetch();
    }
    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort();
        }
        return $result;
    }
}
