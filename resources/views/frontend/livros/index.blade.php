@extends('layouts.frontend')

@section('title')
    Biblioteca - Livros
@endsection

@section('content')
    <div class="container my-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="">
                    <h4>Livros</h4>
                </div>
                <div class="">
                    <a class="nav-link" id="add" href="{{ url('add-livros') }}">
                        <i class="bi bi-folder-plus"></i>
                        Adicionar Livro
                    </a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th scope="col" class="col-md-1">Id</th>
                            <th scope="col" class="col-md-5">Titulo</th>
                            <th scope="col" class="col-md-4">Nome do Autor</th>
                            <th scope="col" class="col-md-2">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($livro as $item)
                            <tr>
                                <td scope="row">{{ $item->id }}</td>
                                <td>{{ $item->titulo }}</td>
                                <td>{{ $item->autor->nome ?? 'null' }}</td>
                                <td>
                                    <a href="{{ url('edit-livro/'.$item->id) }}" class="btn btn-primary" id="btn"><i class="bi bi-pencil"></i></a>
                                    <a href="{{ url('delete-livro/'.$item->id) }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection
