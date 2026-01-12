<?php

namespace Structural\FluentBuilder;

interface QueryBuilderInterface
{
    public function select(string $fields): QueryBuilderInterface;

    public function from(string $table): QueryBuilderInterface;

    public function where(string $condition): QueryBuilderInterface;

    public function getSQL(): string;
}
