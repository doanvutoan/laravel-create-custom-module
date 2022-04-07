<?php

namespace Modules\Basic;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ModuleBasicProvider extends ServiceProvider
{

    protected $moduleName = 'Basic';

    /**
     * registerModules
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom($this->getModules() . DIRECTORY_SEPARATOR . 'Migrations');
        $this->mapModuleRoutes($this->getModules());
        $this->loadViewsFrom($this->getModules() . DIRECTORY_SEPARATOR . 'Views', $this->moduleName);
    }

    /**
     * @return array
     */
    public function getModules(): string
    {
        return __DIR__;
    }

    /**
     * Define the "module" routes for the application.
     *
     * @param string $module
     * @return void
     */
    protected function mapModuleRoutes(string $module): void
    {
        $routerWebPath = $module . DIRECTORY_SEPARATOR . 'Routers/web.php';
        $routerApiPath = $module . DIRECTORY_SEPARATOR . 'Routers/api.php';

        if (file_exists($routerWebPath)) {
            Route::middleware('web')
                ->namespace("Modules\\{$this->moduleName}\\Controllers")
                ->group($routerWebPath);
        }

        if (file_exists($routerApiPath)) {
            Route::prefix('api')
                ->middleware('api')
                ->namespace("Modules\\{$this->moduleName}\\Controllers")
                ->group($routerApiPath);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}

