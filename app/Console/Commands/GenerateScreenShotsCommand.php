<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Browsershot\Browsershot;
use Spatie\Browsershot\Exceptions\CouldNotTakeBrowsershot;

class GenerateScreenShotsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-screen-shots {plugin?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate screen shots for all plugins.';

    /**
     * Execute the console command.
     * @throws CouldNotTakeBrowsershot
     */
    public function handle(): int
    {
        if ($this->argument('plugin')) {
            $plugins = \App\Models\Plugin::where('slug', $this->argument('plugin'))->get();
        } else {
            $plugins = \App\Models\Plugin::all();
        }

        $this->withProgressBar($plugins, function ($plugin) {
            Browsershot::url(config('app.url') . '/' . $plugin->slug)
                ->waitUntilNetworkIdle()
                ->setScreenshotType('jpeg', 80)
                ->windowSize(2560, 1440)
                ->save(storage_path('app/public/screenshots/awcodes-' . $plugin->slug . '.jpg'));
        });

        return self::SUCCESS;
    }
}
