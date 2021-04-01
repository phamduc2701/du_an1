@extends('admin.layouts.main')

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
        <!-- <div class="form-group">
            <label for="">Mô tả</label>
            <textarea name="detail" rows="9" class="form-control"></textarea>
        </div> -->
        <div class="form-group">
            <label for="inputAddress2" class="font-weight-bold">Mô tả</label>
            <textarea name="detail" id="editor" rows="10" class="form-control">{{ old('detail') }}</textarea>
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

@section('page-script')
<script>
  var editor_config = {
    path_absolute : "/",
    selector: '#editor',
    relative_urls: false,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table directionality",
      "emoticons template paste textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    file_picker_callback : function(callback, value, meta) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
      if (meta.filetype == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.openUrl({
        url : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no",
        onMessage: (api, message) => {
          callback(message.content);
        }
      });
    }
  };

  tinymce.init(editor_config);
</script>
@endsection