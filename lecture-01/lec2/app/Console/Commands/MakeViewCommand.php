<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:newView {view}';// errors.503

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $myView = $this->argument('view');
        $fullPath = $this->getFullPath($myView);
        $dir = $this->checkFolder($fullPath);
        if(File::exists($fullPath)) {
            $this->error("This File $fullPath is already exists");
        } else {
            File::put($fullPath, $fullPath);
            $this->info('file created');
        }
    }

    public function getFullPath($myView)
    {
        $view = str_replace('.', '/', $myView) . '.blade.php';
        $fullPath = "resources/views/$view";
        return $fullPath;
    }

    public function checkFolder($fullPath)
    {
        $dir = dirname($fullPath);

        if(! file_exists($dir)) {
            mkdir($dir, 0777, true);
        }

        return $dir;
    }
}
