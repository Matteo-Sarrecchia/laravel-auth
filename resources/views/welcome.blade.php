@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container text-center py-5">

        <h1 class="display-5 fw-bold">

            <h1>PROJECT LIST</h1>

           @foreach ($projects as $project)
                <ul class="list-unstyled">
                    <li>
                    
                        <a href="{{ route('show', $project -> id) }}">
                            {{ $project -> title }}
                        </a>
                    </li>
                </ul>
           @endforeach
        </h1>
    </div>
</div>

@endsection