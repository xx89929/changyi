<?php

namespace App\Providers;

use App\Models\CaseModel;
use App\Models\CaseTypeModel;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        Schema::defaultStringLength(191);
        View::share('qshow', config('filesystems.disks.admin.url').'/');

        $case = CaseModel::all();
        $bannerCase = $case->take(12)->all();
        View::share('bannerCase' , $bannerCase);

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
