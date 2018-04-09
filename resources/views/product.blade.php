<!DOCTYPE html>
<html  class="no-js" lang="">
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
            <a href="" class="logo"><img src="{{asset('img/logo.png')}}" alt=""></a>
            <div class="header_links">
                <a href="{{route('Home')}}" class="header_link">Главная</a>
                <a href="{{route('Products')}}" class="header_link">Каталог</a>
                <a href="#" class="header_link">Контакты</a>
            </div>
            <img src="{{asset('img/widgets/expand.png')}}" alt="" width="20px" class="nav_expand">

        </div>
    </nav>
</header>
<script src='{{asset("js/nav.js")}}'></script>
    <div class="wrap scope" style="margin-top: 100px;">
        <h1>{{$article['title']}}</h1>
        <br>
        <img src="{{'../img/'.$article['image_url']}}" alt="" class="product_scope_img">
        <br>
        <br>
        <div class="scope_text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dicta esse facere impedit in pariatur, voluptatum. Aliquid consequuntur dignissimos error facere fugiat nisi quaerat repellendus sit ut voluptas? A, eveniet.
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
