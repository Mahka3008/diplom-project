@extends('layouts.basic')
@section('content')
<style>
    .inf-section{
        display: flex;
        margin: 10px;
        flex-direction: column;
     }
    .header-txt{
        text-transform: uppercase;
        color: transparent;
        -webkit-text-stroke: 1px #1ca3d0;
    }
    
    .head-txt{
        font-size: 50px;
    }
    .main-txt{
        display: flex;
    }
    .txt{
        font-size: 20px;
    }
    .section-blocs{
        display: flex;
        margin: 25px;
    }
    .bloc{
        width: 470px;
        border-top: 7px solid #e5e5e5;
        margin: 15px;
    }
    .inf-direct{
        display: flex;
        flex-direction: column;
        margin-left: 30%;
        width: 50%;
    }
    .dirik{
        align-items: center;
        display: flex;
        flex-direction: column;
        margin: 10px;
    }
    .header-dir{
        color: #1ca3d0;
    }

    .project-link {
    position: relative;
}

.project-link__pic {
    width: 100%;
    height: 80%;
    vertical-align: middle;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: right;
    object-position: right;
    margin-bottom: 55px;
}

.project-link__pic {
    width: 100%;
    height: 80%;
    vertical-align: middle;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: right;
    object-position: right;
}

.project-link__title {
    font-size: 5.25rem;
    font-weight: 500;
    line-height: 80px;
    margin-bottom: 20px;
    text-transform: uppercase;
    color: #fff;
    text-shadow: 0 0 20px rgba(0, 0, 0, .46);
}

.project-link .btn {
    color: #fff;
}

.project-link__inner {
    position: absolute;
    top: 50%;
    left: 20px;
    margin: 0 auto;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}

@media(max-width: 900px) {
    .img-about{
        width: 100%;

    }
    .main-txt {
    display: flex;
    flex-direction: column;
}
}

@media(max-width: 500px){
    .section-blocs{
        display: flex;
        flex-direction: column;
        width: 100%;
        margin: 0;
    }
    .inf-direct{
        margin-left: 0;
        width: 100%
    }
    .project-link__title {
    font-size: 4.25rem;
    font-weight: 00;
    line-height: 52px;
    /* margin-bottom: 10px; */
    text-transform: uppercase;
    color: #fff;
    text-shadow: 0 0 20px rgba(0, 0, 0, .46);
}
.project-link__pic{
    height: 25vh;
}
}
</style>

<section class="inf-section">
    <div class="header-txt">
        <h2 class="head-txt">
            О компании
        </h2>
    </div>
    <div class="main-txt">
        <div class="txt">
            <p>
                Компания Procons Group была основана в 2003 году в Москве. В начале профессиональной деятельности в эпоху активного строительства крупных торговых центров в России Procons Group одними из первых начали осуществлять строительно-монтажные и отделочные работы в сфере ритейла.
                В настоящее время мы предлагаем полный перечень услуг для наших клиентов: выполнение проектных, строительно-монтажных, отделочных и инженерных работ «под ключ». Большой практический опыт помог нам получить необходимые знания, которые мы используем в рамках деятельности компании ежедневно.
                Во всех наших проектах наибольшее внимание уделяется безопасности, высокому качеству выполнения работ, соблюдению сроков и условий договора. Это позволило Procons Group завоевать доверие заказчиков на строительном рынке России.
                Компания обладает всем необходимым материально-техническим оснащением, высококвалифицированным административным персоналом, специалистами и мастерами для выполнения самых ответственных проектов.
                Основными направлениями деятельности компании являются строительство коммерческой недвижимости – офисы, торгово-развлекательные центры, магазины, общепит, кинотеатры, гостиницы, учебные учреждения; а также жилое строительство.
            </p>
        </div>
        <div class="shell-img-about">
            <img class="img-about" src="https://proconsgroup.com/upload/images/about.jpg" alt="">
        </div>
    </div>
</section>
<section class="section-blocs">
    <div class="bloc">Ни одного "сорванного" объекта за 18 лет работы. Более 200 выполненных объектов на территории России и стран СНГ</div>
    <div class="bloc">Реализация проектов «под ключ» - от идеи до сдачи объекта в эксплуатацию</div>
    <div class="bloc">Неотступно следуем строительным нормам, стандартам и требованиям пожарной безопасности в каждом проекте</div>
    <div class="bloc">Наше грамотное планирование рабочего процесса является гарантией сдачи Вашего объекта в срок</div>
</section>

<section class="inf-direct">
    <div class="dirik">
        <h3 class="header-dir">Посту А.В. Генеральный директор</h3>
        <p>Строительных компаний много, но тех, кто действительно выполняют свою работу качественно и профессионально – единицы. Проконс Групп – это люди, увлеченные своей работой. </p>
    </div>
    <div class="dirik">
        <h3 class="header-dir">Борщев Е.В. Руководитель проекта</h3>
        <p>Условия мировых кризисов дают новые возможности для развития нашей профессиональной деятельности. В период пандемии в 2020-2021 гг. существенным образом вырос спрос на жилье. В этом контексте необходимо было быстро адаптироваться к новым условиям, и сейчас мы - одни из лидеров рынка в сфере отделочных работ и подготовке комплексов элитных апартаментов «под ключ». Умение подстраиваться под условия рынка, сохраняя при этом высокую планку качества – это важнейшее качество для компании, работающей в сфере строительства.</p>
    </div>
    <div class="dirik">
        <h3 class="header-dir">Жуковский А.А. Главный инженер проекта</h3>
        <p>В вопросах строительства и проектирования самое главное – найти необходимый баланс: баланс финансовых затрат и качества работ, баланс времени и трудовых ресурсов, баланс в коммуникации с заказчиком и партнерами. Многие годы сотрудники Проконс Групп находились в поисках того самого баланса – этот опыт, несомненно, позволяет нашей команде успешно решать самые трудные задачи и реализовывать ответственные проекты в обозначенные сроки.</p>
    </div>
</section>

<section class="project-link">
    <img alt="Наши Проекты" src="https://proconsgroup.com/upload/images/project-bg.png" class="project-link__pic" role="presentation">
   <div class="project-link__inner inner">
       <p class="project-link__title">Наши<br>Проекты</p>
        <a class="btn btn-primary" href="#">В раздел</a>
   </div>
</section>
@endsection