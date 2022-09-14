<?php

// create class for mysql
class MySql {
    private $connection;

    // constructor
    public function __construct($host, $user, $pass, $db) {
        $this->connection = new mysqli($host, $user, $pass, $db);
    }

    // destructor
    public function __destruct() {
        $this->connection->close();
    }

    // query
    public function query($sql) {
        return $this->connection->query($sql);
    }
}

?>