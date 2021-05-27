
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

@if ($post->comments->isNotEmpty())
	<div class="mt-5">
		<h3>Commenti</h3>
		<ul>
			@foreach ($post->comments as $comment)
				<li>
					<h5>{{$comment->name ? $comment->name : 'Anonimo'}}</h5>
					<p>{{$comment->content}}</p>
					<div>
						<form action="{{route('admin.comments.destroy', [ 'comment' => $comment->id ])}}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
						</form>
					</div>
				</li>
			@endforeach
		</ul>
	</div>
	@endif
    <div class="mb-5">
        <a href="{{route('admin.posts.index')}}" >Torna alla lista degli articoli</a>
    </div>

    @if (session('message'))
    <div class="alert alert-success" style="position: fixed; bottom: 30px; right: 30px">
        {{ session('message') }}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
    </div>
	@endif

    
@endsection