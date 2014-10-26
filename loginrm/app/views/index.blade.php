@extends('layout')
@section('content')
<div class="page-header" style="border: 1px solid #0077b3; text-align: center">
    <h1>Usuarios</h1>
</p></div>
<div class="panel panel-default">
    <div class="panel-body">
        <a href="{{ action('UsersController@create') }}" class="btn btn-info">Add New User</a>
    </div>
</div>
@if ($users->isEmpty())
No hay usuarios! :(
@else
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Nombre de usuario</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ action('UsersController@edit', $user->id) }}" class="btn btn-default">Editar</a>

                <a href="{{ action('UsersController@delete', $user->id) }}" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@stop