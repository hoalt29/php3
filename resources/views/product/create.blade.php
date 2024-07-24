@extends('layoutadmin')
@section('title')
    Thêm mới sản phẩm
@endsection
@section('content')
    <form action="{{route('product.createPost')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="email" class="form-control" name="name" placeholder="Nguyễn Văn A" value="{{old('name')}}">
            @error('name')
                <p style="color: red">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" class="form-control" name="price" placeholder="10000" value="{{old('price')}}">
            @error('price')
                <p style="color: red">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Quantity</label>
            <input type="text" class="form-control" name="quantity" placeholder="100" value="{{old('quantity')}}">
            @error('quantity')
                <p style="color: red">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" class="form-control" name="image" value="{{old('image')}}">
            @error('image')
                <p style="color: red">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select class="form-select" name="category_id">
                    @foreach($listCate as $item)
                    <option value="{{$item->id}}" @if ($item->id == old('category_id')) selected @endif>{{$item->name}}</option>
                    @endforeach  
                @error('category_id')
                    <p style="color: red">{{$message}}</p>
                @enderror             
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Gửi</button>
        <a class="btn btn-warning" href="{{route('product.index')}}">Quay lại trang chủ</a>
    </form>
@endsection