<!DOCTYPE html>
<html  class="no-js" lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Дом Кровли</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="manifest" href="site.webmanifest">-->
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="/css/Bootstrap.css">

</head>
<body>
<header>
    <nav class="header_nav_main" style="background-color: #33363c" >
        <div class="wrap header_nav">
            <a href="{{route('Home')}}" class="logo"><img src="{{asset('img/logo.png')}}" alt=""></a>
            <div class="header_links">
                <a href="{{route('Home')}}" class="header_link">Главная</a>
                <a href="{{route('Products')}}" class="header_link">Каталог</a>
                <a href="#" class="header_link">Контакты</a>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="nav_expand"><path d="M0 84V44c0-8.837 7.163-16 16-16h416c8.837 0 16 7.163 16 16v40c0 8.837-7.163 16-16 16H16c-8.837 0-16-7.163-16-16zm16 144h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 256h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0-128h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>

        </div>
    </nav>
</header>
<script src='{{asset("js/nav.js")}}'></script>
    <div class="wrap scope" style="margin-top: 100px; max-width: 1000px;">
        <h1>{{$article['title']}}</h1>
        <br>
        <img src="{{'../img/'.$article['image_url']}}" alt="" class="product_scope_img">
        <br>
        <br>
        <div class="scope_text">
        {!! $article['body']  !!}
        </div>


    </div>

<footer class="footer" style="background-image: url('{{asset("/img/1920x1080/02.jpg")}}')">
    <div class="wrap" style="max-width: 1100px;">
        <div class="footer_cols">
            <div class="footer_col footer_col_info">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, perspiciatis, sequi! Architecto deleniti ducimus error est ipsa iste minima, molestias nesciunt nihil nobis nostrum numquam, quae sed suscipit ut vero.
            </div>
            <div class="footer_col footer_col_form">
                <h1>Свяжитесь с нами</h1>
                <form action="#" class="footer_form">

                    <input type="text" placeholder="Имя">
                    <input type="email" placeholder="Почта">
                    <input type="text" placeholder="Телефон">
                    <textarea name="" id="" rows="7"></textarea>
                    <input type="submit" class="footer_submit">
                </form>
            </div>
        </div>
    </div>
</footer>


</body>
</html>
