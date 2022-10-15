@extends('layouts.frontend')

@section('title')
    Biblioteca - Autores
@endsection

@section('content')
    <div class="container my-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="">
                    <h4>Cliente</h4>
                </div>
                <div class="">
                    <a class="nav-link" id="add" href="{{ url('add-cliente') }}">
                        <i class="bi bi-folder-plus"></i>
                        Adicionar Cliente
                    </a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th scope="col" class="col-md-1">Id</th>
                            <th scope="col" class="col-md-2">Nome</th>
                            <th scope="col" class="col-md-3">Email</th>
                            <th scope="col" class="col-md-3">Telefone</th>
                            <th scope="col" class="col-md-2">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cliente as $item)
                            <tr>
                                <td scope="row">{{ $item->id }}</td>
                                <td>{{ $item->nome }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->telefone }}</td>
                                <td>
                                    <a href="{{ url('edit-cliente/'.$item->id) }}" class="btn btn-primary" id="btn"><i class="bi bi-pencil"></i></a>
                                    <a href="{{ url('delete-cliente/'.$item->id) }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection
