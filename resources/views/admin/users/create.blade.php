@extends('admin.layouts.main')
@section('content')

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
                {{-- @section('content') --}}
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <section class="wrapper">
                    <div class="panel-panel-default">
                        <div class="market-updates">
                            <div class="container">
                                <div class="page-inner">
                                    <header class="page-title-bar">
                                        <h2 class="offset-4">
                                            Đăng kí tài khoản nhân viên
                                        </h2>
                                        <br>
                                    </header>
                                    <div class="page-section">
                                        <form action="{{ route('users.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="card">
                                                <div class="card-body">
                                                    <legend>Thông tin cơ bản</legend>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="tf1">Email<abbr
                                                                        name="Trường bắt buộc">*</abbr></label>
                                                                <input name="email" type="text"
                                                                    class="form-control" value="{{ old('email') }}">
                                                                <small id=""
                                                                    class="form-text text-muted"></small>
                                                                @error('email')
                                                                    <div class="text text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="tf1">Mật Khẩu<abbr
                                                                        name="Trường bắt buộc">*</abbr></label>
                                                                <input name="password" type="text"
                                                                    class="form-control" value="">
                                                                <small id=""
                                                                    class="form-text text-muted"></small>
                                                                @error('password')
                                                                    <div class="text text-danger">{{ $message }}</div>
                                                                @enderror
                                                                <br>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="form-group">
                                                                <label for="tf1">Họ Và Tên<abbr
                                                                        name="Trường bắt buộc">*</abbr></label>
                                                                <input name="name" type="text"
                                                                    class="form-control" value="{{ old('name') }}">
                                                                <small id=""
                                                                    class="form-text text-muted"></small>
                                                                @error('name')
                                                                    <div class="text text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="tf1">Số Điện Thoại<abbr
                                                                        name="Trường bắt buộc">*</abbr></label> <input
                                                                    name="phone" type="number" class="form-control"
                                                                    value="{{ old('phone') }}">
                                                                <small id=""
                                                                    class="form-text text-muted"></small>
                                                                @error('phone')
                                                                    <div class="text text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <br>
                                                        </div>
                                                        <div class="form-group col-lg-4">
                                                            <label class="control-label" for="flatpickr01">Chức Vụ<abbr
                                                                    name="Trường bắt buộc">*</abbr></label>
                                                            <select name="group_id" id="" class="form-control">
                                                                <option value="">--Vui lòng chọn--</option>
                                                                @foreach ($groups as $group)
                                                                    <option value="{{ $group->id }}">
                                                                        {{ $group->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('group_id')
                                                                <div class="text text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group col-lg-4">
                                                            <label class="control-label" for="flatpickr01">Giới
                                                                Tính<abbr name="Trường bắt buộc">*</abbr></label>
                                                            <select name="gender" id="" class="form-control">
                                                                <option value="">--Vui lòng chọn--</option>
                                                                <option value="Nam">Nam</option>
                                                                <option value="Nữ">Nữ</option>
                                                                <option value="Khác">Khác</option>
                                                            </select>
                                                            @if ('gender')
                                                                <p style="color:red">{{ $errors->first('gender') }}</p>
                                                            @endif

                                                        </div>
                                                        <br><br><br>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="tf1">Địa chỉ chi tiết<abbr
                                                                        name="Trường bắt buộc">*</abbr></label> <input
                                                                    name="address" type="text" class="form-control"
                                                                    value="{{ old('address') }}">
                                                                <small id=""
                                                                    class="form-text text-primary">Ví dụ: Số 20/Hai Bà
                                                                    Trưng... </small>
                                                                @error('address')
                                                                    <div class="text text-danger">{{ $message }}
                                                                    </div>
                                                                @enderror
                                                                <br>
                                                            </div>
                                                            <br>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputCity" class="form-label">Ảnh đại
                                                                diện</label>
                                                            <input accept="image/*" type='file' id="inputFile"
                                                                name="image"
                                                                class="form-control @error('image') is-invalid @enderror"><br>
                                                            @error('image')
                                                                <div class="text text-danger">{{ $message }}</div>
                                                            @enderror
                                                            <br>
                                                            <img type="hidden" width="120px" height="120px"
                                                                id="blah" src="" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <br><br><br><br>
                                                        <button class="btn btn-primary" type="submit">Đăng
                                                            ký</button>
                                                        <a class="btn btn-danger"
                                                            href="{{ route('users.index') }}">Hủy</a>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>
<script>
    jQuery(document).ready(function() {
        if ($('#blah').hide()) {
            $('#blah').hide();
        }
        jQuery('#inputFile').change(function() {
            $('#blah').show();
            const file = jQuery(this)[0].files;
            if (file[0]) {
                jQuery('#blah').attr('src', URL.createObjectURL(file[0]));
                jQuery('#blah1').attr('src', URL.createObjectURL(file[0]));
            }
        });
    });
</script>

</html>
@endsection

