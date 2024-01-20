<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:newUser {myname} {elemail} {pass?}';
    // make:newUSer ahmedsayed ahmed@ssdf asdnasdls2
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this making new user in database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $nm = $this->argument('myname');
        $em = $this->argument('elemail');
        $pw = $this->argument('pass');

        $user = User::create([
            'name' => $nm,
            'email' => $em,
            'password' => $pw ? $pw : 'password123'
        ]);
        if($user) {
            $this->info('user added successfully');
        }

    }
}
