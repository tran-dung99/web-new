<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Impl\UserInterface;

class UserRepositoryInterface extends BaseRepositoryInterface implements UserInterface
{
     public function __construct(User $user)
     {
         $this->model = $user;
     }
}
