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
			<article>
				<div style="margin-bottom: 15px; padding-bottom: 15px; border-bottom: solid 1px #eee;">
					<h2 class="marginless">{{ $post->title }}</h2>
				</div>
				<p class="small text-muted">Publish Date: {{ $post->getCreatedAt()->format('m/d/Y') }}</p>
				<p class="marginless">{{ $post->body }}</p>
			</article>
		</div>
	</div>

@endsection