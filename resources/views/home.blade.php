@extends('layouts.app')

@section('content')
<div class="container single-page">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <a class="read-more order-2" href="/posts/create">Create Post</a>
                    <a class="read-more order-2" href="/">View Posts</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
