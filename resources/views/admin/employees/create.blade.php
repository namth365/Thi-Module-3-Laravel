@extends('welcome')
@section('title','Nhân Viên')

@section('content')
<h1>Thêm mới Nhân Viên</h1>
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('employees.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Mã</label>
                    <input type="text" class="form-control" name="code" value="{{ old('code') }}"
                        placeholder="Tối đa 150 ký tự">
                    <span style="color:red;">@error("code"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Tên Nhân Viên</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                        placeholder="Tối đa 150 ký tự">
                    <span style="color:red;">@error("name"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Ngày Sinh</label>
                    <input type="date" class="form-control" name="birthday" value="{{ old('birthday') }}"
                        placeholder="Không được dưới 0 đồng">
                    <span style="color:red;">@error("birthday"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Giới Tính</label>
                    <input type="text" class="form-control" name="sex" value="{{ old('sex') }}"
                        >
                    <span style="color:red;">@error("sex"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Điện Thoại</label>
                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}"
                        >
                    <span style="color:red;">@error("phone"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>CMND</label>
                    <input type="text" class="form-control" name="cmnd" value="{{ old('cmnd') }}"
                        >
                    <span style="color:red;">@error("cmnd"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}"
                       >
                    <span style="color:red;">@error("email"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Địa Chỉ</label>
                    <input type="text" class="form-control" name="address" value="{{ old('address') }}"
                        >
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