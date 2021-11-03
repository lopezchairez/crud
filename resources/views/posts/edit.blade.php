@extends('layouts.main')

@section('content')

	<div class="panel panel-default">
		<div class="panel-heading">
			<span>Edit the Post</span>
			<span class="pull-right">
				<a href="{{ route('posts.index') }}" class="btn btn-xs btn-default">Go Back</a>
			</span>
		</div>
		<div class="panel-body">
			<form method="POST" action="{{ route('posts.update', $post) }}">
				{{ method_field('PUT') }}
				{{ csrf_field() }}

				<div class="form-group">
					<label>Title</label>
					<input type="text" id="title" class="form-control" name="title" value="{{ $post->title }}">
				</div>

				<div class="form-group">
					<label>Body</label>
					<textarea id="body" class="form-control" name="body" rows="5">{{ $post->body }}</textarea>
				</div>

				<div class="text-left">
					<button type="submit" class="btn btn-primary">Update!</button>
				</div>
			</form>
		</div>
	</div>

@endsection