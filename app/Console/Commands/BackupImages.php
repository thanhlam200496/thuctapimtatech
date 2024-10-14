<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class BackupImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup all images from storage/app/public/images directory';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Get all files in the images directory
        $files = File::allFiles(storage_path('app/public/images'));

        // Check if there are files in the directory
        if (empty($files)) {
            $this->info('No files found in the images directory.');
        } else {
            foreach ($files as $file) {
                $this->info('Backing up file: ' . $file->getRealPath());
            }
        }
    }
}
