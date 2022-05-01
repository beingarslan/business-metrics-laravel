<?php

use App\Http\Controllers\BusinessMetricsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(
    [
        'middleware' => 'auth',
    ],
    function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');

        Route::group(
            [
                'prefix' => 'business-metrics',
                'as' => 'business-metrics.',
            ],
            function () {

                Route::group(
                    [
                        'prefix' => 'gross-profit-margin',
                        'as' => 'gross-profit-margin.',
                    ],
                    function(){
                        Route::get('/', [BusinessMetricsController::class, 'grossProfitMargin']);
                    }
                );

                Route::group(
                    [
                        'prefix' => 'net-profit-margin',
                        'as' => 'net-profit-margin.',
                    ],
                    function(){
                        Route::get('/', [BusinessMetricsController::class, 'netProfitMargin']);
                    }
                );
            }
        );
    }
);
