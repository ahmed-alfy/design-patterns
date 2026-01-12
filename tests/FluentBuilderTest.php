<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\FluentBuilder\QueryBuilder;

class FluentBuilderTest extends TestCase
{
    public function testCanBuildSQLQueryUsingFluentBuilder()
    {

        $query = new QueryBuilder();
        $sql = $query->select('*')
            ->from('users')
            ->where('age > 18')
            ->getSQL();
        $this->assertEquals('select * from users where age > 18', $sql);
    }
}
