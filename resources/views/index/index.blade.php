@extends('layouts.basic')
@section('content')

    <section class="inf">
        <div class="comp">
            <h1 class="zag-comp" >О компании</h1>
            <p class="txt-comp" >Компания Procons Group была основана в 2003 году в Москве. В начале профессиональной деятельности в эпоху активного строительства крупных торговых центров в России Procons Group одними из первых начали осуществлять строительно-монтажные и отделочные работы в сфере ритейла.</p>
            <a class="btn btn-primary btn2" href="/about">Подробнее</a>
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
  
   <form class="row g-2 form-appl" method="post" action="/submit">
    @csrf.
    <div class="head-sv">
   <h1 class="txt-client">Обратная связь</h1>
   <div>
        <img class="airpl" src="https://proconsgroup.com/local/templates/procons/images/callback.png" alt="">
    </div>
    </div>
    <div >
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail4">
    </div>
    <div >
        <label for="inputName" class="form-label">ФИО</label>
        <input type="text" name="name" class="form-control" id="inputName">
    </div>
    <div>
        <label for="inputNumber" class="form-label">Телефон</label>
        <input type="number" name="numberPhone" class="form-control" id="inputNumber2" >
    </div>
    <div >
        <label for="inputAppl" class="form-label">Ваше сообщение</label>
        <input type="text" name="appl" class="form-control" id="inputAppl">
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
<script>
    const form = document.querySelector('.form-appl')
    if(form){
        form.onsubmit = (oe) => {
            oe.preventDefault();
            const data = new FormData(form);
            console.log('data', data)
            axios.post("/submit", data)
            .then(res => {
                console.log("res", res)
                alert(res.data.massage)
                form.reset()
            })
        }
    }
</script>
</section>

@endsection