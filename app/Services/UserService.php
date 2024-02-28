<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Services\Interfaces\UserServiceInterface;
use App\Repositories\Interfaces\UserRepositoryInterface as UserRepository;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserService
 * @package App\Services
 */
class UserService implements UserServiceInterface
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function paginate($request) {
        $condition['keyword'] = addslashes($request->input('keyword'));
        $perPage = $request->integer('perpage');
        $users = $this->userRepository->pagination([
            'id', 'name', 'email', 'password', 'status'], 
            $condition, [], ['path' => 'user/index']);
        return $users;
    }

    public function updateStatus($post = []) {
        DB::beginTransaction();
        try {
            $payload[$post['field']] = (($post['value'] == 'Active')?'Inactive':'Active');
            $users = $this->userRepository->update($post['modelId'], $payload);
            DB::commit();
            return true;
        } catch(\Exception $e) {
            DB::rollBack();
            return false;
        }
    }

    public function create($request) {
        DB::beginTransaction();
        try {
            $payload = $request->except(['_token', 'vaitro', 're-password']);
            $payload['password'] = Hash::make($payload['password']);
            $users = $this->userRepository->create($payload);
            DB::commit();
            return true;
        } catch(\Exception $e) {
            DB::rollBack();
            return false;
        }
    }

    public function destroy($Id) {
        DB::beginTransaction();
        try {
            $users = $this->userRepository->delete($Id);
            DB::commit();
            return true;
        } catch(\Exception $e) {
            DB::rollBack();
            return false;
        }
    }
}
