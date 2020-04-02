@extends('layouts.externo')
@section('title', 'Quadro de Avisos da Empresa')
@section('sidebar')
    @parent
    <p>^^Bara superior adiacionada do layout pai/m&atilde;e^^</p><br>
@endsection
@section('content')
    <p>Quadro de Avisos da Empresa</p>
    <br>
    <p>Oi&aacute; {{$nome}}! Veja abaixo os avisos de hoje:</p>
    @if($mostrar)
        Mostrnado avisos
    @else
        Escondendo avisos
    @endif
    @foreach ($avisos as $aviso)
        <p>Aviso {{ $aviso['id']}}: {{ $aviso['texto']}}</p>
    @endforeach

<?php
    // foreach ($aviso as $aviso){
    //     echo "<p>Aviso{$aviso['id']}:{ $aviso['texto']}</p>";
    // 
    // }
?>
@endsection

