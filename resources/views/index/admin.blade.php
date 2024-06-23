@extends('layouts.header-admin')
@section('content')
<style>
.table>:not(caption)>*>* {
    color: #1ca3d0;
}
</style>
<table class="table">
    <thead>
      <tr>
        <th scope="col">№</th>
        <th scope="col">Email</th>
        <th scope="col">ФИО</th>
        <th scope="col">Номер телефона</th>
        <th scope="col">Сообщение</th>
        <th scope="col">Менеджер</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($apples as $a)
    <tr>
        <th scope="row">{{$a->id}}</th>
        <td>{{$a->email}}</td>
        <td>{{$a->name}}</td>
        <td>{{$a->numberPhone}}</td>
        <td>{{$a->appl}}</td>
        <td>
            @if (!isset($a->user_id))
                <button type="button" class="accept" data-id={{$a->id}}>Принять</button>
            @else
               {{$a->user->name}}
            @endif
        </td>
      </tr>
    @endforeach 
    </tbody>
    </table>
    <script>
        document.body.addEventListener('click', (oe) => {
            if(!oe.target.closest('.accept')) return;
            const btn = oe.target.closest('.accept');
            axios.get('accept-apple/' + btn.dataset.id)
            .then(res => {
                alert(res.data.massage);
                btn.parentNode.innerText = res.data.name;
                console.log('res', res)
            })
        })
    </script>
@endsection