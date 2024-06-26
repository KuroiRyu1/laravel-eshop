<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Sửa tài khoản</title>
</head>

<body>
    <div class="container">
        <form action="/users/update/{{ $user->id }}" method="post" class="col-md-3">
            @csrf
            <div class="form-group">
                <label for="name">Tên đăng nhập:</label>
                <input id="name" class="form-control" type="text" name="name" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input id="password" class="form-control" type="password" name="password"value="{{$user->password}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" class="form-control" type="email" name="email"value="{{$user->email}}">
            </div>
            <button class="btn btn-success">
                <i class="fa fa-plus" aria-hidden="true"></i> Cập nhật
            </button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>