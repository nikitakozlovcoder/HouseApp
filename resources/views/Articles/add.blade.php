<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
<div style=" position: fixed; width: 100%; background-color: white; top: 0; border-bottom: 1px solid #dbdbdb;">
    <div style="display: flex; justify-content: space-between; width: 900px; margin: 10px auto;">
        <form action="{{route('LogOut')}}">
            <button type="button" class="btn btn-secondary">Выйти</button>
        </form>
        <button type="button" class="btn btn-primary"><a href="{{route('ShowAll')}}" style="color: white !important">Назад</a></button>
    </div>
</div>
<div class="wrap" style="width: 900px; margin: 60px auto 20px;">
    <form action="{{route('Add')}}" method="post" style="width: 100%;" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleSelect1">Категория</label>
            <select class="form-control" id="exampleSelect1" name="category_id">
                @foreach($categories as $category)
                    <option value="{{$category['id']}}">{{$category['name']}}</option>
                @endforeach
            </select>
        </div>
        <span style="cursor: pointer; color: #2696f0; font-weight: bold;">Новая категория</span>
        <br>
        <br>
        <div class="form-group">
            <label for="InputTitle">Заголовок</label>
            <input type="text" class="form-control" id="InputTitle" name="title" required>
        </div>
        <div class="form-group">
            <label for="InputFile">Изображение</label>
            <input type="file" class="form-control-file" id="InputFile" name="article_image" required>
        </div>
        <div class="form-group">
            <label for="InputShort">Краткое описание</label>
            <textarea name="short" id="InputShort" cols="" rows="2" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="InputBody">Текст</label>
            <textarea name="body" id="InputBody" cols="30" rows="10" class="form-control" required></textarea>
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
</div>
</body>
</html>