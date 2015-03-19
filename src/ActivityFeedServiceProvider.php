<?php namespace Spatie\ActivityFeed;

use Illuminate\Support\ServiceProvider;

class ActivityFeedServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $timestamp = date('Y_m_d_His', time());

        $this->publishes([
            __DIR__ . '../../migrations/create_activities_table.php' => base_path('database/migrations/'.$timestamp.'_create_activities_table.php'),
        ], 'migrations');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // TODO: Implement register() method.
    }
}