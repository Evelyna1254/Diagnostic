
@extends('layouts.app')

@section('content')

<style>
    :root{
    --azul:#B3ECE7;
    --azulOscuro:#66C8BF;
    --Gris:#F4F4F4;
    --blanco:#ffffff;
    --negro: #000000; 
    --fuente:'Quicksand', sans-serif;
}
html{
    box-sizing: border-box;
}

*,*::after, *::before{
    box-sizing: inherit;
}

.contenedor{
    margin: 0 auto;
    max-width: 1200px;
    width: 95%;
}

.imagen-formulario{
    background-image: url('../img/iniciosecion.jpg');
    background-position: center center;
    background-size: cover;
    height: 200px;
    flex: 0 0 calc(60%);
    position: relative;
    
}
.imagen-formulario::before{
   content: '';
   position: absolute;
   top: 0;
   bottom: 0;
   left: 0;
   right: 0;
   background: linear-gradient(to right,rgba(141,169,196,.5), rgba(19, 64, 116, .5) );
   
}

@media(min-width:768px){
    .imagen-formulario{
        height: auto;
        background-position: right;
    }

}
@media(min-width:1200px){
    .imagen-formulario{
        background-position: center;
    }
}

@media(min-width:768px){
    .contenedor-formulario{
        display: flex;
    }
}

.formulario{
    padding: 50px;
    background-color: var(--azul);
}
.texto-formulario h2, .input label, .password-olvidada a, .texto-formulario p,.registrar a{
    color: var(--negro);
}
.texto-formulario h2{
    font-size: 40px;
    text-align: center;
}
.texto-formulario p{
    font-size: 22px;
    text-align: center;
}
.input label{
    display: block;
    font-size: 22px;
    font-weight: bold;
    margin: 20px 0;
}
.password-olvidada a{
    display: inline-block;
    margin-top: 20px;
    font-size: 22px;
}
.registrar{
    display: inline-block;
    margin-top: 20px;
    font-size: 22px;
}
.input input{
    width: 100%;
    padding: 10px 16px;
    border-radius: 5px;
    outline: none;
}
.input button{
    width: 100%;
    padding: 10px 16px;
    border-radius: 5px;
    outline: none;
}
.input button[type="submit"]{
    background-color: var(--azulGris);
    color: var(--negro);
    font-size: 22px;
    font-weight: bold;
    border: none;
    margin-top: 20px;
    transition: background-color .3s ease-in-out;
}
.input button[type="submit"]:hover{
  
    cursor: pointer;
    background-color: var(--azulOscuro);
}
</style>

<div class="contenedor-formulario contenedor">
        <div class="imagen-formulario">
            
        </div>

        <form class="formulario" method="POST" action="{{ route('login') }}">
        @csrf
            <div class="texto-formulario">
                <a href="inicio.html"><img src="{{ URL::asset('img/logosinfondo.png') }}" alt="logo"></a>
                <p>Inicia sesión con tu cuenta</p>
            </div>
            <div class="input">
                <label for="email">Correo</label>
                <input placeholder="Ingresa tu correo" type="text" id="email" name="email">
            </div>
            <div class="input">
                <label for="password">Contraseña</label>
                <input placeholder="Ingresa tu contraseña" type="password" id="password" name="password">
            </div>
            <div class="input">
                <button type="submit"> {{ __('Iniciar sesión') }} </button>
            </div>
            <!-- <div class="password-olvidada">
                <a href="contrasena.html">¿Olvidaste tu contraseña?</a>
            </div> -->
            <!-- <div class="registrar">
                <a href="register" >Regitrate!</a>
            </div> -->
        </form>
    </div>
    @endsection 