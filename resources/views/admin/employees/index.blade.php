@extends('welcome')
@section('title','Sản Phẩm')

@section('content')
<div class='card'>
    <div class='card-header'>
        <h1 class="mt-12">Danh Sách Nhân Viên</h1>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <form method="get">
            <div class="row">
            
                <div class="col-lg-6">
                    <input class="form-control" type="text" placeholder="Tìm kiếm..." name="search" />
                </div>
                <div class="col-lg-2">
                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                </div>
                <div class="col-lg-4"><a class="btn btn-success" href="{{ route('employees.create') }}">Thêm Mới</a></div>
                
            </div>
        </form>
    </div>

    <div class='card-body'>
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mã </th>
                            <th scope="col">Nhóm</th>
                            <th scope="col">Tên </th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Số Điện Thoại</th>
                            <th scope="col" style=" width: 100px;"></th>
                            <th scope="col" style=" width: 100px;">Chức Năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $key => $employee)
                        <tr>
                            <td>{{ $employee->code }}</td>
                            <td>{{ $employee->manage->name }}</td>                          
                            <td>{{ $employee->name }}</td>                          
                            <td>{{ $employee->sex }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td><a href="{{route('employees.show',[$employee->id])}}" class="btn btn-info"> Xem </a> </td>
                            <td>
                                <a href="{{route('employees.edit',[$employee->id])}}" class="btn btn-warning">Sửa</a>
                            </td>
                            <td>
                                <form action="{{route('employees.destroy',[$employee->id])}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button
                                        onclick="return confirm('Bạn muốn xóa  {{ $employee->name }} không?');"
                                        class="btn btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <div class='float:right'>
                <ul class="pagination">
                    <span aria-hidden="true"> {{ $employees->links() }}</span>
                </ul>
            </div>
        </nav>
    </div>
</div>
@endsection