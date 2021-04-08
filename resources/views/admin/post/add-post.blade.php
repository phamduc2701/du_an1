@extends('admin.layouts.main')
@section('content')

<div class="container">
    <h3 class="text-left">CẬP NHẬT TIN TỨC</h3>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Tên tin tức</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Ảnh tin tức</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nội dung tin</label>
            <textarea name="content" rows="9" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Ngày đăng tin</label>
            <input type="date" name="date" class="form-control">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
            <a href="{{route('post.index')}}" class="btn btn-sm btn-danger">Hủy</a>
        </div>
    </form>
</div>

@endsection