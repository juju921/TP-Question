@extends('layouts.master')

@section('sidebar')
  @parent

@stop


@section('content')
 <h2>{{$questions -> title}}</h2>
<p>{{$questions ->created_at->format('d-m-Y')}}</p>
   <p>{{$questions -> content}}</p>


@stop