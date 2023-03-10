@extends('admin.layouts.main')
@section('content')
    @include('sweetalert::alert')
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Thể loại</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>

        <div class="card">
            <div class="card-body">
                <h1 style="text-align: center">Thể loại sản phẩm</h1><br>
                <table class="table" style="text-align: center">
                    @if (Auth::user()->hasPermission('Category_create'))
                        <a href="{{ route('categories.create') }}" class="btn btn-primary">Thêm thể loại</a>
                    @endif
                    @if (Auth::user()->hasPermission('Category_viewTrash'))
                        <a href="{{ route('categories.garbagecan') }}" class="btn btn-primary">Thùng rác</a>
                    @endif
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên thể loại</th>
                            @if (Auth::user()->hasPermission('Category_update') || Auth::user()->hasPermission('Category_delete'))
                                <th scope="col">Hành động</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $key => $item)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $item['name'] }}</td>
                                <td>
                                    <form action="{{ route('categories.destroy', [$item->id]) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        @if (Auth::user()->hasPermission('Category_update'))
                                            <a href="{{ route('categories.edit', [$item->id]) }}"
                                                class="btn btn-success">Sửa</a>
                                        @endif
                                        @if (Auth::user()->hasPermission('Category_delete'))
                                            <button onclick="return confirm('Bạn có chắc chắn xóa không?');"
                                                class="btn btn-danger">Xóa</button>
                                        @endif

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>

    </html>
@endsection
