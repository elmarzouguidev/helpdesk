<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DevController extends Controller
{
    public function storageLink()
    {
        Artisan::call('storage:link');
    }

    public function storageUnLink()
    {
        \shell_exec('cd public');
        \shell_exec('rm storage');
    }

    public function cleareAll()
    {
        Artisan::call('optimize:clear');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
    }

    public function cacheAll()
    {

        //dd('fefefefefffffffffffff');
        Artisan::call('optimize');
        Artisan::call('config:cache');
        Artisan::call('route:cache');
        Artisan::call('view:cache');
    }
}
