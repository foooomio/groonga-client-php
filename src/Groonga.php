<?php
namespace kerria\GroongaClient;

use kerria\GroongaClient\Query;

class Groonga
{
    public static function init($config)
    {
    }

    public static function send(Query $query)
    {
    }

    public static function select($table)
    {
        $query = new Query('select');
        return $query->table($table);
    }
}
