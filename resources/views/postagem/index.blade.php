@extends('layouts.app')

@section('conteudo')

<h1>Palestras</h1>

<section class="d-flex justify-content-center">
    @foreach ($postagemPost as $postagem)
        <p>{{$postagem->title}} {{$postagem->id}}</p>
    @endforeach
</section>
<h1>categoria</h1>

<section class="d-flex justify-content-center">
    @foreach ($postagemCat as $categoria)
        <p>{{$categoria->title}} {{$categoria->id}}</p>
    @endforeach
</section>

<h1>Manual</h1>

<section class="d-flex justify-content-center">
    @foreach ($postagemManual as $manual)
        <p>{{$manual->title}} {{$manual->id}}</p>
    @endforeach
</section>

<h1>Permissao</h1>

<section class="d-flex justify-content-center">
    @foreach ($postagemPerm as $permissao)
        <p>{{$permissao->title}} {{$permissao->id}}</p>
    @endforeach
</section>

<h1>Role</h1>

<section class="d-flex justify-content-center">
    @foreach ($postagemRole as $role)
        <p>{{$role->title}} {{$role->id}}</p>
    @endforeach
</section>

<h1>User</h1>

<section class="d-flex justify-content-center">
    @foreach ($postagemUser as $user)
        <p>{{$user->title}} {{$user->id}}</p>
    @endforeach
</section>


@endsection
