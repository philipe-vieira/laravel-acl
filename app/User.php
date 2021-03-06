<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Permission;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


    public function hasPermission(Permission $permission)
    {
        //var_dump();
        return $this->hasAnyRoles($permission->roles);
    }

    public function hasAnyRoles($roles)
    {
        if(is_array($roles) || is_object($roles))
        {
//            foreach ($roles as $role)
//            {
//                return $this->hasAnyRoles($role->name);
//            }
            // Deus me defenderai pq n entendi esse macumba aqui...
            return !! $roles->intersect($this->roles)->count();
        }
        //dd($this->roles);
        return $this->roles->contains( 'name', $roles);
    }
}
