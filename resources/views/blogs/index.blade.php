@php
$count = 17;
@endphp

@extends('layouts.layout')

@section('content')
    <div class="toast d-flex align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    <div class="container">
        <h2 class="text-center mt-5">
            Postlar
        </h2>
        <a href="/blog/create" class="btn btn-success w-25 text-center mx-auto my-3">Post Əlavə Et</a>
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6">
                <div class="card my-3">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Daha ətraflı</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card my-3">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card my-3">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card my-3">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card my-3">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

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
