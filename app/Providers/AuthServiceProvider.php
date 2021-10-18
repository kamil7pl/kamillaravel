<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Enums\UserRole;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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
        $this->defineUserRoleGate(UserRole::ADMIN);
        $this->defineUserRoleGate(UserRole::USER);
    }
    private function defineUserRoleGate(string $role)
    {
        Gate::define($role, function(User $user) use($role){
            return $user->role == $role;
        });
    }
}
