@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Entrar</h2>
    <form action="{{route('admin.login')}}" method="post">
        {{ csrf_field()  }}
        @include('admin.login._form')
        <div>
        <div align="left"><a href="#"><p>Redefinir a Senha</p></a></div>
        <div align="right"><button  class="btn">Entrar</button></div>
        
        </div>
    </form>
</div>



@endsection