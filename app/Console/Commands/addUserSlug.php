<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Console\Command;

class addUserSlug extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:add-slug';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add slug to users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::all();

        foreach ($users as $user) {
            $user->update([
                'slug' => Str::slug($user->name)
            ]);
        }
    }
}
