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

            {{-- <div class="menu-items">
              <li><a href="/register">Добавить нового пользователя</a></li>
            </div> --}}
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
        {{-- <nav class="navig-rod">
            <ul class="navig">
                <li class="btn-navig"><a href="/register">Добавить нового пользователя</a></li>
            </ul>
        </nav> --}}
        @if (auth()->user())
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
        </div>  
        @endif
        
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


