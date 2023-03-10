@extends('admin.layouts.main')
@section('content')
    @include('sweetalert::alert')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 style="text-align: center">Danh Sách Nhà Cung Cấp</h2>
                @if (Auth::user()->hasPermission('Supplier_create'))
                    <a class='btn btn-primary mb-2' href="{{ route('suppliers.create') }}">Thêm nhà cung cấp</a>
                    @endif
                    @if (Auth::user()->hasPermission('Supplier_viewTrash'))
                    <a class='btn btn-secondary mb-2 float-right' href="{{ route('suppliers.getTrashed') }}">Thùng
                        rác</a>
                    @endif


                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Email</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Số điện thoại</th>
                            @if (Auth::user()->hasPermission('Supplier_update') || Auth::user()->hasPermission('Supplier_delete'))
                            <th scope="col">Tùy chọn</th>
                            @endif
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
                                    <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        @if (Auth::user()->hasPermission('Supplier_update'))
                                            <a href="{{ route('suppliers.edit', [$supplier->id]) }}"
                                                class="btn btn-warning">Sửa</a>
                                        @endif
                                        @if (Auth::user()->hasPermission('Supplier_delete'))
                                            <button onclick="return confirm('Bạn có chắc chắn xóa không?');"
                                                class="btn btn-danger">Xóa</button>
                                        @endif

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class=" d-flex justify-content-around">
                    {{-- {{ $suppliers->appends(request()->input())->links() }} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
