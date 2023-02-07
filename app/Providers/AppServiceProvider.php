<?php

namespace App\Providers;

use App\Models\Metric;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use function Illuminate\Session\gc;
use function League\Flysystem\get;

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
        $metriks_random_all = DB::table('metrics')->where('public','=','Да')->limit(3)->get();
        $all_tags_menu = DB::table('tags')->get('title','url');
        View::share(compact('metriks_random_all','all_tags_menu'));
    }
}
