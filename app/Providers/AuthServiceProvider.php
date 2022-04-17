<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

      
        /* define a admin user role */
            Gate::define('isAdmin', function($user) {
                return $user->user_type == 'Admin';
             });

        /* define a Faculty user role */
            Gate::define('isFaculty', function($user) {
                return $user->user_type == 'Faculty';
             });
            
        /* define a Student user role */
        Gate::define('isStudent', function($user) {
            return $user->user_type == 'Student';
        });
    }
}
