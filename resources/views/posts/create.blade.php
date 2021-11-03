@extends('layouts.main')

@section('content')

	<div class="panel panel-default">
		<div class="panel-heading">
			<span>Create a new Post</span>
			<span class="pull-right">
				<a href="{{ route('posts.index') }}" class="btn btn-xs btn-default">Go Back</a>
			</span>
		</div>
		<div class="panel-body">
			<form method="POST" action="{{ route('posts.store') }}">
				{{ csrf_field() }}

				@if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif

				<div class="form-group">
					<label>Title</label>
					<input type="text" id="title" class="form-control" name="title" value="{{ old('title') }}">
				</div>

				<div class="form-group">
					<label>Body</label>
					<textarea id="body" class="form-control" name="body" rows="5">{{ old('body') }}</textarea>
				</div>

				<div class="text-left">
					<button type="submit" class="btn btn-primary">Create!</button>
				</div>
			</form>
		</div>
	</div>

@endsection