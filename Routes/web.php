<?php

declare(strict_types=1);

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

/*Route::group([
    'prefix' => config('spid-auth.routes_prefix'),
    'middleware' => config('spid-auth.middleware_group'),
], function () {
    Route::get('login', [
        'as' => 'spid-auth_login',
        'uses' => 'SPIDAuth@login',
    ]);
    Route::post('login', [
        'as' => 'spid-auth_do-login',
        'uses' => 'SPIDAuth@doLogin',
    ]);
    Route::match(['get', 'post'], 'logout', [
        'as' => 'spid-auth_logout',
        'uses' => 'SPIDAuth@logout',
    ]);
    Route::post('acs', [
        'as' => 'spid-auth_acs',
        'uses' => 'SPIDAuth@acs',
    ]);
    Route::get('metadata', [
        'as' => 'spid-auth_metadata',
        'uses' => 'SPIDAuth@metadata',
    ]);
    Route::get('providers', [
        'as' => 'spid-auth_providers',
        'uses' => 'SPIDAuth@providers',
    ]);
}
);
*/
