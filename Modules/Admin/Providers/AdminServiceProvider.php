<?php

namespace Modules\Admin\Providers;

use App\Menu;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom(module_path('Admin', 'Database/Migrations'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path('Admin', 'Config/config.php') => config_path('admin.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path('Admin', 'Config/config.php'), 'admin'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/admin');

        $sourcePath = module_path('Admin', 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/admin';
        }, \Config::get('view.paths')), [$sourcePath]), 'admin');

        $menu = $this->menu();
        View::share('menu', $menu);
    }

     public function menu()
     {
         $menu = Menu::query()->get()->toArray();
         $menu_nn = [];
         $menu_n = [];
         foreach ($menu as $m) {
             if ($m['parent-id'] == '')
                 $menu_n[] = $m;
             else
                 $menu_nn[] = $m;
         }
         $badge = json_decode(json_encode(DB::table('badge')->get()), true);
         $menu_array = [];
         $menu_array1 = $this->getmenu($menu_nn, $menu_n, $menu_array, $badge);
         $menu1 = '';
         $menuhtml = $this->menuhtml($menu_array1);
         return $menuhtml;

     }

     public function menuhtml($menu_array1)
     {
         $menu = '';
         foreach ($menu_array1 as $m) {
             $active = '';
             $class = '';
             if ($m['text'] == 'Dashboard') {
                 $active = "active";
                 $class = "has-treeview menu-open";
             }
             if ($m['text'] == 'Dashboard v1')
                 $active = "active";
             $menu .= "
                 <li class='nav-item {$class}'><a href='{$m['url']}' class='nav-link {$active}'>
                             <i class='{$m['icon']}'></i>
                             <p>{$m['text']}";
             if (isset($m['badge'])) {
                 foreach ($m['badge'] as $badge) {
                     if ($badge['icon'] != '') {
                         $menu .= "<i class='{$badge['icon']}'></i>";
                     }

                     if ($badge['type'] != '' && $badge['text'] != '') {
                         $menu .= "<span class='right badge badge-{$badge['type']}'>{$badge['text']}</span>";
                     }
                 }
             }

             $menu .= "</p></a>";

             if (isset($m['child'])) {
                 $menu .= "<ul class='nav nav-treeview'>{$this->menuhtml($m['child'])}</ul>";
             }


             $menu .= "</li>";
         }

         return $menu;
     }

     public function getmenu($menu_nn, $menu_n, $menu_array, $badge)
     {
         $i = 0;
         foreach ($menu_n as $m) {
             $menu_array[$i]['icon'] = $m['icon'];
             $menu_array[$i]['text'] = $m['text'];
             $menu_array[$i]['url'] = $m['url'];
             $j = 0;

             foreach ($badge as $item) {
                 if ($item['menu-id'] == $m['id']) {
                     $menu_array[$i]['badge'][$j]['text'] = $item['text'];
                     $menu_array[$i]['badge'][$j]['icon'] = $item['icon'];
                     $menu_array[$i]['badge'][$j]['type'] = $item['type'];
                 }
             }

             $menu_c = [];
             foreach ($menu_nn as $item) {
                 if ($item['parent-id'] == $m['id'])
                     $menu_c[] = $item;
             }
             if ($menu_c != null) {
                 $menu_array1 = [];
                 $menu_array[$i]['child'] = $this->getmenu($menu_nn, $menu_c, $menu_array1, $badge);
             }
             $i++;
         }
         return $menu_array;
     }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/admin');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'admin');
        } else {
            $this->loadTranslationsFrom(module_path('Admin', 'Resources/lang'), 'admin');
        }
    }

    /**
     * Register an additional directory of factories.
     *
     * @return void
     */
    public function registerFactories()
    {
        if (! app()->environment('production') && $this->app->runningInConsole()) {
            app(Factory::class)->load(module_path('Admin', 'Database/factories'));
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
