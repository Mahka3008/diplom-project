@extends('layouts.basic')
@section('content')
<style>
    .calculator{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .choise-mater{
        display: flex;
        flex-direction: column;
    }
    .choise-kv{
        display: flex;
        flex-direction: column;
    }
    .btn-calculator{
        margin: 15px;
        color: white ;
        background: #1ca3d0;
    }
    .txt-calc{
        text-transform: uppercase;
        color: transparent;
        -webkit-text-stroke: 1px #1ca3d0;
    }
    .number-result{
        color: #1ca3d0;
        font-size: 20px;
    }
    .txt-color{
        color: #1ca3d0;
    }
    .label-margin{
        margin: 15px;
    }
    

</style>

<section class="calculator">
    <h2 class="txt-calc">Калькулятор стоисмости услуги</h2>
    <div>
    <div class="choise-kv">
        <label class="txt-color" for="count">Стоимость материала:</label>
        <p class="price txt-color"></p>
    </div>
    <div class="txt-color" class="choise-mater">
        <select   class="select-calc txt-color" name="variant" id="">
            <option selected="selected">Выберите материал</option>
            <option value="300">Краска</option>
            <option value="700">Обои</option>
            <option value="400">Штукатурка</option>
            <option value="800">Дерево</option>
            <option value="1200">Камень</option>
            <option value="900">Плитка</option>
            <option value="800">Гипсокартон</option>
            <option value="600"> Металлические панели</option>
        </select>
    </div >
    </div>
   <div  class="choise-kv">
        <label class="txt-color label-margin" for="square">Площадь помещения м^2</label>
        <input class="txt-color"  type="text" id="square">
    </div>
    <div >
        <button class="btn btn-calculator" onclick="calculateCost()">Рассчитать</button>
        <p class="txt-color" class="number-result" id="totalCost"></p>
    </div>


</section>

<script>
    let price = 0;
    function  calculateCost() { 
      const square = parseInt(document.getElementById('square').value);
      let totalCost = price * square;
      document.getElementById('totalCost').textContent = isNaN(totalCost) ? "Укажите число" : `Итоговая стоимость: ${totalCost}`;
    
    }

    function getPrice(event){
        price = event.target.value;
        document.querySelector(".price").textContent = price + " рублей за кв/м"
    }
    document.querySelector(".select-calc").onchange = getPrice
  </script>

@endsection
