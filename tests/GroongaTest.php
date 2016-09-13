<?php
namespace MiniGroonga\Test;

use MiniGroonga\Groonga;

class GroongaTest extends \PHPUnit_Framework_TestCase
{
    public function testSelect()
    {
        $query = Groonga::select('rest')->send();
        var_dump($query);
    }
}
