<?php

declare(strict_types=1);

namespace Modules\Spid\Providers;

use Illuminate\Support\Facades\View;
use Modules\Xot\Providers\XotBaseRouteServiceProvider;

class RouteServiceProvider extends XotBaseRouteServiceProvider
{
    protected string $moduleNamespace = 'Modules\Spid\Http\Controllers';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    /*
     * Bootstrap the application events.
     */
    /*public function boot(): void {
        $router = app('router');
        $configAuth = dirname(__DIR__).'/config/spid-auth.php';
        $configSAML = dirname(__DIR__).'/config/spid-saml.php';
        $configIdps = dirname(__DIR__).'/config/spid-idps.php';
        $assets = dirname(__DIR__).'/resources/assets';

        $this->mergeConfigFrom($configAuth, 'spid-auth');
        $this->mergeConfigFrom($configSAML, 'spid-saml');
        $this->mergeConfigFrom($configIdps, 'spid-idps');

        $this->loadRoutesFrom(dirname(__DIR__).'/routes/spid-auth.php');
        $this->loadViewsFrom(dirname(__DIR__).'/resources/views', 'spid-auth');
        $this->loadTranslationsFrom(dirname(__DIR__).'/resources/lang', 'spid-auth');

        $this->publishes([$configAuth => config_path('spid-auth.php')], 'spid-config');
        $this->publishes([$assets => public_path('vendor/spid-auth')], 'spid-assets');

        $router->aliasMiddleware('spid.auth', \Italia\SPIDAuth\Middleware::class);

        View::share('SPIDActionUrl', route('spid-auth_do-login'));
    }*/

    /*
     * Register the service provider.
     */
    /*public function register(): void {
        $this->app->singleton('SPIDAuth', function ($app) {
            return new SPIDAuth();
        });

        $this->commands(\Italia\SPIDAuth\Console\CommandExample::class);
    }*/
}
