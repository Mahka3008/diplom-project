<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProconsGroup</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/scss/app.scss'])
    {{-- <style>



    </style>
    <style>
        .container {
    max-width: 1050px;
    width: 90%;
    margin: auto;
  }

  .nav-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 62px;
  }

  .navbar .menu-items {
    display: flex;
  }

  .navbar .nav-container li {
    list-style: none;
  }

  .navbar .nav-container a {
    text-decoration: none;
    color: #1ca3d0;
    font-weight: 500;
    font-size: 1.2rem;
    padding: 0.7rem;
  }

  .navbar .nav-container a:hover{
      font-weight: bolder;
  }

  .nav-container {
    display: block;
    position: relative;
    height: 60px;
  }

  .nav-container .checkbox {
    position: absolute;
    display: block;
    height: 32px;
    width: 32px;
    top: 20px;
    left: 20px;
    z-index: 5;
    opacity: 0;
    cursor: pointer;
  }

  .nav-container .hamburger-lines {
    display: block;
    height: 26px;
    width: 32px;
    position: absolute;
    top: 17px;
    left: 20px;
    z-index: 2;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .nav-container .hamburger-lines .line {
    display: block;
    height: 4px;
    width: 100%;
    border-radius: 10px;
    background: #1ca3d0;
  }

  .nav-container .hamburger-lines .line1 {
    transform-origin: 0% 0%;
    transition: transform 0.4s ease-in-out;
}

.nav-container .hamburger-lines .line2 {
  transition: transform 0.2s ease-in-out;
}

.nav-container .hamburger-lines .line3 {
  transform-origin: 0% 100%;
  transition: transform 0.4s ease-in-out;
}

.navbar .menu-items {
    padding-top: 60px;
    width: 100%;
    transform: translate(-150%);
    display: flex;
    flex-direction: column;
    margin-left: -10px;
    padding-left: 50px;
    transition: transform 0.5s ease-in-out;
    box-shadow: 15px 9px 25px 20px #e9f1f8;
    background: #f5faff;
}

.navbar .menu-items li {
    margin-bottom: 1.2rem;
    font-size: 18px;
    font-weight: 500;
    border-bottom: 0.5px solid #4cb3d3a6;
    width: 32%;
}



.nav-container input[type="checkbox"]:checked ~ .menu-items {
  transform: translateX(0);
}

.nav-container input[type="checkbox"]:checked ~ .hamburger-lines .line1 {
  transform: rotate(45deg);
}

.nav-container input[type="checkbox"]:checked ~ .hamburger-lines .line2 {
  transform: scaleY(0);
}

.nav-container input[type="checkbox"]:checked ~ .hamburger-lines .line3 {
  transform: rotate(-45deg);
}

.nav-container input[type="checkbox"]:checked ~ .logo{
  display: none;
}

    </style>
    <style>
         @media(max-width: 900px) {
            .inf{
               width: auto;
            }
            main{
                width: 100%;
                margin-left: 10px;
                margin-right: 10;
            }
            .comp{
                width: 60%;
            }
            .comanda{
                width: 50%;
                margin-left: 10%;
            }
            .shell-img{
                width: 40%;
            }
            .img{
                width: 100%;
                height: auto;
            }
            .blocs-info{
              font-size: 13px;
            }
            .clients{
                flex-direction: column;
            }
            .client-block{
                width: 100%;
                overflow-y: auto;
            }

            .row{
               width: 100%;
               margin: auto;
            }
            footer{
                width: 100%;
            }
            .shell-img-2{

            }

        }
    </style>


        <style>
            @media(max-width: 500px){
            .blocs-info{
                flex-direction: column;
            }
            .comp{
                justify-content: center;
                align-items: center;
                width: 100%;
            }
            .img-2{
                display: none;
            }
            .img-3{
                margin: 0;
            }
            .inf{
                flex-direction: column;
                align-items: center;
            }
            .txt-client{
                margin-right: 0;
            }
            .comanda{
                margin-left: 0;
            }
            .shell-img{
                width: 80%;
            }
            .airpl{
                display: none;

            }
            .row{
                width: 95%;
                margin-bottom: 10px;
            }
            .head-sv{
                justify-content: center;
            }
            .mobile-header{
                display: block;
            }
            .navig-hed{
                display: none;
            }
            main{
                margin-top: 0;
            }
            .logo{
                height: 50px;
                width: 80px;
                position: absolute;
                top: 5px;
                right: 15px;
                font-size: 1.2rem;
                color: #1ca3d0;
            }
            .mobile-logo{
                height: 45px;
            }
            .container{
                border-bottom: 0.5px solid lightgray;
                width: 100%;
            }
            .bloc-info{
                margin-bottom: 30px;
            }
        }
        </style> --}}
</head>
<body>
<nav class="mobile-header">
    <div class="navbar">
          <div class="container nav-container">
              <input class="checkbox" type="checkbox" name="" id="" />
              <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
              </div>

            <div class="menu-items">
              <li><a href="/">Главная</a></li>
              <li><a href="/about">О компании</a></li>
              <li><a href="/project">Проекты</a></li>
              <li><a href="/services">Услуги</a></li>
              <li><a href="/contacts">Контакты</a></li>
            </div>
            <div class="logo">
                <img src="https://proconsgroup.com/local/templates/procons/icon/logo.svg" alt="не загрузилось" class="mobile-logo" >
               </div>
          </div>
        </div>
      </nav>
    <header class="navig-hed" >
        <div class="logo">
            <img src="./imgs/image.png" class="img-1" alt="не загрузилось">
        </div>
        <nav class="navig-rod">
            <ul class="navig">
                <li class="btn-navig"><a href="/">Главная</a></li>
                <li class="btn-navig"><a href="/about">О компании</a></li>
                <li class="btn-navig"><a href="/project">Проекты</a></li>
                <li class="btn-navig"><a href="/services">Услуги</a></li>
                <li class="btn-navig"><a href="/contacts">Контакты</a></li>
            </ul>
        </nav>
        {{-- @if (auth()->user())
        {{auth()->user()->name}}
        <form class="form-logout" action="/logout" method="POST">
            @csrf
            <button class="btn btn-primary">Выйти</button>
        </form>
        @else
        <div class="shell-avtor">
            <div class="btn-vr">
                <a href="/login">Войти</a>
            </div>
            <p class="btn-vr">/</p>
            <div>
                 <div class="btn-vr">
                    <a href="/register">Регистрация</a>
                 </div>
            </div>
        </div>  
        @endif --}}
        
    </header>

    <main>



        @yield('content')

    </main>

    <footer>
        <p>© 2024. Procons Group</p>
        <p>Разработано Залыгина Мария Алексеевна</p>
    </footer>

</body>
</html>


