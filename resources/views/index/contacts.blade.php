@extends('layouts.basic')
@section('content')
<style>
         .header-txt{
        text-transform: uppercase;
        color: transparent;
        -webkit-text-stroke: 1px #1ca3d0;

    }
    .head-contact{
        margin: 30px;
        display: flex;
        justify-content: flex-end;  
    }
    .maps-shell{
        display: flex;
        border: 1px solid lightgrey;
        margin: 30px;
        padding: 30px;
    }
    .maps{
        width: 50%;
        display: flex;
        justify-content: center;
    }

    .txt-maps{
        width: 50%;
        justify-content: center;
        display: flex;
        flex-direction: column;
        margin: 20px;
    }
    .row{
            margin: auto;
            width: 50%;
        }
        .maps-maps{
            border: #1ca3d0 1px solid;
        }

        @media(max-width: 500px){
            .maps-shell{
                flex-direction: column-reverse;
                justify-content: center;
            }
            .maps{
                width: 100%;
            }
            .row{
                width: 100%;
                margin: 10px;
            }
        }
</style>
<section class="header-txt head-contact">
    <h1>ОФИС В МОСКВЕ</h1>
</section> 
<section>
    <div class="maps-shell">
        <div class="maps">
            <iframe class="maps-maps" src="https://yandex.ru/map-widget/v1/?um=constructor%3A81235cce62c982a8bb1452e0d8756a80fd31cf562e728f19ff4a80e314b70796&amp;source=constructor" width="442" height="307" frameborder="0"></iframe>
        </div>
        <div class="txt-maps">
            <div>
                <h5>ООО «Проконс Групп»</h5>
            </div>
            <div>
                <h5>АДРЕС </h5>
                <p>Россия, Московская область., 141407, г. Химки, Куркинское ш., строение 2, офис 304</p>
            </div>
            <div>
                <h5>ТЕЛЕФОН</h5>
                <p>+7 495 797 10 75</p>
            </div>
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
@endsection