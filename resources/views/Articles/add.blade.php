<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src='{{asset('js/tinymce/tinymce.min.js')}}'></script>
    <script src='{{asset('js/jq.min.js')}}'></script>
    <script>
        tinymce.init({
            selector: '#InputBody',
            plugins : 'advlist autolink link image lists charmap print',
            images_upload_url: '/articles/uploadimage',
            automatic_uploads: false
           // images_upload_url: '/articles/uploadimage',
//            automatic_uploads: false,
//            images_upload_handler: function (blobInfo, success, failure) {
//                var xhr, formData;
//
//                xhr = new XMLHttpRequest();
//                xhr.withCredentials = false;
//                xhr.open('POST', '/articles/uploadimage');
//                xhr.setRequestHeader('X-CSRF-TOKEN',  $('meta[name="csrf-token"]').attr('content'));
//
//                xhr.onload = function() {
//                    var json;
//
//                    if (xhr.status != 200) {
//                        failure('HTTP Error: ' + xhr.status);
//                        return;
//                    }
//
//                    json = JSON.parse(xhr.responseText);
//
//                    if (!json || typeof json.location != 'string') {
//                        failure('Invalid JSON: ' + xhr.responseText);
//                        return;
//                    }
//
//                    success(json.location);
//                };
//
//                formData = new FormData();
//                formData.append('file', blobInfo.blob(), blobInfo.filename());
//
//                xhr.send(formData);
//            }
        });
    </script>
</head>
<body>

<div style=" position: fixed; width: 100%; background-color: white; top: 0; border-bottom: 1px solid #dbdbdb; z-index: 100;">
    <div style="display: flex; justify-content: space-between; width: 900px; margin: 10px auto;">
        <button type="button" class="btn btn-secondary"><a href="{{route('LogOut')}}" style="color: white !important">Выйти</a></button>
        <button type="button" class="btn btn-primary"><a href="{{route('ShowAll')}}" style="color: white !important">Назад</a></button>
    </div>
</div>
<div class="wrap" style="width: 900px; margin: 60px auto 20px;">
    <h1>Новая статья</h1>
    <form action="{{route('Add')}}" method="post" style="width: 100%;" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleSelect1">Категория</label>
            <select class="form-control" id="exampleSelect1" name="category_id">
                @foreach($categories as $category)
                    <option value="{{$category['id']}}">{{$category['name']}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="InputTitle">Заголовок</label>
            <input type="text" class="form-control" id="InputTitle" name="title" required>
        </div>

        <div class="form-group">
            <label for="InputFile">Изображение</label>
            <img src="" alt="" class="preview" style="max-width: 200px; height: auto; max-height: 200px; display: block; padding: 20px 0;">
            <input type="file" class="form-control-file file" id="InputFile" accept="image/*" name="article_image" required onchange="loadFile(event)">
        </div>
        <div class="form-group">
            <label for="InputShort">Краткое описание</label>
            <textarea name="short" id="InputShort" cols="" rows="2" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="InputBody">Текст</label>
            <textarea name="body" id="InputBody" rows="18"></textarea>


        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="is_main">
                На главной?
            </label>
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Добавить</button>
        {{ csrf_field() }}
    </form>
    <script>
      var loadFile = function(event) {
          document.getElementsByClassName('preview')[0].src = URL.createObjectURL(event.target.files[0]);
      };
    </script>
</div>
</body>
</html>