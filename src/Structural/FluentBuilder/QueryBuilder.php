<?php

namespace Structural\FluentBuilder;


class QueryBuilder implements QueryBuilderInterface
{
    public string $select = '';
    public string $from = '';
    public string $where = '';


    public function select(string $fields): QueryBuilderInterface
    {
        $this->select = $fields;
        return $this;
    }

    public function from(string $table): QueryBuilderInterface
    {
        $this->from = $table;
        return $this;
    }


    public function where(string $condition): QueryBuilderInterface
    {
        $this->where .= $condition;
        return $this;
    }

    public function getSQL(): string
    {
        $sql = 'select ' . $this->select . ' from ' . $this->from;
        if (!empty($this->where)) {
            $sql .= ' where ' . $this->where;
        }
        return $sql;
    }
}
