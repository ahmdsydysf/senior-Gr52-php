<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class anotherUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:newUser {--name=} {--email=} {--pass=}';

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
        $nm = $this->option('name');
        $em = $this->option('email');
        $pw = $this->option('pass');

        $user = User::create([
            'name' => $nm,
            'email' => $em ? $em : uniqid() . $nm . '@gmail.com' ,
            'password' => $pw ? $pw : 'password123'
        ]);
        if($user) {
            $this->info('user added successfully');
        }
    }
}
