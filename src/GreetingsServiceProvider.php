<?php
    namespace Amershadow\Greetings;
    use Illuminate\Support\ServiceProvider;


    class ContactFormServiceProvider extends ServiceProvider {
        public function boot()
        {
            $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $this->loadViewsFrom(__DIR__.'/resources/views','Greetings');


        }
        public function register()
        {
        }
    }
    ?>
