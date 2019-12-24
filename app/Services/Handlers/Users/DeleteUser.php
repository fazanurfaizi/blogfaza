<?php

namespace App\Services\Handlers\Users;

use Exception;
use App\Contracts\CommandInterface;
use App\Contracts\HandlerInterface;
use App\Exceptions\HandlerException;
use App\Repositories\UserRepository;
use App\GraphQL\Traits\UserFormatter;

class DeleteUser implements HandlerInterface {

    use UserFormatter;

    protected $repository;

    public function __construct(UserRepository $repository) {
        $this->repository = $repository;
    }

    public function handle(CommandInterface $command):? string {
        try {
            $this->repository->delete(
                $command->getUserId()
            );
            return 'User successfully deleted';
        } catch (Exception $e) {
            throw new HandlerException($e->getMessage());
        }
    }

}