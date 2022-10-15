@extends('layouts.frontend')

@section('title')
    Biblioteca - Autores
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Editar Autor</h4>
        </div>
        <div class="card-body">

            <form action="{{ url('updade-cliente/'.$cliente->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mx-5 ">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 mb-3">
                            <label for="">Nome</label>
                            <input type="text" value="{{ $cliente->nome }}" class="form-control" name="nome">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 mb-3">
                            <label for="">Email</label>
                            <input type="text" value="{{ $cliente->email }}" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 mb-3">
                            <label for="">Telefone</label>
                            <input type="text" value="{{ $cliente->telefone }}" class="form-control" name="telefone">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
