@extends('layouts.app')
<style>
    .img_bienvenido{
        width: 1000px;
        height: 500px;
        display:block;
        margin:auto; 
  }
</style>
@section('content')
<div>
    <h1 class="tittle">Bienvenidos a Diagnostic</h1>
    <img src="{{ URL::asset('img/imagenbienvenido.jpg') }}" class="img_bienvenido">
</div>
@endsection
