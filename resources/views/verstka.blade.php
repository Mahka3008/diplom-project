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
    <style>

       

   
        html{
            scrollbar-color: #1ca3d0 #fff;
            scrollbar-width: thin;
        }
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .navig-hed{
            display: flex;
            justify-content:  flex-start;
            border-bottom: 0.5px solid #1ca3d0;
            height: 90px;
            position: fixed;
            width: 100%;
            background: white;
            top: 0;
            left: 0;
        }
        main{
            margin-top: 90px;
        }
        .navig{
            display: flex;
            align-items: center;
            list-style-type: none;
            color: #1ca3d0;
            margin-bottom: 0;
            padding: 0;
        }
        .navig-rod{
            display: flex;
            margin-left: 10px;
        }
        .avtor{
            display: flex; 
            align-items: center;
            margin-left: auto;
        }
        .btn-navig{
            margin: 10px;
        }
        .btn-vr{
            margin: 5px;
            color: #1ca3d0;
        }
        a{
            text-decoration: none;
            color: inherit;
        }
        .inf{
            display: flex;
            justify-content: center;   
            margin: 20px;
        }
        .blocs-info{
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }
        .bloc-info{
            border: 0.5px solid #cfcfcfa1;
            margin: 10px;
            align-items: center;
            flex-direction: column;
            padding: 20px;
        }
        .dising-bloc{
            color: #1ca3d0;
            font-size: 40px;
            margin-top: -46px;
            margin-left: 20px;
            font-weight: bold;
        }
        .txt-info{
            margin: 10px;
        }

        .img-1{
            height: 50px;
            margin-left: 20px;
        }
        .logo{
            display: flex;
            align-items: center;
        }
        .img-2{
           height: 500px;
            margin-top: 10px;
        }

        .comp{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .zag-comp{
            text-transform: uppercase;
            color: transparent;
            -webkit-text-stroke: 1px #1ca3d0;
        }
        .razdel{
            color:#1ca3d0;
        }
        .img-3{
            height: 400px;
            margin: 25px;
        }
        /* .inf{
            margin: 30px;
        } */
 
        .client-block{
            display: flex;
            align-items: center;
            width: 100%;
            justify-content: space-around;
         }
        .clients{
            flex-direction: column;
            align-items: flex-end;
            justify-content: flex-end;
        }
        .client-img{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .txt-client{
            text-transform: uppercase;
            color: transparent;
            -webkit-text-stroke: 1px #1ca3d0;
            display: flex;
            justify-content: flex-end;
            margin: 0;
            margin-right: 70px;
        }
        .row{
            margin: auto;
            width: 50%;
        }
        footer{
            display: flex;
            background: #e8e6e6a1;
            justify-content: space-between;
            font-size: 12px;
        }


    .btn {
        width: 110px;
        background: #1ca3d0;
        border: grey;
    }
    .head-sv{
        display: flex;
        justify-content: space-between;
    }
    .airpl{
        height: 105px;
    }
    .txt-comp{
            font-size: 20px;
    }

    .work{
        margin-top: 20px;
    }
    .num{
        width: 197px;
    }

    .mobile-header{
        display: none;
    }

        
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

.logo {
  position: absolute;
  top: 5px;
  right: 15px;
  font-size: 1.2rem;
  color: #1ca3d0;
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
        </style>
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
              <li><a href="#">Главная</a></li>
              <li><a href="#">О компании</a></li>
              <li><a href="#">Услуги</a></li>
              <li><a href="#">Портфолио</a></li>
              <li><a href="#">Контакты</a></li>
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
                <li class="btn-navig"><a href="">Главная</a></li>
                <li class="btn-navig"><a href="">О компании</a></li>
                <li class="btn-navig"><a href="">Проекты</a></li>
                <li class="btn-navig"><a href="">Клиенты</a></li>
                <li class="btn-navig"><a href="">Услуги</a></li>
                <li class="btn-navig"><a href="">Контакты</a></li>
            </ul>
        </nav>
        <div class="avtor">
            <div class="btn-vr">
                <a href="">Войти</a> 
            </div>
            <p class="btn-vr">/</p>
            <div class="btn-vr">
                <a href="">Регистрация</a> 
            </div>
        </div>
    </header>


    <main>
        <section class="inf">
            <div class="comp">
                <h1 class="zag-comp" >О компании</h1>
                <p class="txt-comp" >Компания Procons Group была основана в 2003 году в Москве. В начале профессиональной деятельности в эпоху активного строительства крупных торговых центров в России Procons Group одними из первых начали осуществлять строительно-монтажные и отделочные работы в сфере ритейла.</p>
                <a class="btn btn-primary" href="">Подробнее</a>
            </div>
            <div class="shell-img-2 shell-img">
                <img src="https://proconsgroup.com/upload/iblock/632/eqe1ptqfq55b87k3eh0x09zm0qzgnurw.jpg" class="img-2 img"  alt="не загрузилось">
            </div>
            
        </section>


        <section class="inf">
            <div class="shell-img">
                <img src="https://proconsgroup.com/upload/images/team.png" class="img-3 img" alt="не загрузилось">
            </div>
            <div class="comp comanda">
                <h1  class="zag-comp">Команда</h1>
                <p class="txt-comp">Компания обладает всем необходимым материально-техническим оснащением, высококвалифицированным административным персоналом, специалистами и мастерами для выполнения самых ответственных проектов.</p>
                <a class="btn btn-primary" href="">Подробнее</a>
            </div>
        </section>


        <section class="blocs-info">
            <div class="bloc-info"><h4 class="dising-bloc">18</h4><p class="txt-info"> лет на рынке Российской Федерации и СНГ</p></div>
            <div class="bloc-info"><h4 class="dising-bloc">38</h4><p class="txt-info"> высококвалифицированных специалистов</p></div>
            <div class="bloc-info"><h4 class="dising-bloc">более 100</h4><p class="txt-info"> выполненных проектов</p></div>
            <div class="bloc-info"> <h4 class="dising-bloc num">200 000</h4><p class="txt-info"> реализованных строительно-монтажных и отделочных работ</p></div>
        </section>


        <section class="inf clients">
            <h1 class="txt-client">Клиенты</h1>
            <div class="client-block">
                <div class="client-img">
                <img  src="https://proconsgroup.com/upload/iblock/001/001656194de6787b9700a364bc983c4e.jpg" alt="">
                <img src="https://proconsgroup.com/upload/iblock/9c9/9c9721d84b9c305a2e0ee4966a48039b.jpg" alt="">
                </div>
                <img src="https://proconsgroup.com/upload/iblock/418/418524edb03b4a3cdadae6b3b16f30c8.jpg" alt="">
                <div class="client-img">
                <img src="https://proconsgroup.com/upload/iblock/c43/c43e23f2796c5c8c39dc2c962136be07.jpg" alt="">
                <img src="https://proconsgroup.com/upload/iblock/41b/41ba858b3930e57bb59d258ddc6167fd.jpg" alt="">
                </div>
                <img src="https://proconsgroup.com/upload/iblock/c0c/c0cb5ef06a150944bec1994e0e656fca.jpg" alt="">
                <div class="client-img">
                <img src="https://proconsgroup.com/upload/iblock/0ca/0caad8ea2737f71c050fb02093db1260.jpg" alt="">
                <img src="https://proconsgroup.com/upload/iblock/102/102d6bd316c308e0ff0004196495e17e.jpg" alt="">
                </div>
            </div>
        </section>
       <section>
      
       <form class="row g-2">
        <div class="head-sv">
       <h1 class="txt-client">Обратная связь</h1>
       <div>
            <img class="airpl" src="https://proconsgroup.com/local/templates/procons/images/callback.png" alt="">
        </div>
        </div>
  <div >
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div >
    <label for="inputCity" class="form-label">ФИО</label>
    <input type="text" class="form-control" id="inputAddress">
  </div>
  <div>
    <label for="inputCity" class="form-label">Телефон</label>
    <input type="number" class="form-control" id="inputAddress2" >
  </div>
  <div >
    <label for="inputCity" class="form-label">Ваше сообщение</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
      Я ознакомился и принимаю условия политики конфиденциальноcти
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Отправить</button>
  </div>
</form>
 </section>
</main>
    <footer>
        <p>© 2024. Procons Group</p>
        <p>Разработано Залыгина Мария Алексеевна</p>
    </footer>

</body>
</html>