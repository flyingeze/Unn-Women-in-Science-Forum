<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Setting;
use App\User;
use App\Topic;
use App\Repie;
use App\FAQ;
use App\Category;
use App\Department;

class SiteInfoServiceProvider extends ServiceProvider
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
            $site = Setting::where('id', 1)->first();
            $total_topics= Topic::all();
            $total_users= User::all();
            $total_replies = Repie::all();
            $total_faqs = FAQ::all();
            $total_categorys = Category::all();
            $total_departments = Department::all();

            $all_info = ['site'=>$site, 'total_users'=>$total_users, 'total_topics'=>$total_topics, 'total_replies'=>$total_replies, 'total_faqs'=>$total_faqs, 'total_categorys'=>$total_categorys, 'total_departments'=>$total_departments];

            return $view->with($all_info);
        });
    }
}
