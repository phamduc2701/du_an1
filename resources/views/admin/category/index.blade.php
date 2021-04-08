@extends('admin.layouts.main')
@section('content')

<div class="container">
    <h3 class="text-left">DANH MỤC</h3>
    <table class="table table-stripper">
        <thead>
            <th>ID</th>
            <th>Tên danh mục</th>
            <th>
                <a href="{{route('category.add-cate')}}" class="btn btn-sm btn-success">Thêm mới</a>
            </th>
        </thead>
        <tbody>
            @foreach ($categories as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-info">Sửa</a>
                        <a href="{{ route('category.remove', ['id' => $item->id]) }}" class="btn btn-sm btn-warning">Xóa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection