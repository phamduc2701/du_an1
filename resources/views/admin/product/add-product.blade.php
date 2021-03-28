@extends('layouts.main')

@section('content')

<div class="container">
    <h3 class="text-left">CẬP NHẬT SẢN PHẨM</h3>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Ảnh sản phẩm</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Giá</label>
            <input type="float" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Giảm giá</label>
            <input type="float" name="sale" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Mô tả</label>
            <textarea name="detail" rows="9" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Danh mục</label>
            <select name="cate_id" class="custom-select">
                @foreach($category as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-sm btn-primary">Thêm</button>
            <a href="{{route('product.index')}}" class="btn btn-sm btn-danger">Hủy</a>
        </div>
    </form>
</div>

@endsection