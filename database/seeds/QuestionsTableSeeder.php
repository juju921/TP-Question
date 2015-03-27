<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class QuestionsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('Questions')->delete();
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        DB::table('Questions')->insert(
            [
                [
                    'title'       => 'Question 1 : Php',
                    'content'    => 'Quelles variables superglobales permettent de récupérer des données de formulaire utilisant la méthode GET ?',
                    'class_level' =>'facile',
                    'status'=>'',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'title'       => 'Question 2 : Php',
                    'content'    => 'Quelle est la fonction PHP qui permet de mettre en capitale tous les caractères d\'\une chaîne ?',
                    'class_level' =>'moyen',
                    'status'=>'',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'title'       => 'Question 3 : Php',
                    'content' =>'Quelle méthode de la classe SimpleXMLElement permet de compter le nombre fils de l\'objet ?',
                    'class_level' =>'difficile',
                    'status'=>'',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'title'       => 'Question 4 : Php',
                    'content' =>'Quelle méthode de la classe SimpleXMLElement permet de compter le nombre fils de l\'objet ?',
                    'class_level' =>'difficile',
                    'status'=>'',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'title'       => 'Question 5 : Php',
                    'content' =>'Quelle fonction PHP permet de modifier l\'id session courant ? (C\'est également cette fonction qui permet de se prémunir très facilement contre le vol de session.)',
                    'class_level' =>'difficile',
                    'status'=>'',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'title'       => 'Question 6 : Php',
                    'content' =>'Quelle fonction PHP permet de modifier l\'id session courant ? (C\'est également cette fonction qui permet de se prémunir très facilement contre le vol de session.)',
                    'class_level' =>'difficile',
                    'status'=>'',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'title'       => 'Question 7 : Php',
                    'content' =>'Quelle fonction PHP permet de modifier l\'id session courant ? (C\'est également cette fonction qui permet de se prémunir très facilement contre le vol de session.)',
                    'class_level' =>'difficile',
                    'status'=>'',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'title'       => 'Question 8 : Php',
                    'content' =>'Quelle fonction PHP permet de modifier l\'id session courant ? (C\'est également cette fonction qui permet de se prémunir très facilement contre le vol de session.)',
                    'class_level' =>'difficile',
                    'status'=>'',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'title'       => 'Question 9 : Php',
                    'content' =>'Quelle fonction PHP permet de modifier l\'id session courant ? (C\'est également cette fonction qui permet de se prémunir très facilement contre le vol de session.)',
                    'class_level' =>'difficile',
                    'status'=>'',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'title'       => 'Question 10 : Php',
                    'content' =>'Quelle fonction PHP permet de modifier l\'id session courant ? (C\'est également cette fonction qui permet de se prémunir très facilement contre le vol de session.)',
                    'class_level' =>'difficile',
                    'status'=>'',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
            ]
        );
    }

}
