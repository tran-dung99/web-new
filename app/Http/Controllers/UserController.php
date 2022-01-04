<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepositoryInterface;
    public function __construct(UserRepositoryInterface $userRepositoryInterface)
    {
        $this->userRepositoryInterface = $userRepositoryInterface;
    }

    public function index()
    {
        $users = $this->userRepositoryInterface->getAll();
        $output = '';
        foreach ($users as $user){
            $output.= '<tr id="user-'.$user->id.'">
            <td>'.$user->id.'</td>
            <td>'.$user->name.'</td>
            <td>'.$user->email.'</td>
            <td><button class="delete-user" data-id="'.$user->id.'">Delete</button></td>
</tr>';
        }
        return response()->json(["data"=>$output,"success"=>true]);
    }

    public function delete($id)
    {
       $this->userRepositoryInterface->delete($id);
        return response()->json(["success"=>true]);
    }

    public function create(Request $request)
    {

    }
}
