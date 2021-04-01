@extends('admin.layouts.main')
@section('content')

<div class="container">
    <h3 class="text-left">CẬP NHẬT SẢN PHẨM</h3>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="name" class="form-control" value="{{$model->name}}">
        </div>
        <div class="form-group">
            <label for="">Giá</label>
            <input type="float" name="price" class="form-control" value="{{$model->price}}">
        </div>
        <div class="form-group">
            <label for="">Giảm giá</label>
            <input type="float" name="sale" class="form-control" value="{{$model->sale}}">
        </div>
        <div class="form-group">
            <label for="">Mô tả</label>
            <textarea name="detail" rows="9" class="form-control">
                {{ $model->detail }}
            </textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-sm btn-info">Lưu</button>
            <a href="{{route('product.index')}}" class="btn btn-sm btn-danger">Hủy</a>
        </div>
    </form>
</div>

@endsection