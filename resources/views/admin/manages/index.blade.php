@extends('welcome')
@section('title','Thể Loại')

@section('content')

<h1 class="mt-4">Nhóm</h1>
<table class="table">

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="col-lg-4"><a class="btn btn-success" href="{{ route('manages.create') }}">Thêm Mới</a></div>

    <thead>
        <tr>
            <th scope="col">Mã </th>
            <th scope="col">Tên</th>
            <th scope="col">Tên</th>
            <th scope="col" style="width: 100px;">Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($manages as $key => $manage)
        <tr>
            <td>{{ $manage->code }}</td>
            <td>{{ $manage->name }}</td>
            <td>{{ $manage->sex }}</td>
            <td>
                <a href="{{route('manages.edit',[$manage->id])}}" class="btn btn-warning ">Sửa</a>
            </td>
            <td>
                <form action="{{route('manages.destroy',[$manage->id])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Xóa nhóm {{ $manage->name }} không?');"
                        class="btn btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<nav aria-label="Page navigation example">
    <ul class="pagination">
        <span aria-hidden="true"> {{ $manages->links() }}</span>
    </ul>
</nav>

@endsection