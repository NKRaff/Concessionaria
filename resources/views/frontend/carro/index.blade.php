@extends('layouts.frontend')

@section('title')
    Concessionaria - Livros
@endsection

@section('content')
    <div class="container my-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="">
                    <h4>Carros</h4>
                </div>
                <div class="">
                    <a class="nav-link" id="add" href="{{ url('add-carros') }}">
                        <i class="bi bi-folder-plus"></i>
                        Adicionar Carro
                    </a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th scope="col" class="col-md-1">Id</th>
                            <th scope="col" class="col-md-2">Dono</th>
                            <th scope="col" class="col-md-2">Modelo</th>
                            <th scope="col" class="col-md-2">Ano</th>
                            <th scope="col" class="col-md-3">Chassi</th>
                            <th scope="col" class="col-md-2">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carro as $item)
                            <tr>
                                <td scope="row">{{ $item->id }}</td>
                                <td>{{ $item->cliente->nome ?? 'null' }}</td>
                                <td>{{ $item->modelo }}</td>
                                <td>{{ $item->ano }}</td>
                                <td>{{ $item->chassi }}</td>
                                <td>
                                    <a href="{{ url('edit-carro/'.$item->id) }}" class="btn btn-primary" id="btn"><i class="bi bi-pencil"></i></a>
                                    <a href="{{ url('delete-carro/'.$item->id) }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection
