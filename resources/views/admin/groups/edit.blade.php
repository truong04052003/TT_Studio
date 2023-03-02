@extends('admin.layouts.main')
<main class="page-content">
    <div class="container">
        <section class="wrapper">
            <div class="panel-panel-default">
                <div class="market-updates">
                    <div class="container">
                        <div class="page-inner">
                            <header class="page-title-bar">
                                <nav aria-label="breadcrumb">
                                </nav>
                                @section('content')
                                    <h1 class="page-title">Sửa Quyền</h1>
                                </header>
                                <hr>
                                <div class="panel-body">
                                    <form role="form" class="form-horizontal "
                                        action="{{ route('group.update', $group->id) }}" method="POST">
                                        @method('put')
                                        @csrf
                                        <div class="form-group has-warning">
                                            <label class="col-lg-2">Tên Quyền</label>
                                            <div class="col-lg-8">
                                                <input type="text" value="{{ $group->name }}" name="name"
                                                    placeholder=""
                                                    class=" @error('name') is-invalid @enderror form-control ">
                                                @error('name')
                                                    <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-6">
                                                <button class="btn btn-danger" type="submit">Sửa</button>
                                                <a href="{{ route('group.index') }}" class="btn btn-warning"
                                                    type="submit">Hủy</a>
                                            </div>
                                        </div>
                                    </form>
                            @endsection
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
