@extends('welcome')
@section('title','Sửa Sản Phẩm')

@section('content')
<h1>Sửa sản phẩm {{$employee->name}}</h1>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{route('employees.update',[$employee->id])}}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Mã</label>
                    <input type="text" class="form-control" name="code" value="{{ $employee->code }}">
                    <span style="color:red;">@error("code"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Tên Nhân Viên</label>
                    <input type="text" class="form-control" name="name" value="{{ $employee->name }}">
                    <span style="color:red;">@error("name"){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label>Ngày Sinh</label>
                    <input type="date" class="form-control" name="birthday" value="{{ $employee->birthday }}">
                    <span style="color:red;">@error("birthday"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Giới Tính</label>
                    <input type="text" class="form-control" name="sex" value="{{ $employee->sex }}">
                    <span style="color:red;">@error("sex"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Điện Thoại</label>
                    <input type="text" class="form-control" name="phone" value="{{ $employee->phone }}">
                    <span style="color:red;">@error("phone"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>CMND</label>
                    <input type="text" class="form-control" name="cmnd" value="{{ $employee->cmnd }}">
                    <span style="color:red;">@error("cmnd"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $employee->email }}">
                    <span style="color:red;">@error("email"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Địa Chỉ</label>
                    <input type="text" class="form-control" name="address" value="{{ $employee->address }}">
                    <span style="color:red;">@error("address"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nhóm</label>
                    <select name="manage_id" class="form-select" id="inputGroupSelect02">
                        @foreach($manage as $danhmuc)
                        <option value="{{$danhmuc->id}}">{{$danhmuc->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div> <button type="submit" class="btn btn-primary">Xác Nhận</button>
                    <a href="{{ route('employees.index') }}" class="btn btn-danger">Hủy</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection