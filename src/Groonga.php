<?php
namespace kerria\GroongaClient;

use kerria\GroongaClient\Query;

class Groonga
{
    public static function select($table)
    {
        return (new Query())->table($table);
    }

    public static function send(Query $query)
    {
    }
}
