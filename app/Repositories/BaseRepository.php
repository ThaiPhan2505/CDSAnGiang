<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserService
 * @package App\Services
 */
class BaseRepository implements BaseRepositoryInterface
{
    protected $model;
    
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function findById(int $Id) {
        return $this->model->findOrFail($Id);
    }

    public function create(array $payload = []) {
       $model = $this->model->create($payload);
       return $model->fresh();
    }

    public function delete(int $Id = 0) {
        return $this->findById($Id)->delete();
    }
    // public function all() {

    // }
}
