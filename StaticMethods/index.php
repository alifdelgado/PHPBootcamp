<?php

class Database
{
    private static $pdo;
    public static $operators = ['=', '<>', 'and', 'or', 'like'];
    private $table;

    public static function connect(string $method)
    {
        $obj = new static;
        $obj->table;
        self::$pdo = $method;
    }

    public static function create(array $data)
    {
        var_dump('creating a new database with ' . self::$pdo);
    }

    public function getMethod()
    {
        return self::$pdo;
    }
}

header('Content-Type:text/plain', true);
var_dump(Database::$operators);
Database::connect('pdo');
Database::create([]);
$db = new Database;
echo $db->getMethod();
