<?php

namespace database;

use mysqli;

class connection
{
    public static function connect()
    {
        $server = 'localhost';
        $username = 'root';
        $dbname = 'marketplace';
        $password = '';
        return $connection = new mysqli($server, $username, $password, $dbname);
    }
}
