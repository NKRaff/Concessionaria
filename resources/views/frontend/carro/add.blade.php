@extends('layouts.frontend')

@section('title')
    Concessionaria - Carros
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Adicionar Carro</h4>
        </div>
        <div class="card-body">

            <form action="{{ url('insert-carro') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mx-5 ">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6 mb-3">
                            <select required class="form-select" name="cliente_id">
                                <option value="">Selecione um Autor</option>
                                @foreach($cliente as $item)
                                    <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                @endforeach
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
                            <input type="text" class="form-control" name="modelo">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 mb-3">
                            <label for="">Ano</label>
                            <input type="number" class="form-control" name="ano">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 mb-3">
                            <label for="">Chassi</label>
                            <input type="text" class="form-control" name="chassi">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary">Adicionar</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
