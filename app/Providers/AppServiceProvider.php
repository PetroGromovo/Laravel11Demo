<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Laravel\Pennant\Feature;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Feature::define('isManagerLogged', function (User $user) {
            // THESE @ LINES NOT IN LOG
            \Log::info(' -1 $user->isManager()::');
            \Log::info($user->isManager());

            return $user->isManager();
        });
        Feature::define('isAdminLogged', function (User $user) {
            // THESE @ LINES NOT IN LOG
            \Log::info(' -1 $user->isAdmin()::');
            \Log::info($user->isAdmin());

            return $user->isAdmin();
        });
    }
}
