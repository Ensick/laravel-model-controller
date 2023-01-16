@extends('layouts.app')

@section('title-page','Movies')

@section('main-content')

    <div class="cont-card">
        
        @foreach($movies as $elem)
            <div class="card-film">
                <h2>{{$elem['title']}}</h2>
                <h3>{{$elem['nationality']}}</h3>
                <h4>{{$elem['date']}}</h4>
                <h3 class="voto">{{$elem['vote']}}</h3>
            </div>
        @endforeach
    </div>
   

@endsection