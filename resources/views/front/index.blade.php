@extends('layouts.master')

@section('sidebar')
  @parent

@stop


@section('content')
<ul>
@foreach($questions as $q)
<li><a href="{{url('single/'.$q ->id)}}">{{$q->title}}</a>
@foreach ($q->tags as $tag)
   <a href="{{url('tag/'.$tag->id)}}"><span class="label label-default">{{$tag->tag}}     </span></a>
@endforeach
</li>
@endforeach
</ul>

        <?php echo $questions->render(); ?>

@stop