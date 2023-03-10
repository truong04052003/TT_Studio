@extends('admin.layouts.main')
@section('content')
    @include('sweetalert::alert')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Nhân viên</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <style>
        img#avt {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
        }

        a {
            text-decoration: none;
        }
    </style>

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
                                        <h2 style="text-align:center">
                                            Nhân viên
                                        </h2>
                                        @if (Auth::user()->hasPermission('User_create'))
                                            <a class="btn btn-primary" href="{{ route('users.create') }}"> Đăng kí
                                                tài khoản </a>
                                        @endif

                                        <hr>
                                        <table class="table"style="text-align: center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">Hình đại diện</th>
                                                    <th scope="col">Tên</th>
                                                    <th scope="col">Chức vụ</th>
                                                    <th scope="col">Liên hệ</th>
                                                    <th scope="col">Tùy chọn</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $key => $user)
                                                    <tr>
                                                        <th scope="row">{{ $user->id }}</th>
                                                        <td>
                                                            <a href=""><img id="avt"
                                                                    src="{{ asset('admin/uploads/' . $user->image) }}"></a>
                                                        </td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->groups->name }}</td>
                                                        <td>{{ $user->phone }}</td>
                                                        <td>
                                                            <form action="{{ route('users.destroy', $user->id) }}"
                                                                method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                @if (Auth::user()->hasPermission('User_update'))
                                                                    <a href="{{ route('users.edit', $user->id) }}"
                                                                        class="btn btn-warning">Sửa</a>
                                                                @endif
                                                                @if (Auth::user()->hasPermission('User_delete'))
                                                                    <button
                                                                        onclick="return confirm('Bạn có chắc chắn xóa không?');"
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
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </body>

    </html>
@endsection
