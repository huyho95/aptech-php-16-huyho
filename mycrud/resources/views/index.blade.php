@extends('layout')

@section('content')

@if ($message = Session::get('success'))
    <div class ="alert alert-success">
        <p>{{ $message }}</p>    
    </div>
@endif

<div class='row'>
    <div class = 'col-md-6'>
        <h1>CRUD Laravel 5.5</h1>
    </div>
    <div class ='col-md-6  text-right'>
        <a href="{{action('UserController@create')}}" class = 'btn btn-primary'>Add Data</a>
    </div>
</div>
<table class='table table-bordered'>
    <thead>
        <tr>
            <th class='text-center'>No</th>
            <th class='text-center'>Name</th>
            <th class='text-center'>Email</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td class='text-center'>{{ $user -> id}}</td>
            <td class='text-center'>{{ $user -> name}}</td>
            <td class='text-center'>{{ $user -> email}}</td>
            
            <td>
                <form action="{{ action('UserController@destroy',$user->id)}}" method ='post' class='text-center'>
                    <a href="{{ action('UserController@show',$user->id)}}" class='btn btn-info'>Show</a>
                    <a href="{{ action('UserController@edit',$user->id)}}" class='btn btn-warning'>Edit</a>
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type='submit' class='btn btn-danger'>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection