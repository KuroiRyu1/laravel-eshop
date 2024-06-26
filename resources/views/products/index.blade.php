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
    <a href="/products/create" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Thêm sách</a>
    <table class="table table-light">
        <thead class="thead-dark">
            <tr>
                <th>SKU</th>
                <th>Tên sách</th>
                <th>Thông tin</th>
                <th>Loại sách</th>
                <th>Giá tiền</th>
                <th>Tồn kho</th>
                <th>Trạng thái</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $item)
            <tr>
                <td>{{$item->sku}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->producttype->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->stock}}</td>
                <td>{{$item->status ? 'true' :'false'}}</td>
                <td>
                    <a href="/products/update/{{$item->id}}" class="btn btn-warning d-inline">
                        <i class="fa fa-pen" aria-hidden="true"></i>
                    </a>
                    <button class="btn btn-info"><i class="fa fa-info" aria-hidden="true"></i></button>
                    <form action="" class="d-inline">
                        <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
 </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>