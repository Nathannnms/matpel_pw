<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classes')->insert([
            [
            'cls_name' => 'PPLG 1',
        ],
        [
            'cls_name' => 'PPLG 2',
        ],
        [
            'cls_name' => 'DKV 1',
        ],
        [
            'cls_name' => 'DKV 2',
        ],
    ]);
    }
}
