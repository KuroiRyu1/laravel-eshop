<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title></title>
</head>
<body>
    <div class="container">
        <form action="/products/update/{{$product->id}}" class="col-md-4" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Tên sách</label>
                <input id="name" class="form-control" type="text" name="name" value="{{$product->name}}">
            </div>
            <div class="form-group">
                <label for="description">Thông tin</label>
                <input id="description" class="form-control" type="text" name="description" value="{{$product->description}}">
            </div>
            <div class="form-group">
                <label for="price">Giá tiền</label>
                <input id="price" class="form-control" type="text" name="price" value="{{$product->price}}">
            </div>
            <div class="form-group">
                <label for="stock">Tồn kho</label>
                <input id="stock" class="form-control" type="text" name="stock" value="{{$product->stock}}">
            </div>
            <button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i> Thêm </button>
        </form>
     </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>