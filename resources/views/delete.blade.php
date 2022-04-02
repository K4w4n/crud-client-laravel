@extends('layout', ['pageNumber'=>4])

@section('titulo','Delete Client')

@section('head')
    <link href="{{asset('styles/basic.css')}}" rel="stylesheet">
@endsection

@section('content')
    <main class="clients-list">
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('script/delete.js')}}"></script>
@endsection