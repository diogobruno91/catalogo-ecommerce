<?php 

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    /**
     * Create a new user.
     *
     * @param array $data
     * @return User
     */
    public function create(array $data)
    {
        return User::create($data);
    }

    /**
     * find user by email.
     *
     * @param string $email
     * @return User|null
     */
    public function findByEmail(string $email)
    {
        return User::where('email', $email)->first();
    }
}