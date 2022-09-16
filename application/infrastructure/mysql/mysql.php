<?php

class MySql {
    private $connection;

    public function __construct($host, $user, $pass, $db) {
        $this->connection = new mysqli($host, $user, $pass, $db);
    }

    public function __destruct() {
        $this->connection->close();
    }

    public function query($sql) {
        return $this->connection->query($sql);
    }
}

?>