<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('characters')->truncate(); 

        DB::table('characters')->insert([
            [
                'name' => 'Yuta Okkotsu',
                'image' => 'images/yuta.jpg', // Path gambar Yuta
                'curse_technique' => "Rika's Curse",
                'description' => 'The former Special Grade sorcerer.'
            ],
            [
                'name' => 'Yuji Itadori',
                'image' => 'images/yuji.jpg', // Path gambar Yuji
                'curse_technique' => 'Divergent Fist',
                'description' => 'The vessel of Sukuna.'
            ]
        ]);
    }
}
