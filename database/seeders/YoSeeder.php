<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('yos')->insert(
            [
                [
                    'nom' => 'paul',
                    'age' => 24,
                    'mail'=> 'yo@yo',
                    'phone'=> 0425254153
                ],
                [
                    'nom' => 'vio',
                    'age' => 24,
                    'mail'=> 'ya@ya',
                    'phone'=> 0425255153
                ],
                [
                    'nom' => 'tid',
                    'age' => 24,
                    'mail'=> 'ye@ye',
                    'phone'=> 0445255157
                ],
                [
                    'nom' => 'younes',
                    'age' => 24,
                    'mail'=> 'yu@yu',
                    'phone'=> 0445255153
                ]
            ]
            
            );
    }
}
