
@extends('layouts.base')

@section('pageTitle')
    {{$post->title}}
@endsection

@section('pageContent')

<h4>{{$post->date}}</h4>
<p>{{$post->content}}</p>
<img src={{$post->image}} alt='immagine di' . {{$post->title}}> 
<div><strong>tags: </strong>
    @foreach ($post->tags as $tag)
        <span class="badge badge-primary">{{$tag->name}}</span>
    @endforeach
</div>
    
@endsection