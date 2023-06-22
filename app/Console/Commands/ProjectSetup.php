<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ProjectSetup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:project-setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear caches, wipe the database, run migrations, and seed the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Clearing cache...');
        Artisan::call('cache:clear');

        $this->info('Clearing route cache...');
        Artisan::call('route:clear');

        $this->info('Clearing view cache...');
        Artisan::call('view:clear');

        $this->info('Clearing config cache...');
        Artisan::call('config:clear');

        $this->info('Wiping the database...');
        Artisan::call('db:wipe');

        $this->info('Running migrations...');
        Artisan::call('migrate');

        $this->info('Running seeders...');
        Artisan::call('db:seed');

        $this->info('All done. Project is ready to start!');

        return 0;
    }
}
