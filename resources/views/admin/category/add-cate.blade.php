@extends('layouts.main')
@section('content')

<div class="container">
    <h3 class="text-left">THÊM DANH MỤC</h3>
    <form action="" method="post">
        @csrf
            <div class="form-group">
                <label for="">Tên danh mục:</label>
                <input type="text" name="name" id="" class="form-control">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-sm btn-info">Lưu</button>
                <a href="{{route('category.index')}}" class="btn btn-sm btn-danger">Hủy</a>
            </div>
    </form>
</div>


@endsection