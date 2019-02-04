<?php

namespace App\Providers;

use App\Policies\PostPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Post;
use App\User;
use App\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    //  Post::class => PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies();

    /*    $gate->define('update-post', function (User $user, Post $post)
     *   {
     *      return $user->id == $post->user_id;
     *   });
    */
        $permissions = Permission::with('roles')->get();
    //    dd($permissions);
        foreach ($permissions as $permission)
        {

            $gate->define($permission->name, function (User $user) use ($permission)
            {
                //var_dump($user->hasPermission($permission));
                return $user->hasPermission($permission);
            });
        }

        $gate->before(function(User $user, $hability)
        {
            if ($user->hasAnyRoles('adm'))
                return true;
        });

    }
}
