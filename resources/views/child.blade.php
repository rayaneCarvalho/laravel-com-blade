@extends('layouts.app')

@section('title', 'Laravel Blade Título')

@section('sidebar')
    @parent {{-- mantém a primeira seção e adiciona abaixo a nova sessão, sem o @parent uma substitui a outra --}}
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>Meu nome é {{$nome}}</p>
    <p>This is my body content. {{date('M/Y')}}</p>

    @include ('components.alert', ['some' => 'meus dados'])

    @include ('chat')
@endsection

<script>
    var meusDadosJS = @json($meusDados)
</script>

