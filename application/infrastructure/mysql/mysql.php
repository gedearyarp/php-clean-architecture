<?php

class MySql {
    private $connection;

    public function __construct($host, $user, $pass, $db) {
        $this->connection = new mysqli($host, $user, $pass, $db);
    }

    public function __destruct() {
        $this->connection->close();
    }

    public function query($query) {
        $result = mysqli_query($this->connection, $query);
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
}

?>