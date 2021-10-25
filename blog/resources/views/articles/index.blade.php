<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	@extends("layouts.app")
	@section("content")
	<div class="container">
		@if(session("info"))
		<div class="alert alert-info">
			{{session('info')}}
		</div>
		@endif
	
        {{ $articles->links() }}
		@foreach($articles as $article)
		<div class="card mb-5">
			<div class="card-header">
				{{$article->title}}
			</div>
			<div class="card-body">
			<a href="{{ url("/articles/detail/$article->id")}}">View Details</a> 
				<br>
				<br>
				{{$article->body}}
			</div>
			<div class="card-footer">
				
				<b>Category:</b>
				{{$article ->category->name}},
			
				{{$article->created_at->diffForHumans()}},
			</div>
		</div>
		@endforeach
	</div>
	@endsection
</body>
</html>