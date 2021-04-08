@extends('admin.layouts.main')
@section('content')

<div class="container">
    <h3 class="text-left">TIN TỨC THỰC PHẨM</h3>
    <table class="table table-stripper">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Ảnh tin</th>
            <th>Nội dung</th>
            <th>Ngày đăng</th>
            <th>
                <a href="{{route('post.add-post')}}" class="btn btn-sm btn-success">Thêm mới</a>
            </th>
        </thead>
        <tbody>
            @foreach($post as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td style="width: 230px">{{$item->name}}</td>
                <td><img src="{{asset($item->image)}}" width="70px"></td>
                <td style="width: 450px">{{$item->content}}</td>
                <td>{{$item->date}}</td>
                <td>
                    <a href="" class="btn btn-sm btn-info">Sửa</a>
                    <a href="{{ route('post.remove', ['id'=> $item->id]) }}" class="btn btn-sm btn-warning">Xóa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection