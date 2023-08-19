@extends('layouts.main')

@section('title', 'Delivery')

@section('content')

<div id="search-container" class="col-md-12 d-flex align-items-center justify-content-center lojas">
    <div class="text-center">
        <h1>Busque por uma Loja</h1>
        <form action="/" method="GET" class="d-flex justify-content-center">
            <div class="input-group mb-3 col-md-12">
                <input type="text" id="search" name="search" class="form-control col-12" placeholder="Procurar...">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="events-container" class="col-md-12 text-center">
    <h2>Lojas Abertas hoje</h2>
    <div id="cards-container" class="row">
        <!-- Conteúdo do container de cards aqui -->
    </div>
</div>

@endsection
