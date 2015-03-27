<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    public function questions(){

        $mytag =  $this->belongsToMany('App\Question', 'question__tags');
        return view('front.index', compact('mytag'));
    }

}
