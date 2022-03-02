<?php
class Connection
{
    public static function make($config)
    {
        try {
            return new PDO("mysql:dbhost=" . $config['dbhost'] . ";dbname=" . $config['dbname'], $config['username'], $config['password'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
