@extends('admin.layouts.main')

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <div class="container-fluid px-4">
        @section('content')
            @include('sweetalert::alert')

            <h1>Danh Mục Sản Phẩm</h1>
            <div class="col-6">
                <form class="form-inline" action="">
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <input name="key" class="form-control"placeholder="Tìm kiếm sản phẩm">
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-default bg-primary">Tìm kiếm</button>
                        </div>
                    </div>
                </form>
            </div> <br>
            <table class="table" style="text-align: center">
                <a href="{{ route('products.create') }}" class="btn btn-success">Thêm sản phẩm</a>
                <a href="{{ route('products.garbagecan') }}" class="btn btn-danger">Thùng rác</a>
                <a href="{{ route('products.Excel') }}" class="btn btn-warning">Xuất file</a>
                <thead>

                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Thể loại</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col" class="text-right">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $key => $item)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ number_format($item['price']) }} </td>
                            <td>{{ $item->category->name }}</td>
                            <td>
                                <img src="{{ asset('admin/uploads/' . $item->image) }}" alt="" width="120px"
                                    height="120px">
                            </td>

                            <td class="text-right">
                                <form action="{{ route('products.destroy', [$item->id]) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <a class="btn btn-warning" href="{{ route('products.show', $item->id) }}">Chi tiết</a>
                                    <a href="{{ route('products.edit', [$item->id]) }}" class="btn btn-success">Sửa</a>
                                    <button onclick="return confirm('Bạn có chắc chắn xóa không?');"
                                        class="btn btn-danger">Xóa</button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col-6">
                <div class=" d-flex justify-content-around">
                    {{ $items->appends(request()->input())->links() }}
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
