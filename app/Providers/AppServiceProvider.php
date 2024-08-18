<?php

namespace App\Providers;
use App\Models\Data;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
         Model::preventLazyLoading();

        //        Paginator::useBootstrapFive();
        //        Gate::define('edit-data', function (User $user, Data $data) {
        //            return $data-->user->is($user);
        //        });
    }
}
