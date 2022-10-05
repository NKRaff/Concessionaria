@extends('layouts.frontend')

@section('title')
    Biblioteca - Livros
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Adicionar Livro</h4>
        </div>
        <div class="card-body">

            <form action="{{ url('insert-livro') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mx-5 ">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6 mb-3">
                            <select required class="form-select" name="autor_id">
                                <option value="">Selecione um Autor</option>
                                @foreach($autor as $item)
                                    <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-2">
                            <a class="nav-link" id="add" href="{{ url('add-autor') }}">
                                <i class="bi bi-folder-plus"></i>
                                Adicionar Autor
                            </a>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 mb-3">
                            <label for="">Titulo</label>
                            <input type="text" class="form-control" name="titulo">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 mb-3">
                            <label for="">Sinopse</label>
                            <textarea rows="6" class="form-control" name="sinopse"></textarea>
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
