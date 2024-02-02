<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['ملابس' , 'احذية' , 'موبايلات'];
        foreach($data as $categoryName) {
            DB::table('categories')->insert([
                'name' => $categoryName
            ]);
        }

    }
}
