<?php

namespace App\Providers;

use App\Modules\Category\CategoryRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $category_repository = app()->make(CategoryRepository::class);
        $categories = $category_repository->getList();
        view()->share('nav_categories', $categories);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
