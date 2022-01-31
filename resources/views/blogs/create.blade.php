@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group my-2">
                    <label for="">Başlıq</label>
                    <input type="text" name="title" class="form-control">
                    @error('title')
                        <span class="my-2 text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="">Mətn</label>
                    <input type="text" name="description" class="form-control">
                    @error('description')
                        <span class="my-2 text-danger">{{ $message }}</span>

                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="">Şəkil</label>
                    <input type="file" name="image" class="form-control">
                    @error('image')
                        <span class="my-2 text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Post əlavə et</button>
            </form>
        </div>
    </div>
@endsection
