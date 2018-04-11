<!doctype html>
<html class="no-js" lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Дом Кровли</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="manifest" href="site.webmanifest">-->
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="preload" href="./img/1920x1080/01.jpg" as="image">
        <link rel="preload" href="./img/1920x1080/02.jpg" as="image">

        <link rel="stylesheet" href="{{asset('css/Bootstrap.css')}}">

    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
        <header class="header">
                <div style="position: absolute; background: #131313; opacity: 0.5; width: 100%; height: 100%;"></div>
                <nav class="header_nav_main">
                    <div class="wrap header_nav">
                        <a href="{{route('Home') }}" class="logo"><img src="./img/logo.png" alt=""></a>
                        <div class="header_links">
                            <a href="#" class="header_link header_links-active">Главная</a>
                            <a href="{{route('Products')}}" class="header_link">Каталог</a>
                            <a href="#" class="header_link">Контакты</a>
                        </div>
                        <img src="./img/widgets/expand.png" alt="" width="20px" class="nav_expand">

                     </div>
                </nav>
            <script src="./js/nav.js"></script>
            <div class="wrap header_info-wrap">
                <div class="header_info text">
                    <h1 class="header_info_title">дом кровли</h1>
                    <div class="header_info_text">
                        Официальный дилер компании <img src="{{asset('./img/Showcase.png')}}" alt="" style="max-width: 100px;">.
                    </div>
                    <a href="{{route('Products')}}" class="header_info_button">
                        Узнать больше
                    </a>
                </div>
            </div>
        </header>
        <section class="features_bg">
            <div class="wrap">
                <div class="features">
                    <div class="features_item">
                        <h3>Art Of Coding</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, quam?
                    </div>
                    <div class="features_item">
                        <h3>Art Of Coding</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, quam?
                    </div>
                    <div class="features_item">
                        <h3>Art Of Coding</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, quam?
                    </div>
                    <div class="features_item">
                        <h3>Art Of Coding</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, quam?
                    </div>
                    <div class="features_item">
                        <h3>Art Of Coding</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, quam?
                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="wrap">
            <div class="products">
                <h1>Наша продукция</h1>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dicta est eveniet ipsam possimus quasi quibusdam, quos recusandae sed tenetur ullam.</div>
                <div class="products_columns">
                    @foreach($articles as $article)

                    <div class="products_item">
                        <img src="{{'./img/'.$article->image_url}}" alt="">
                        <h3> {{$article->title}}</h3>
                        <div>{{$article->short}}</div>
                        <a class="products_item_button" href="{{route('Show', ['id'=> $article->id])}}">Читать дальше</a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        </section>
        <section  class="info">
            <div class="wrap">
                <div class="info_cols">
                    <div class="info_col_text info_col">
                        <h1>О нас</h1>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi deleniti earum eligendi harum ipsam quas rem rerum temporibus ut? Culpa odit repudiandae sapiente. Ab alias, consequatur cum, cupiditate distinctio itaque natus possimus quasi quod reiciendis temporibus vero voluptas, voluptatum.
                    </div>

                    <div class="info_col_img info_col">
                        <div class="info_col_img_wrap">
                            <img src="./img/970x970/01.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="showcase">
            <div class="wrap">
                <h1>Наши работы</h1>
                <div class="text">Ознакомьтесь с нашими работами.</div>
                <div class="showcase_overflow">
                    <div class="showcase_grid">
                        @foreach($images as $image)
                        <div class="showcase_grid_item">
                            <img src="{{'./img/'.$image['image_url']}}" alt="">
                        </div>
                    @endforeach
                    </div>
                    <div class="showcase_grid_expand">
                            Показать все...
                        </div>
                </div>
            </div>
        </section>
        <footer class="footer" style="background-image: url('{{asset("/img/1920x1080/02.jpg")}}')" >
            <div class="wrap">
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
        <script src="./js/main.js"></script>
    </body>
</html>
