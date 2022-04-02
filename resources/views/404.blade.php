@extends('layout',['notMenu' => true])

@section('titulo','404 - Not Found')

@section('head')
    <link href="{{asset('styles/basic.css')}}" rel="stylesheet">
@endsection

@section('content')
    <main class="container flex-row d-flex justify-content-center align-items-center">
        <div class="container-fluid">
            <p class="fs-1 text-center"> 404 </p>
            <p class="fs-1 text-center"> Not Found </p>
        </div>
    </main>
@endsection