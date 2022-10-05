@extends('layouts.frontend')

@section('title')
    Biblioteca - Autores
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Adicionar Autor</h4>
        </div>
        <div class="card-body">

            <form action="{{ url('insert-autor') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mx-5 ">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 mb-3">
                            <label for="">Nome</label>
                            <input type="text" class="form-control" name="nome">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 mb-3">
                            <label for="">Biografia</label>
                            <textarea rows="6" class="form-control" name="biografia"></textarea>
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
