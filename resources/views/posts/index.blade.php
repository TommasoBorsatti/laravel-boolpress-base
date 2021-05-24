
@extends('layouts.base')

@section('pageTitle')
    Lista dei nostri Post
@endsection

@section('pageContent')

    @foreach ($posts as $post) 

        <h2>{{$post->title}}</h2>
        <h4>{{$post->date}}</h4>
        <img src={{$post->image}} alt='immagine di' . {{$post->title}}> 
    
    @endforeach

@endsection


