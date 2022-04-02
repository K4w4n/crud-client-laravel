@extends('layout',['pageNumber'=>3])

@section('titulo','Update Client')

@section('head')
    <link href="{{asset('styles/basic.css')}}" rel="stylesheet">
@endsection

@section('content')
    <form action="" method="post" class="formulario container-fluid">
        <h1 class="text-center">Atualizar dados do cliente</h1>
        <div class="input-group mb-3">
            <input type="number" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" id="id">
            <div class="input-group-append">
                <button class="btn btn-primary seach-btn" type="button" id="button-addon2">Seach user id</button>
            </div>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" placeholder="Elon Musk">
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="telefone" class="form-control" id="telefone" placeholder="(11) 9000-0000">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>

        <div class="mb-3">
            <input type="submit" value="Atualizar" class="submit">
        </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('script/update.js')}}"></script>
    </form>
@endsection