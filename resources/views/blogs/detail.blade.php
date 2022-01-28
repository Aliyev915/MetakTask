@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <form action="">
                <div class="form-group my-2">
                    <label for="">Başlıq</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group my-2">
                    <label for="">Mətn</label>
                    <input type="text" name="desciption" class="form-control">
                </div>
                <div class="form-group my-2">
                    <label for="">Şəkil</label>
                    <input type="text" name="image" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary"></button>
            </form>
        </div>
    </div>
@endsection