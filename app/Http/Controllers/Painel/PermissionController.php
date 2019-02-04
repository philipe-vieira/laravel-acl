<?php

namespace App\Http\Controllers\Painel;

use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    private $permission;
    public function __construct(Permission $permission)
    {
        $this->permission = $permission;
    }

    public function index()
    {
        //$posts = $this->permission->paginate(10);
        $permissions = $this->permission->all();

        return view('painel.permissions.index', compact('permissions'));
    }
}
