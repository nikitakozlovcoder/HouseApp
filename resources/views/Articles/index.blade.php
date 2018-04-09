<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админ</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        table th{
            vertical-align: middle !important;
        }
    </style>
</head>
<body>
<div style="position: fixed; width: 100%; background-color: white; top: 0; border-bottom: 1px solid #dbdbdb;">
    <div style="display: flex; justify-content: space-between; width: 900px; margin: 10px auto;">
        <form action="{{route('LogOut')}}">
            <button type="button" class="btn btn-secondary">Выйти</button>
        </form>
        <button type="button" class="btn btn-primary"><a href="{{route('AddShow')}}" style="color: white !important">Добавить</a></button>
    </div>
</div>
<div class="wrap" style="width: 900px; margin: 0 auto;">
    <table class="table" style="margin-top: 80px">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Изображение</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Категория</th>
            <th scope="col">На главной?</th>
            <th scope="col">Управление</th>
        </tr>
        </thead>
        <tbody>

        @for ($i = 0; $i < count($articles); $i++)

            <tr>

                <th>{{$i}}</th>
                <th><img src="{{'./img/'.$articles[$i]['image_url']}}" alt="" style="width: 70px; height: auto; max-height: 70px;"></th>
                <th>{{$articles[$i]['title']}}</th>
                <th>{{$articles[$i]->Category['name']}}</th>
                <th>
                    @if($articles[$i]['is_main'])
                        да
                    @else
                        нет
                    @endif
                </th>
                <th style="font-size: 12px;">
                    <a href="{{route('Show', ['id'=> $articles[$i]['id']])}}">Читать </a>
                    <a href="{{route('UpdateShow', ['id'=> $articles[$i]['id']])}}">Изменить </a>
                    <a href="{{route('Delete', ['id'=> $articles[$i]['id']])}}" style="color: red;">Удалить</a></th>
            </tr>
        @endfor
        </tbody>
    </table>
</div>
</body>
</html>