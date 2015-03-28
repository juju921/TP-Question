@extends('layouts.master')

@section('sidebar')
  @parent

@stop


@section('content')
   <ul>
             @foreach($questions as $question)
                 <li><a href="{{url('single/'.$question->id)}}">{{$question->title}}</a>
                     @foreach ($question->tags as $tag)
                         <a href="{{url('tag/'.$tag->id)}}"><span class="label label-default">{{$tag->name}}</span></a>
                     @endforeach
                 </li>
             @endforeach
         </ul>

@stop