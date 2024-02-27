<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Services\Interfaces\UserServiceInterface as UserService;
use App\Repositories\Interfaces\UserRepositoryInterface as UserRepository;

class UserController extends Controller
{

    protected $userService;
    protected $userRepository;
    public function __construct(UserService $userService, UserRepository $userRepository)
    {
        $this->userService = $userService;
        $this->userRepository = $userRepository;
    }

    public function index() {
        $users = $this->userService->paginate();
        $config = $this->config();
        $config['seo'] = config('apps.user');
        $template = 'backend.user.index';
        return view('backend.dashboard.layout', compact('template', 'config', 'users'));
    }

    public function create() {
        $config['seo'] = config('apps.user');
        $config['method'] = 'create';
        $template = 'backend.user.create';
        return view('backend.dashboard.layout', compact('template', 'config'));
    }

    public function store(StoreUserRequest $request) {
        if($this->userService->create($request)) {
            return redirect()->route('user.index')->with('success', 'Thêm thành công');
        }
        return redirect()->route('user.index')->with('error', 'Thêm không thành công, Hãy thử lại!');
    }

    public function edit($Id) {
        $user = $this->userRepository->findById($Id);
        $config['seo'] = config('apps.user');
        $config['method'] = 'edit';
        $template = 'backend.user.create';
        return view('backend.dashboard.layout', compact('template', 'config', 'user'));
    }

    public function delete($Id) {
        $user = $this->userRepository->findById($Id);
        $config['seo'] = config('apps.user');
        $template = 'backend.user.delete';
        return view('backend.dashboard.layout', compact('template', 'config', 'user'));
    }

    public function destroy($Id) {
        if($this->userService->destroy($Id)) {
            return redirect()->route('user.index')->with('success', 'Xóa Thành Công');
        }
        return redirect()->route('user.index')->with('error', 'Xóa không thành công, Hãy thử lại!');
    }

    private function config() {
        return [
            'js' => [
                'backend/js/plugins/switchery/switchery.js',
            ],
            'css' => [
                'backend/css/plugins/switchery/switchery.css'
            ]
        ];
    }
}
