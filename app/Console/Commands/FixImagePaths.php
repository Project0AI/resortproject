<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Destination;
use App\Models\Resort;
use App\Models\Menu;

class FixImagePaths extends Command
{
    protected $signature = 'fix:image-paths';
    protected $description = 'Fix double "storage/storage" in image paths';

    public function handle()
    {
        $this->fixModelPaths(Destination::class, 'Destination');
        $this->fixModelPaths(Resort::class, 'Resort');
        $this->fixModelPaths(Menu::class, 'Menu');

        $this->info('Image paths fixed successfully.');
    }

    private function fixModelPaths($modelClass, $label)
    {
        $items = $modelClass::where('picture', 'like', 'storage/storage/%')->get();
        foreach ($items as $item) {
            $item->picture = str_replace('storage/storage/', 'storage/', $item->picture);
            $item->save();
        }

        $this->info("Fixed {$items->count()} {$label} records.");
    }
}
