@extends('welcome')
@section('title','Sửa')

@section('content')
<h1>Sửa nhóm {{$manage->name}} </h1>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{route('manages.update',[$manage->id])}}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Mã</label>
                    <input type="text" class="form-control" name="code" value="{{ $manage->code }}"
                        placeholder="Tối đa 150 ký tự">
                    <span style="color:red;">@error("code"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" class="form-control" name="name" value="{{$manage->name}}">
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