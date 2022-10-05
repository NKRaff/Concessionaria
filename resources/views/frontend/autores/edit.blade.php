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

            <form action="{{ url('updade-autor/'.$autor->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mx-5 ">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 mb-3">
                            <label for="">Nome</label>
                            <input type="text" value="{{ $autor->nome }}" class="form-control" name="nome">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 mb-3">
                            <label for="">Biografia</label>
                            <textarea rows="6" class="form-control" name="biografia">{{ $autor->biografia }}</textarea>
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
