<?php

namespace App\Providers;

use DB;
use Log;
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
        /* 
        * Funcion que logea las queris, probé solo con el insert y funciona 
        *
        
        DB::listen(function($query) {
            if (strpos($query->sql, 'insert') !== false) {
                foreach ($query->bindings as $i => $binding) {
                    if ($binding instanceof \DateTime) {
                        $query->bindings[ $i ] = $binding->format('\'Y-m-d H:i:s\'');
                    } else {
                        if (is_string($binding)) {
                            $query->bindings[ $i ] = "'$binding'";
                        }
                    }
                }
                // Insert bindings into query
                $query->sql = str_replace(['%', '?'], ['%%', '%s'], $query->sql);
                $query->sql = vsprintf($query->sql, $query->bindings);

                Log::info(
                    $query->sql
                );
            }
            
        });
        */

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
