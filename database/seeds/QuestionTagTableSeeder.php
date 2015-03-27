<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class QuestionTagTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('question__tags')->delete();
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        DB::table('question__tags')->insert(
            [


            ]
        );
    }

}
