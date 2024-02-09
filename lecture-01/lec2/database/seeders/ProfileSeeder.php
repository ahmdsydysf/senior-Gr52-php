<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [1 , 'ahmed' , 'sayed' , '0100' , 'male' ,'cairo' , '30' ],
            [2 , 'ahmed2' , 'sayed2' , '0120' , 'male' ,'cairo2' , '32' ],
            [3 , 'ahmed3' , 'sayed3' , '0130' , 'male' ,'cairo3' , '33' ],
            [4 , 'ahmed4' , 'sayed4' , '0140' , 'male' ,'cairo4' , '34' ],
        ];
        foreach($data as $profile) {

            // DB::table('profiles')->insert([
            //     'user_id' => $profile[0],
            //     'last_name' => $profile[2],
            //     'age' =>  $profile[6],
            //     'mobile' => $profile[3],
            //     'gender' => $profile[4],
            //     'address' => $profile[5],
            //     'first_name' => $profile[1],
            // ]);

            Profile::create([
                'user_id' => $profile[0],
                'last_name' => $profile[2],
                'age' =>  $profile[6],
                'mobile' => $profile[3],
                'gender' => $profile[4],
                'address' => $profile[5],
                'first_name' => $profile[1],
            ]);
        }
    }
}
