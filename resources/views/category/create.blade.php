@extends('layoutadmin')
@section('title')
    Thêm mới danh mục
@endsection
@section('content')
    <form action="" method="GET" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Nguyễn Văn A" value="{{old('name')}}">
            @error('name')
                <p style="color: red">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Status</label>
            <input type="text" class="form-control" name="status" placeholder="100" value="{{old('status')}}">
            @error('status')
                <p style="color: red">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Gửi</button>
        <a class="btn btn-warning" href="{{route('category.index')}}">Quay lại trang chủ</a>
    </form>
@endsection