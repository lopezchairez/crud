@extends('layouts.main')

@section('content')
    
    <div class="panel panel-default">
        <div class="panel-heading">
            <span>Home</span>
        </div>
        <div class="panel-body">
            
            <div class="list-group marginless">
                <a href="{{ route('posts.index') }}" class="list-group-item">
                    <span>Posts</span>
                    <span class="pull-right">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    </span>
                </a>
            </div>

        </div>
    </div>

@endsection
