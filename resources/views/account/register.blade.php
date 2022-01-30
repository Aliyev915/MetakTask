<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <h2 class="text-center mt-3">Qeydiyyatdan keç</h2>
            <div class="col-md-8 offset-md-2">
                <form method="POST">
                    @csrf
                    @if (Session::has('error_message'))
                        <div class="text-danger my-3 text-center">{!! Session('error_message') !!}</div>
                    @endif
                    <div class="form-group my-2">
                        <label for="">İstifadəçi adı</label>
                        <input type="text" name="username" class="form-control">
                        @error('username')
                            <div class="text-danger my-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                        @error('email')
                            <div class="text-danger my-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="">Parol</label>
                        <input type="password" name="password" class="form-control">
                        @error('password')
                            <div class="text-danger my-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="">Parolu təsdiqlə</label>
                        <input type="password" name="confirm_password" class="form-control">
                        @error('confirm_password')
                            <div class="text-danger my-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button class="btn mt-4 btn-success">Qeydiyyatdan keç</button>
                    </div>
                </form>
                
                <p class="my-3 text-center">Hesabınız var mı? <a href="/login">Daxil ol</a></p>
            </div>
        </div>
    </div>
</body>

</html>
