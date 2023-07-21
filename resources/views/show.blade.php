@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container text-center py-5">

        <h1 class="display-5 fw-bold">
            {{ $project -> title}}
        </h1>

        <div>
            {{ $project -> description}}

        </div>
    </div>
</div>

@endsection