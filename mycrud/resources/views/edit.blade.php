@extends('layout')
@section('content')
<div class = "row">
    <div class = "col-md-6 offset-md-3">
        @if($message = Session::get('danger'))
            <div class = "alert alert-danger">
                <strong>{{$message}}</strong>
            </div>
        @endif
        @foreach($users as $user)
            <form action = "{{action('UserController@update', $user->id)}}" method='POST'>
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class='form-group'>
                    <label>Name</label>
                    <input type='text' name='name' class='form-control' value='{{ $user->name}}'>
                 </div>
                <div class='form-group'>
                    <label>Email</label>
                    <textarea  name='email' class='form-control'>{{ $user->name }}</textarea>
                </div>
                <div class='form-group'>
                    <label>Password</label>
                    <input type='text' name='password' class='form-control' value='{{$users[0]->password}}'>
                </div>                   
                <button type='submit' class='btn btn-warning'>Update</button>
                <a href="{{ action('UserController@index')}}" class='btn btn-default'>Back</a>
            </form>
        @endforeach
    </div>
</div>
@endsection