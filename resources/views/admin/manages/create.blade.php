@extends('welcome')
@section('title','Thêm Mới')

@section('content')
<h1>Thêm mới nhóm</h1>
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <form method="post" action="{{ route('manages.store') }}">
                @csrf
                <div class="form-group">
                    <label>Mã</label>
                    <input type="text" class="form-control" name="code" value="{{ old('code') }}"
                        placeholder="Tối đa 150 ký tự">
                    <span style="color:red;">@error("code"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                        placeholder="Tối đa 150 ký tự">
                    <span style="color:red;">@error("name"){{ $message }} @enderror</span>
                </div>
                <div> <button type="submit" class="btn btn-primary">Xác Nhận</button>
                    <a href="{{ route('manages.index') }}" class="btn btn-danger">Hủy</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection