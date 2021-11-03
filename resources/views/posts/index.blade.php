@extends('layouts.main')

@section('content')

	<div class="panel panel-default">
		<div class="panel-heading">
			<span>Posts</span>
			<span class="pull-right">
				<a href="{{ route('posts.create') }}" class="btn btn-xs btn-primary">Create a Post</a>
			</span>
		</div>
		<div class="panel-body">
			<table class="table marginless">
				<thead>
					<tr>
						<th style="width: 20%">Publish Date</th>
						<th style="width: 40%">Title</th>
						<th style="width: 40%">Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($posts as $post)
						<tr>
							<td>{{ $post->getCreatedAt()->format('m/d/Y') }}</td>
							<td>{{ $post->title }}</td>
							<td>
								<a href="{{ route('posts.show', $post) }}" class="btn btn-xs btn-warning">Show</a>
								<a href="{{ route('posts.edit', $post) }}" class="btn btn-xs btn-info">Edit</a>
								<form method="POST" action="{{ route('posts.destroy', $post) }}" style="display: inline">
									{{ method_field('DELETE') }}
									{{ csrf_field() }}
									<a href="#" class="btn btn-xs btn-danger delete-post">Delete</a>
								</form>
							</td>
						</tr>
					@endforeach

					@if ($posts->isEmpty())
						<tr>
							<td colspan="3">Start creating a new <a href="{{ route('posts.create') }}">post</a>.</td>
						</tr>
					@endif
				</tbody>
			</table>
		</div>
	</div>

	<script>
		$(document).ready(function() {

			$('.delete-post').on('click', function(e) {
				e.preventDefault();
				var $form = $(this).closest('form');
				bootbox.confirm("Are you sure you want to delete this post?", function(result) {
					if (result) {
						$form.submit();
					}
				});
			});

		});
	</script>

@endsection