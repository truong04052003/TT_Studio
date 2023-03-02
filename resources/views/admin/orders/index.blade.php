@extends('admin.layouts.main')
@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="container">
                <section class="section">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <table class="table"><br><br>
                                        <thead>
                                            <h2 style="text-align: center">Danh Sách Đơn Hàng</h2><br>

                                            {{-- <a href="{{ route('orders.export') }}" class="btn btn-info">Xuất file excel</a> --}}
                                            <hr>
                                            <tr>
                                                <th colspan="2">STT</th>
                                                <th colspan="2">Tên</th>
                                                <th colspan="2">Email</th>
                                                <th colspan="2">Ngày giao</th>
                                                {{-- <th colspan="2">Trạng thái</th> --}}
                                                <th colspan="2">Tùy chọn</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $key => $order)
                                                <tr>
                                                    <th scope="row">{{ ++$key }}</th>
                                                    <td colspan="2">{{ $order->customer->name }}</td>
                                                    <td colspan="2">{{ $order->customer->email }}</td>
                                                    <td colspan="2">{{ $order->note }}</td>

                                                    <td colspan="2">
                                                        <a href="{{ route('orders.detail', [$order->id]) }}"
                                                            class="btn btn-info">Chi tiết</a>
                                                    </td>
                                                </tr>
                                            @endforeach
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
