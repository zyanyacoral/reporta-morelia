@extends('layout')
@section('content')
<div class="page-header" style="border: 1px solid #0077b3;">
    <h1>Agregar usuario nuevo </h1>
</div>
@if ( $errors->count() > 0 )
<div class="alert alert-danger">
    <ul>
        @foreach( $errors->all() as $message )</p>
        <li>{{ $message }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ action('UsersController@handleCreate') }}" method="post" role="form" >
    <div class="form-group">
        <label for="first_name">Nombre</label>
        <input type="text" class="form-control" name="name" />
    </div>
    <div class="form-group">
        <label for="last_name">Nombre de usuario</label><br />
        <input type="text" class="form-control" name="username" />
    </div>
    <div class="form-group">
        <label for="email">Email</label><br />
        <input type="email" class="form-control" name="email" />
    </div>
        <div class="form-group">
        <label for="email">password</label><br />
        <input type="password" class="form-control" name="password" />
    </div>
    <input type="submit" value="Add" class="btn btn-primary" />
    <a href="{{ action('UsersController@index') }}" class="btn btn-link">Cancelar</a>
</form>
@stop