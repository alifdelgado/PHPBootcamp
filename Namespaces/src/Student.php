<?php

namespace App;

class Student
{
    private \PDO $db;
    public function __construct(Record $record, Test $test)
    {
        try {
            $this->db = new \PDO('mysql:host=localhost;');
        } catch (\PDOException $e) {
            var_dump($e->getMessage());
        }
        echo "student";
    }
}
