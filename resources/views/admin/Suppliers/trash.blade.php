@extends('admin.layouts.main')
@section('content')
    @include('sweetalert::alert')
    <div class="container">
        <div class="pagetitle">
            <h1 class="mb-1">Nhà Cung Cấp</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('suppliers.index') }}"></a>Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="">Nhà cung cấp</a></li>
                    <li class="breadcrumb-item">Thùng rác</a></li>
                </ol>
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Thung Rác</h5>
                @if (Session::has('success'))
                    <p class="text-success"><i class="fa fa-check" aria-hidden="true"></i>
                        {{ Session::get('success') }}
                    </p>
                @endif
                @if (Session::has('error'))
                    <p class="text-danger"><i class="bi bi-x-circle"></i>
                        {{ Session::get('error') }}
                    </p>
                @endif
                <a class='btn btn-primary mb-2' href="{{ route('suppliers.index') }}">Nhà cung cấp</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Email</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Tùy chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suppliers as $key => $supplier)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $supplier->name }}</td>
                                <td>{{ $supplier->email }}</td>
                                <td>{{ $supplier->address }}</td>
                                <td>{{ $supplier->phone }}</td>
                                <td>
                                    <form action="{{ route('suppliers.forcedelete', $supplier->id) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('suppliers.restore', [$supplier->id]) }}"
                                            class="btn btn-primary">Khôi phục</a>
                                        <button onclick="return confirm('Bạn có chắc chắn xóa không?');"
                                            class="btn btn-danger">Xóa vĩnh viễn</button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
