<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('tags')->delete();
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        DB::table('tags')->insert(
            [
                [
                    'tag' => 'php ' ,
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'tag' => 'html ' ,
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'tag' => 'javascript ' ,
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],


            ]
        );
    }

}
