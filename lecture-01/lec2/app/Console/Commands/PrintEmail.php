<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PrintEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'print:email {email}';

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
        // $em = $this->argument('email');
        // $pw = $this->argument('pass');
        // $data = $this->arguments();
        // dd($data['email']);
        // $this->info('your email is ' . $em . ' and password is' . $pw);

        $pw = $this->secret('what is your password ?');
        // $nm = $this->ask('what is your name ?');
        $em = $this->argument('email');

        if($this->confirm('is your age above 20 ?')) {

            $this->info($pw . ' email : ' . $em);
        } else {
            $this->info(' email : ' . $em);

        }
    }
}
