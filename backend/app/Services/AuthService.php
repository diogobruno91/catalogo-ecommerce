<?php 

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Register new user.
     *
     * @param array $data
     * @return \App\Models\User
     */
    public function register(array $data)
    {
        
        $data['password'] = Hash::make($data['password']);
        
        return $this->userRepository->create($data);
    }

    /**
     * Login user.
     *
     * @param string $email
     * @param string $password
     * @return \App\Models\User|null
     */
    public function login(string $email, string $password)
    {
        $user = $this->userRepository->findByEmail($email);

        if ($user && Hash::check($password, $user->password)) {
            return $user;
        }

        return null;
    }
}