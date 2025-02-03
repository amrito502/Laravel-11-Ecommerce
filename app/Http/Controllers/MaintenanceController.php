<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class MaintenanceController extends Controller
{
    public function ClearAppCache(){
        Artisan::call('cache:clear');
        return 'Application cache has been cleared!';
    }
}
