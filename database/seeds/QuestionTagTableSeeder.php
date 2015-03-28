<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class QuestionTagTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('question_tags')->delete();
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        DB::table('question_tags')->insert(
            [

                [
                    'question_id' => '1 ' ,
                    'tag_id'=>'1',

                ],




            ]
        );
    }

}
