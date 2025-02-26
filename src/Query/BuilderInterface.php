<?php

namespace Oriceon\Wmi\Query;

use Oriceon\Wmi\ConnectionInterface;

interface BuilderInterface
{
    public function __construct(ConnectionInterface $connection);

    public function select($columns);

    public function where($column, $operator, $value);

    public function orWhere($column, $operator, $value);
}
