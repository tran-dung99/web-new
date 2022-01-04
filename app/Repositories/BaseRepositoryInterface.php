<?php

namespace App\Repositories;

use App\Repositories\Impl\BaseInterface;

class BaseRepositoryInterface implements BaseInterface
{
    protected $model;
    public function getAll()
    {
        return $this->model->all();
    }

    public function delete($id)
    {
        $user = $this->model->findOrFail($id);
//        $user->roles()->detach();
        $user->posts()->delete();
        $user->delete();
    }
}
