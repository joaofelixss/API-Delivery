@extends('layouts.main')

@section('title', 'Delivery')

@section('content')

<div id="search-container" class="col-md-12 lojas">
    <h1>Busque por uma Loja</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Lojas Abertas hoje</h2>
    <div id="cards-container" class="row">
 
    </div>
</div>

@endsection