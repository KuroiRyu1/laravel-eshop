<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
 <div class="container">
    <form action="/products/create" class="col-md-4" method="post">
        @csrf
        <div class="form-group">
            <label for="sku">SKU</label>
            <input id="sku" class="form-control" type="text" name="sku">
        </div>
        <div class="form-group">
            <label for="name">Tên sách</label>
            <input id="name" class="form-control" type="text" name="name">
        </div>
        <div class="form-group">
            <label for="description">Tác giả</label>
            <input id="description" class="form-control" type="text" name="description">
        </div>
        <div class="form-group">
        <select class="custom-select" id="product_type_id" name="product_type_id">
            @foreach ($product_types as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        </div>
        <div class="form-group">
            <label for="price">Giá tiền</label>
            <input id="price" class="form-control" type="text" name="price">
        </div>
        <div class="form-group">
            <label for="stock">Tồn kho</label>
            <input id="stock" class="form-control" type="text" name="stock">
        </div>
        <button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i> Thêm </button>
    </form>
 </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>