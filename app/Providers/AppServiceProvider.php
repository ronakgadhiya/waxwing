<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\BlogCategory;
use App\Models\ProductCategory;
use App\Models\Social;
use Illuminate\Pagination\Paginator;

use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        View::composer('*', function($view){
            
            $BlogCategorylist=BlogCategory::where('status',1)->get();
            $socialmedia=Social::get();
            // dd($socialmedia);
            $ProductCategorylist=ProductCategory::where('status',1)->get();
            $ProductCategory=ProductCategory::where('status',1)->get();
            
            view()->share([
               
                'BlogCategorylist'=>$BlogCategorylist,
                'socialmedia'=>$socialmedia,
                'ProductCategorylist'=>$ProductCategorylist,
                'ProductCategory'=>$ProductCategory,
            ]);
        });
    }
}
