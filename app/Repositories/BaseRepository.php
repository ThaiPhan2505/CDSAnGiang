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
 
    public function pagination(
        array $column = ['*'],
        array $condition = [],
        array $join = [],
        array $extend = [],
        int $perpage = 5
    ) {
        $query = $this->model->select($column)->where(function($query) use ($condition) {
            if(isset($condition['keyword']) && !empty($condition['keyword'])) {
                $query->where('name', 'LIKE', '%'.$condition['keyword'].'%');
            }
        });
        if(!empty($join)) {
            $query->join(...$join);
        }
        return $query->paginate($perpage)->withQueryString()->withPath(env('APP_URL').$extend['path']);
    }

    public function findById(int $Id) {
        return $this->model->findOrFail($Id);
    }

    public function create(array $payload = []) {
       $model = $this->model->create($payload);
       return $model->fresh();
    }
    public function update(int $Id = 0, array $payload = []) {
        $model = $this->findById($Id);
        return $model->update($payload);
    }

    public function delete(int $Id = 0) {
        return $this->findById($Id)->delete();
    }
    // public function all() {

    // }
}
