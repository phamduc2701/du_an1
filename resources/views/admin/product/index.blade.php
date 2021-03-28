@extends('layouts.main')
@section('content')

<div class="container">
    <table class="table table-stripper">
        <thead>
            <th>Mã</th>
            <th>Tên sản phẩm</th>
            <th>Ảnh sản phẩm</th>
            <th>Giá</th>
            <th>Mô tả</th>
            <th>Danh mục</th>
            
            <th>
                <a href="{{route('product.add-product')}}" class="btn btn-sm btn-success">Thêm mới</a>
            </th>
        </thead>
        <tbody>
            @foreach($product as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td><img src="{{ asset($item->image) }}" width="100"></td>
                    <td>{{$item->price}}đ</td>

                    <td style="width: 250px">{{$item->detail}}</td>
                    <td>{{$item->category->name}}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-info">Sửa</a>
                        <a href="{{ route('product.remove', ['id'=> $item->id]) }}" class="btn btn-sm btn-warning">Xóa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection