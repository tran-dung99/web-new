<?php

namespace App\Repositories\Impl;

interface BaseInterface
{
    public function getAll();

    public function delete($id);
}
