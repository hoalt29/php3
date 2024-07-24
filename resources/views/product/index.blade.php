@extends('layoutadmin')
@section('title')
    Danh sách sản phẩm
@endsection
@section('content')
<a class="btn btn-success" href="{{route('product.create')}}" >Thêm mới</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">quantity</th>
            <th scope="col">image</th>
            <th scope="col">category name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($listPro as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->quantity}}</td>
            <td>
                @if(!isset($item->image))
                    Không có hình ảnh
                @else
                    {{$item->image}}
                @endif
            </td>
{{--            <td>{{$item->loadAllCategory->name}}</td>--}}
{{--                <td>{{$item->catename}}</td>--}}
            <td>{{$listCate[$item->category_id]}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{$listPro->links()}}
@endsection