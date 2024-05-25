@extends('layouts.basic')
@section('content')
<style>
 .header-txt{
        text-transform: uppercase;
        color: transparent;
        -webkit-text-stroke: 1px #1ca3d0;
        font-size: 50px;
    }
    .head-section{
        display: flex;
        flex-direction: column;
        margin: 20px;
    }
    .txt{
        font-size: 20px;
    }
    .head-txt-m{
        color: #1ca3d0;
    }
    .section-main{
        display: flex;
        margin: 20px;
        
    }
    .txt-main{
        justify-content: center;
        display: flex;
        flex-direction: column;
        margin: 20px;
        width: 50%;
    }
    .img-main{
        display: flex;
        overflow: overlay;
        border-radius: 20px;
        width: 50%;
    }

    @media(max-width: 500px){
        .section-main{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .txt-main{
            width: 90%;
        }

        .img-main{

            width: 90%;
        }
    }
</style>

<section class="head-section">
    <div class="shell-header-txt">
        <h2 class="header-txt">
            Услуги
        </h2>
         </div>
    <div class="shell-txt">
        <p class="txt">
            В настоящее время мы предлагаем полный перечень услуг для наших клиентов: выполнение проектных, строительно-монтажных, отделочных и инженерных работ «под ключ». Большой практический опыт помог нам получить необходимые знания, которые мы используем в рамках деятельности компании ежедневно.
        </p>
    </div>
</section>

<section class="section-main">
    <div class="txt-main">
        <h1 class="head-txt-m">Отделочные работы</h1>
        <p class="txt">Комплекс строительных работ, связанных внутренней отделкой зданий и сооружений. Отделочные работы являются завершающим этапом строительства. От качественного их выполнения, во многом, зависят технико-экономические показатели зданий и сооружений.</p>
    </div>
    <div class="img-main">
        <img src="https://proconsgroup.com/upload/iblock/3ac/3ac4ec1a9865a1c8b4fadc4cbe38f60b.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/4ce/4ce86ad2903dfc73dd048b31a5cd9188.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/11f/11f6f343750aa9e06e0ab1f0e5d1b054.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/242/2427dd518676b8b9de73282860b9f59b.jpg" alt="">
    </div>
</section>

<section class="section-main">
    <div class="img-main">
        <img src="https://proconsgroup.com/upload/iblock/71d/71d06d0438858d5c2c4cfa78e3738f32.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/8e5/8e59691c6e0239b64ef50ff31018a1cf.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/ccb/ccb245e7ca00f904aa0a1233f8852640.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/715/715346f0912c5b839edf3e7413a00c9b.jpg" alt="">
    </div>
    <div class="txt-main">
        <h1 class="head-txt-m">Общестроительные работы</h1>
        <p class="txt">Новое строительство; реконструкция зданий и сооружений; монолитные и кладочные работы; монтаж строительных конструкций.</p>
    </div>
</section>

<section class="section-main">
    <div class="txt-main">
        <h1 class="head-txt-m">Проектирование</h1>
        <p class="txt">Полный цикл проектных работ: от эскизов до детализированной рабочей документации, 3D-моделирование и визуализация, BIM-проектирование, расчеты. Архитектура, интерьеры, конструктивные решения, инженерные системы.</p>
    </div>
    <div class="img-main">
        <img src="https://proconsgroup.com/upload/iblock/bb0/bb09314ba5402ac70505db6e7d07b60a.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/c39/c39e0bdb16af1b913d9cda00c5a9eeb8.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/d9e/d9e9a44d28d95ad8849a3d8b26342e1f.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/160/16012e0076e31d3f66241f2b857be3d5.jpg" alt="">
    </div>
</section>

<section class="section-main">
    <div class="img-main">
        <img src="https://proconsgroup.com/upload/iblock/901/9016b3c2a83c522daa05f3e3cb75b995.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/9e9/9e9b198df7a41a3308ab0c128d1f84c4.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/628/62886dc93e821333a797b3790d3adf53.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/638/6389b6bad153650f54e074d7f3aa582b.jpg" alt="">
    </div>
    <div class="txt-main">
        <h1 class="head-txt-m">Монтаж инженерных систем и коммуникаций</h1>
        <p class="txt">Комплекс строительных работ, связанных внутренней отделкой зданий и сооружений. Отделочные работы являются завершающим этапом строительства. От качественного их выполнения, во многом, зависят технико-экономические показатели зданий и сооружений.</p>
    </div>
</section>

<section class="section-main">
    <div class="txt-main">
        <h1 class="head-txt-m">Консультационные услуги</h1>
        <p class="txt">Консультации на стадии проектирования – помощь в выборе архитектурно планировочных, инженерных решений и материалов; оценка бюджета строительства и отделочных работ; консультации по закупкам и поставкам отделочных материалов из-за границы</p>
    </div>
    <div class="img-main">
        <img src="https://proconsgroup.com/upload/iblock/ae0/ae0249dce98f703fa15266540c34a1c3.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/d7d/d7dfea7d5b18db3d0ceb5bb90ea007a7.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/251/25183e823489aea6ba98b34dc74d6046.jpg" alt="">
    </div>
</section>

<section class="section-main">
    <div class="img-main">
        <img src="https://proconsgroup.com/upload/iblock/98c/tjipk83b8s8t3uhmi5k1yed0ampg5o5h.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/8fa/hqdpq7c01i3i2mfncfi4cff9bxnp0udj.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/08d/g15gw2dlg0t7ikt727nv4jgzuaezs2g7.jpg" alt="">
    </div>
    <div class="txt-main">
        <h1 class="head-txt-m">FIT-OUT</h1>
        <p class="txt">Выполнение комплекса проектных, инженерных, строительно-монтажных и отделочных работ «под ключ». Этот метод позволяет добиться высокого качества выполнения работ и гарантированно достичь желаемого результата.</p>
    </div>
</section>
@endsection