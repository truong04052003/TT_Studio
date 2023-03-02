@extends('admin.layouts.main')
@section('content')
    @include('sweetalert::alert')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <div class="page-container">
            <div class="main-content">
                <div class="container">
                    <section class="section">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <br>
                                        <h2 style="text-align: center">
                                            Danh Sách Quyền
                                        </h2><br>
                                        <a class="btn btn-primary" href="{{ route('group.create') }}"> Thêm Nhóm Quyền
                                            <a class="btn btn-warning" href="{{ route('group.trash') }}"> Thùng rác </a>
                                            <hr>

                                        </a>
                                        <table class="table" style="text-align: center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">Tên Nhóm Quyền</th>

                                                    <th scope="col">Hiện có</th>

                                                    <th scope="col">Tùy Chọn</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($groups as $key => $group)
                                                    <tr>
                                                        <th scope="row">{{ ++$key }}</th>
                                                        <td>{{ $group->name }}</td>
                                                        <td>{{ count($group->users) }} Người</td>
                                                        <td>
                                                            <a href="{{ route('group.detail', $group->id) }}"
                                                                class='btn btn-info'>
                                                                Trao quyền </a>
                                                            <a href="{{ route('group.edit', $group->id) }}"
                                                                class='btn btn-warning'>
                                                                Sửa </a>
                                                            <a href="">
                                                                <form  action="{{ route('group.destroy', $group->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button
                                                                        onclick="return confirm('Bạn có chắc chắn xóa không?');"
                                                                        class="btn btn-danger">Xóa</button>
                                                                </form>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    @endsection
</body>

</html>
