@extends('layoutadmin')
@section('title')
    Danh sách danh mục
@endsection
@section('content')
<a class="btn btn-success" href="{{route('category.create')}}" >Thêm mới</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td>{{$category->status}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{-- {{$categories->links()}} --}}
@endsection