@extends('layouts.app')

@section('content')

<h1>Fale Conosco</h1>
<p>Tire suas dúvidas ou mande sugestões</p>
<form class="container">

    <div class="form-group">
    <label for="exampleFormControlInput1">Nome Completo</label>
    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Fulano de Tal">
    </div>

    <div class="form-group">
    <label for="exampleFormControlInput1">E-mail</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="form-group">
    <label for="exampleFormControlTextarea1">Comentários</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
</form>


@endsection