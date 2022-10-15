@extends('layouts.frontend')

@section('title')
    Concessionaria - Carro
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Editar Livro</h4>
        </div>
        <div class="card-body">

            <form action="{{ url('updade-carro/'.$carro->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row mx-5 ">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6 mb-3">
                            <select class="form-select">
                                <option value="">{{ $carro->cliente->nome }}</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <a class="nav-link" id="add" href="{{ url('add-cliente') }}">
                                <i class="bi bi-folder-plus"></i>
                                Adicionar Cliente
                            </a>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 mb-3">
                            <label for="">Modelo</label>
                            <input type="text" value="{{ $carro->modelo }}" class="form-control" name="modelo">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 mb-3">
                            <label for="">Ano</label>
                            <input type="text" value="{{ $carro->ano }}" class="form-control" name="ano">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 mb-3">
                            <label for="">Chassi</label>
                            <input type="text" value="{{ $carro->chassi }}" class="form-control" name="chassi">
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
