@extends('layouts.frontend')

@section('title')
    Biblioteca
@endsection

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <h2 class="">Biblioteca</h2>
            <p></p>
        </div>
        <div class="d-flex justify-content-center my-3">
            
            <a href="{{ url('autores') }}" class="btn btn-secondary mx-3">Ver Autores</a>
            <a href="{{ url('livros') }}" class="btn btn-secondary mx-3">Ver Livros</a>
        </div>
        
    </div>
@endsection
