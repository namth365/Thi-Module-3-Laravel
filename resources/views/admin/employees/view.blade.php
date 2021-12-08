@extends('welcome')
@section('title','Xem Chi Tiết Sản Phẩm')

@section('content')
<h1>Xem Chi Tiết {{$employee->name}}</h1>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                        <tr>
                            <th scope="col">Tên Nhân Viên</th>
                            <td>{{$employee->name}}</td>
                        </tr>
                        <tr class="">
                            <th scope="col">Giới Tính</th>
                            <td>{{ ($employee->sex) }}</td>
                        </tr>
                        <tr class="">
                            <th scope="col">Điện Thoại</th>
                            <td>{{ ($employee->phone) }}</td>
                        </tr>
                        <tr class="">
                            <th scope="col">Nhóm</th>
                            <td>{{$employee->manage->name}}</td>
                        </tr>
                    </table>
                </div>
                <div>
                    <a href="{{ route('employees.index') }}" class="btn btn-warning">Quay Lại</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection