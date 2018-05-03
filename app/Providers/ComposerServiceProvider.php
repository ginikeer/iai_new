<?php namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;

use App\Http\Database\Product_Category;

use App\Services\Helper;


class ComposerServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // 使用类来指定视图组件
//      View::composer('client/product-generate', 'App\Http\ViewComposers\ProductComposer');

        // 使用闭包来指定视图组件
        View::composer(['client.*'], function($view)
        {
        	$nav 													= isset($view->nav) ? $view->nav : "";
        	
			$view->with([
				'nav'												=> $nav,
				'product_category' 									=> Product_Category::getAll()
			]);
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}