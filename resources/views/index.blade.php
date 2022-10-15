@extends('layouts.frontend')

@section('title')
    Concessionaria
@endsection

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <h2 class="">Concessionaria</h2>
            <p></p>
        </div>
        <div class="d-flex justify-content-center my-3">
            
            <a href="{{ url('clientes') }}" class="btn btn-secondary mx-3">Ver Clientes</a>
            <a href="{{ url('carros') }}" class="btn btn-secondary mx-3">Ver Carros</a>
        </div>
        
    </div>
@endsection
