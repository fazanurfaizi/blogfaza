<?php

namespace App\Services\Commands\Roles;

use App\Contracts\CommandInterface;

class GetRoleWhere implements CommandInterface {

    protected $where;
    protected $columns;
    protected $with;

    public function __construct(array $where, array $columns = ['*'], array $with = []) {
        $this->where = $where;
        $this->columns = $columns;
        $this->with = $with;
    }

    public function getWhere(): array {
        return $this->where;
    }

    public function getColumns(): array {
        return $this->columns;
    }

    public function getWith(): array {
        return $this->with;
    }

}