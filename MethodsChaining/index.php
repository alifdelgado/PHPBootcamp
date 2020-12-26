<?php

class Database
{
    private static $pdo;
    public static $operators = ['=', '<>', 'and', 'or', 'like'];
    private $table;

    public static function connect(string $method)
    {
        self::$pdo = $method;
        return new static;
    }

    public function table(string $table)
    {
        $this->table = $table;
        return $this;
    }

    public function insert(array $data)
    {
        var_dump('creating a new database with ' . self::$pdo);
        var_dump("inserting into {$this->table} values(" . json_encode($data) . ")");
    }
}

header('Content-Type:text/plain', true);
Database::connect('pdo')->table('users')->insert(['username' => 'spike', 'password' => 'secret']);
