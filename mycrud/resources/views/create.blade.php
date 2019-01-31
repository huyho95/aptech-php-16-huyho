@extends('layout')
@section('content')
<div class='row'>
    <div class='col-md-6 offset-md-3'>
        @if($message = Session::get('danger'))
            <div class='alert alert-danger'>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <form action="{{ action('UserController@store')}}" method='post'>
        {{csrf_field()}}
            <div class='form-group'>
                <label>Name</label>
                <input class='form-control' type='text' name='name' placeholder='Ho Khanh Huy'/>
            </div>
            <div class='form-group'>
                <label>Email</label>
                <textarea class='form-control' name='email' placeholder='@gmail.com'></textarea>
            </div>
            <div>
                <label>Password</label>
                <input class='form-control' type='password' name='password' placeholder=''>
            </div>
            <button class='btn btn-primary' type='submit'>Submit</button>
        </form>    
    </div>
</div>
@endsection