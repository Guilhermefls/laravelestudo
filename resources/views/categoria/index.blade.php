@extends('layouts.app')

@section('conteudo')

<section class="d-flex justify-content-center">
    @foreach ($categorias as $categoria)
        <p>{{$categoria->name}} {{$categoria->id}}</p>
    @endforeach
</section>

@endsection