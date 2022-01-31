@php
$count = App\Models\Blog::all()->count();
@endphp

@extends('layouts.layout')

@section('content')
    <div class="container">
        <h2 class="text-center mt-5">
            Postlar
        </h2>
        <a href="/blog/create" class="btn btn-success w-25 text-center mx-auto my-3">Post Əlavə Et</a>
        <div class="row justify-content-center">
            @foreach ($blogs as $blog)
            <div class="col-md-4 col-sm-6">
                <div class="card my-3">
                    <img src="{{ asset('uploads/'.$blog->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                        <span>{{ $blog->created_at->format('Y M d h:i') }}</span>
                        <p class="card-text">{{ Str::length($blog->description)> 50 ? Str::substr($blog->description,0,50) : $blog->description }}</p>
                        <a href="/blog/detail/{{ $blog->id }}" class="btn btn-primary">Daha ətraflı</a>
                    </div>
                </div>
            </div>
            @endforeach

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center mt-4">
                    @if ($page > 1)
                        <li class="page-item"><a class="page-link"
                                href="/blog?page={{ $page - 1 }}">Əvvəlki</a></li>
                    @endif
                    @for ($i = 0; $i < ceil($count / 5); $i++)
                        <li class="page-item"><a class="page-link"
                                href="/blog?page={{ $i + 1 }}">{{ $i + 1 }}</a></li>
                    @endfor
                    @if ($page < ceil($count / 5))
                        <li class="page-item"><a class="page-link"
                                href="/blog?page={{ $page + 1 }}">Sonrakı</a>
                    @endif
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
