<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('students')->insert([
            [
                'name' => '川端 莉緒',
                'email' => 'kawabata_rio@example.com',
                'tel'  => '03-1234-5678',
            ],
            [   
                'name' => '小玉 隆博',
                'email' => 'kodama_takahiro@example.com',
                'tel'  => '03-5678-1234',

            ],
            [
                'name' => '岩井 圭',
                'email' =>  'iwai_kei@example.com',
                'tel'  => '03-3456-7812',
            ]
        ]);
    }
}
