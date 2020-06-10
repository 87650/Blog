
@extends('Posts')

@section('content')

   @foreach($result as $kei => $value)
    <li>
        <h3><a href={{"/posts/" . $value->id}}> {{$value->name}}</a></h3>
        <p><strong>{{$value->dats}}</strong>{{$value->Texts}}<a href='#'>More…</a></p>
        @isset($tests)
            <a href="{{"/form_/" . $value->id}}">update</a>
        @endisset

    </li>
    @endforeach


   <div class="container">
   {{$result->links()}}
   </div>
@endsection
<?php


?>

