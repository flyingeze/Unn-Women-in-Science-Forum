<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Department;
use App\Category;

class SelectBoxServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view){
            $categorys = Category::
                orderBy('cat_title','ASC')
                ->get();
            return $view->with('categorys', $categorys);
        });
        view()->composer('*', function($view){
            $departments = Department::
                orderBy('department_title','ASC')
                ->get();
            return $view->with('departments', $departments);
        });
    }
}
