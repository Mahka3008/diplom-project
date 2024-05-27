@extends('layouts.basic')
@section('content')
{{-- <style>
     .header-txt{
        text-transform: uppercase;
        color: transparent;
        -webkit-text-stroke: 1px #1ca3d0;
    }
    .bloc-txt{
        margin: 30px;
    }
    .header-project{
        display: flex;
        margin: 20px;
    }
    .shell-project{
        padding: 10px;
        color: #1ca3d0;
        border-bottom: 0.5px solid lightgrey;
    }
    .card-project{
    display: flex;
    align-items: center;
    margin: 50px;
    border: 1px solid lightgray;
}
.img-project {
    display: flex;
    overflow: overlay;
    margin: 20px;
    width: 50%;
}
.txt-card{
    margin: 20px;
    width: 50%;
}

@media(max-width: 500px){
        .header-project{
            display: none;
        }
        .txt-card{
            width: 90%;
        }
        .img-project{
            width: 90%;
        }
        .card-project{
            display: flex;
            flex-direction: column-reverse;
            margin: 5px;
        }
    }

</style> --}}
<section class="header-txt bloc-txt">
        <h1 class="">ПРОЕКТЫ</h1>
</section>


<section class="header-project">
    <div class="shell-project">
        <a href="" class="link-progect">Все проекты</a>
    </div>
    <div class="shell-project">
        <a href="" class="link-progect">Апартаменты</a>
    </div>
    <div class="shell-project">
        <a href="" class="link-progect">Кинотеатры</a>
    </div>
    <div class="shell-project">
        <a href="" class="link-progect">Общесвенные места</a>
    </div >
    <div class="shell-project">
        <a href="" class="link-progect">Гостинницы</a>
    </div>
    <div class="shell-project">
        <a href="" class="link-progect">Торговые центры</a>
    </div>
</section>

<section class="card-project">
    <div class="img-project">
        <img src="https://proconsgroup.com/upload/iblock/ee8/ee8c9f987391ff4be26dd948c1e1e02a.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/104/j5rcd8mkd0xuhf406nuj83mvn6ga1x7g.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/595/59545df00391070d94396b885fc1dfba.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/d31/tgjgaawlxsxajn0ra9ipke0u6defjvj6.jpg" alt="">
    </div>
    <div class="txt-card">
        <div>
            <h5>Москва-Сити, вестибюли Neva Towers</h5>
        </div>
        <div>
            <div>
                <h6>ПЛОЩАДЬ</h6>
                <p>1200 кв.м</p>
            </div>
            <div>
                <h6>ГОД</h6>
                <p>2020</p>
            </div>
        </div>
        <div>
            <p>КОНЦЕПЦИЯ ДИЗАЙНА ИНТЕРЬЕРОВ</p>
            <p>Hirsch Bedner Associates</p>
        </div>
        <div>
            <p>ОСОБЕННОСТИ ПРОЕКТА</p>
            <p>1500 кв.м отделки пола и стен натуральным мрамором, отделка декоративными элементами из латуни.</p>
        </div>
    </div>
</section>

<section class="card-project">
    <div class="txt-card">
        <div>
            <h5>Москва-Сити, апартаменты Neva Towers</h5>
        </div>
        <div>
            <div>
                <h6>ПЛОЩАДЬ</h6>
                <p>8124 кв.м</p>
            </div>
            <div>
                <h6>ГОД</h6>
                <p>2020</p>
            </div>
        </div>
        <div>
            <p>ОСОБЕННОСТИ ПРОЕКТА</p>
            <p>Высококачественные отделочные работы в апартаментах престижного многофункционального комплекса Neva Towers.</p>
        </div>
    </div>
    <div class="img-project">
        <img src="https://proconsgroup.com/upload/iblock/153/1530572d730bb419c9bf395549d371c9.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/ee5/ee5fb90a81ad6a3eecb3f0bf74551824.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/212/212bcd4a2c26fc304e20b4c8c6c31f3f.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/87d/87de02b1920727e81c1b2533baea1ca3.jpg" alt="">
    </div>
</section>

<section class="card-project">
    <div class="img-project">
        <img src="https://proconsgroup.com/upload/iblock/af2/af2fb83e7bc49a79a88192a92f16ab9a.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/6e9/6e995aafafed6ac769e3ff6e58ddbd72.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/cd5/cd584af613aeac298d87b195169a454b.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/af2/af2fb83e7bc49a79a88192a92f16ab9a.jpg" alt="">
    </div>
    <div class="txt-card">
        <div >
            <h5>Кофейня What's CUP, Neva Towers</h5>
        </div>
        <div>
            <div>
                <h6>ПЛОЩАДЬ</h6>
                <p>37 кв.м</p>
            </div>
            <div>
                <h6>ГОД</h6>
                <p>2020</p>
            </div>
        </div>
        <div>
            <p>КОНЦЕПЦИЯ ДИЗАЙНА ИНТЕРЬЕРОВ</p>
            <p>IND ARCHITECTS</p>
        </div>
        <div>
            <p>ОСОБЕННОСТИ ПРОЕКТА</p>
            <p>Уникальные архитектурно-планировочные решения на маленькой площади объекта ритейла. Отделка потолков и стен декоративной штукатуркой «жидкий металл», мебель индивидуального изготовления.</p>
        </div>
    </div>
</section>

<section class="card-project">
    <div class="txt-card">
        <div>
            <h5>Объекты бренда Inditex</h5>
        </div>
        <div>
            <div>
                <h6>ПЛОЩАДЬ</h6>
                <p>>10000 кв.м</p>
            </div>
            <div>
                <h6>ГОД</h6>
                <p>2008-2012</p>
            </div>
        </div>
    </div>
    <div class="img-project">
        <img src="https://proconsgroup.com/upload/iblock/2e8/2e85785754bca731fb06b4321677ac8a.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/09f/09f55eaf602f579e5b467bb07b869599.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/cae/cae446259477f796c85922b75fe99f78.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/786/786fed5d1685f1e05ac5d95090823c57.jpg" alt="">
    </div>
</section>

<section class="card-project">
    <div class="img-project">
        <img src="https://proconsgroup.com/upload/iblock/3c8/3c8fb07a207177afc9645734127609a6.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/b28/b285f9b020b2b269067235b7a5ef9463.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/294/29497a4f9c7f65c3ded77ed3d4a90cd8.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/a38/a3886e9d079cdfae21395702ca94a307.jpg" alt="">
    </div>
    <div class="txt-card">
        <div >
            <h5>Кинотеатр «Космик», ТЦ «Капитолий» Сергиев Посад</h5>
        </div>
        <div>
            <div>
                <h6>ПЛОЩАДЬ</h6>
                <p>2465 кв.м</p>
            </div>
            <div>
                <h6>ГОД</h6>
                <p>2015</p>
            </div>
        </div>
        <div>
            <p>ОСОБЕННОСТИ ПРОЕКТА</p>
            <p>Комплекс, состоящий из 5 кинозалов, ресторана и детской игровой зоны.</p>
        </div>
    </div>
</section>

<section class="card-project">
    <div class="txt-card">
        <div>
            <h5>Развлекательный комплекс «Космик» в МФК «Кунцево-плаза»</h5>
        </div>
        <div>
            <div>
                <h6>ПЛОЩАДЬ</h6>
                <p>3200 кв.м</p>
            </div>
            <div>
                <h6>ГОД</h6>
                <p>2015</p>
            </div>
        </div>
    </div>
    <div class="img-project">
        <img src="https://proconsgroup.com/upload/iblock/497/49789c34199ea6005a9c416c871c7777.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/287/287011ea01a15045c8fcba1cbf1cbc5e.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/e6a/e6a7316c4317b8e8a23a188b176397f2.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/e94/e94d27d670a845fcbe7794727d94dd12.jpg" alt="">
    </div>
</section>

<section class="card-project">
    <div class="img-project">
        <img src="https://proconsgroup.com/upload/iblock/ae1/ae11de7843ea6d4ae7f91a08b3eab7db.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/793/793238ffbb265507b1b699dee67dd16f.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/ca3/ca3eed90474ce97f8ac4ae3c27a82964.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/e2b/e2b128d1e54a7d203de4a5e09dbf63e8.jpg" alt="">
    </div>
    <div class="txt-card">
        <div >
            <h5>Гостиница Holiday Inn Express Маниса, Турция</h5>
        </div>
        <div>
            <div>
                <h6>ГОД</h6>
                <p>2014</p>
            </div>
        </div>
        <div>
            <p>ОСОБЕННОСТИ ПРОЕКТА</p>
            <p>102 номера / 240 мест</p>
        </div>
    </div>
</section>

<section class="card-project">
    <div class="txt-card">
        <div>
            <h5>Автосалон Audi, Красноярск</h5>
        </div>
        <div>
            <div>
                <h6>ПЛОЩАДЬ</h6>
                <p>8000 кв.м</p>
            </div>
            <div>
                <h6>ГОД</h6>
                <p>2007</p>
            </div>
        </div>
    </div>
    <div class="img-project">
        <img src="https://proconsgroup.com/upload/iblock/fb9/fb9bd984e898b48f3a9f7197f2c45c0b.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/d19/d196bf7c84f319405b6178c42374d766.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/ea7/ea7ec708429ad81022d4cfa697264112.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/fb9/fb9bd984e898b48f3a9f7197f2c45c0b.jpg" alt="">
    </div>
</section>

<section class="card-project">
    <div class="img-project">
        <img src="https://proconsgroup.com/upload/iblock/603/6035396b5406a544588a5bb88e15cd38.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/6f5/6f576cde92173493f1b37e2d2137df19.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/ca3/ca32d77ae4495357a35c6d7b801264fe.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/801/801ef3c6a606d11eea3150677e7e2d67.jpg" alt="">
    </div>
    <div class="txt-card">
        <div >
            <h5>Развлекательный центр «Мегаполис», Уфа</h5>
        </div>
        <div>
            <div>
                <h6>ПЛОЩАДЬ</h6>
                <p>12200 кв.м</p>
            </div>
            <div>
                <h6>ГОД</h6>
                <p>2007</p>
            </div>
        </div>
        <div>
            <p>ОСОБЕННОСТИ ПРОЕКТА</p>
            <p>Полный комплекс строительно-монтажных, конструктивных отделочных и инженерных работ.</p>
        </div>
    </div>
</section>

<section class="card-project">
    <div class="txt-card">
        <div>
            <h5>МФК «Добрыня», Москва</h5>
        </div>
        <div>
            <div>
                <h6>ПЛОЩАДЬ</h6>
                <p>86000 кв.м</p>
            </div>
            <div>
                <h6>ГОД</h6>
                <p>2006</p>
            </div>
        </div>
        <div>
            <p>ОСОБЕННОСТИ ПРОЕКТА</p>
            <p>Современный многофункциональный комплекс «Добрыня» расположен в безопасном престижном районе в Центральном округе Москвы. Комплекс отличает высокое удобство транспортного сообщения.</p>
        </div>
    </div>
    <div class="img-project">
        <img src="https://proconsgroup.com/upload/iblock/0e9/0e9d0bc652aa5a0399695d99a797be63.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/1de/1def0814ae11a5acfcfaf9d688f6208a.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/3f7/3f724a950b91a85292787357dddf28fc.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/92f/92f1f89f6e07e179dc466a1a73889e26.jpg" alt="">
    </div>
</section>

<section class="card-project">
    <div class="img-project">
        <img src="https://proconsgroup.com/upload/iblock/997/99744a4086e063638497876603ee13b3.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/768/76828d81234c57123c057837989b7be7.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/f85/f85297737a3d9b1d025d3510d2c44f46.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/3bd/3bdd6eea76a9c4d14883837a0f865f4e.jpg" alt="">
    </div>
    <div class="txt-card">
        <div>
            <h5>Автосалон «КМ/Ч», Химки МО</h5>
        </div>
        <div>
            <div>
                <h6>ПЛОЩАДЬ</h6>
                <p>4100 кв.м</p>
            </div>
            <div>
                <h6>ГОД</h6>
                <p>2005</p>
            </div>
        </div>
    </div>
</section>

<section class="card-project">
    <div class="txt-card">
        <div>
            <h5>Boyner Lidedom Atmosphere Piquardo, ТРЦ "Мега", Химки МО</h5>
        </div>
        <div>
            <div>
                <h6>ПЛОЩАДЬ</h6>
                <p>4000 кв.м</p>
            </div>
            <div>
                <h6>ГОД</h6>
                <p>2004</p>
            </div>
        </div>
    </div>
    <div class="img-project">
        <img src="https://proconsgroup.com/upload/iblock/75d/75dcc9f13b66463b6022430d357c7e70.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/778/7789bf6946dcfd0bed2a14d8aade11a4.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/04e/04e83d438170b57618f7b8af7b434ec3.jpg" alt="">
        <img src="https://proconsgroup.com/upload/iblock/e03/e03f2c8be3c560bf05e0b2e49444638f.jpg" alt="">
    </div>
</section>
@endsection