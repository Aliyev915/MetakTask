@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <img src="{{ asset('uploads/' . $blog->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $blog->title }}</h5>
                    <p>{{ $blog->created_at->format('Y M d h:i') }}</p>
                    <p class="card-text">{{ $blog->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
