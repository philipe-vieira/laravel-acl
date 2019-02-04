<?php

namespace App\Http\Controllers\Painel;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        //$posts = $this->permission->paginate(10);
        $users = $this->user->all();

        return view('painel.users.index', compact('users'));
    }
}
