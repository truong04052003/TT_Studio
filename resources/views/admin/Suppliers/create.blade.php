@extends('admin.layouts.main')
@section('content')
    @include('sweetalert::alert')
    <div class="page-container">
        <div class="main-content">
            <div class="container">
                    <div class="pagetitle">
                        <h1 class="mb-1">Nhà Cung Cấp</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('suppliers.index') }}">Nhà cung cấp</a></li>
                                <li class="breadcrumb-item"> Thêm nhà cung cấp</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Thêm Nhà Cung Cấp</h5>
                            <form action="{{ route('suppliers.store') }}" method="post">
                                @csrf
                                <div class="col-md-10">
                                    <label for="inputName5" class="form-label">Tên nhà cung cấp</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="inputName5" name='name' value="{{ old('name') }}">
                                        @error('name')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <label for="inputEmail5" class="form-label">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                name='email' id="inputName5" value="{{ old('email') }}">
                                                @error('email')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputPassword5" class="form-label">Địa chỉ</label>
                                            <input type="text"
                                                class="form-control @error('address') is-invalid @enderror" name='address'
                                                id="inputName5" value="{{ old('address') }}">
                                                @error('address')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputPassword5" class="form-label">Số điện thoại</label>
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                                name='phone' id="inputName5" value="{{ old('phone') }}">
                                                @error('phone')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                    </div><br>
                                    <button type="submit" class="btn btn-primary">Thêm</button>
                                    <a href="{{ route('suppliers.index') }}" class="btn btn-info">Thoát</a>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>
@endsection
