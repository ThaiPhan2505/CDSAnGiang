<?php

namespace App\Repositories\Interfaces;

/**
 * Interface UserServiceInterface
 * @package App\Services\Interfaces
 */
interface UserRepositoryInterface
{
    public function getAllPaginate();
    public function create();
    public function findById(int $Id);
    public function delete(int $Id);
    public function update(int $Id, array $payload);
}
