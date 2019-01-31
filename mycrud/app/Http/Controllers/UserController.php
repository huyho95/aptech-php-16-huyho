<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select('select * from users');
        return view('index', [ 'users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $name = $request ->get('name');
        $email = $request ->get('email');
        $password = $request ->get('password');
        $users = DB::insert('insert into users(name,email,password) value(?,?,?)',[$name,$email,$password]);
        if($users){
            $red = redirect('users/index') -> with('success','Data has been added');
        }else{
            $red = redirect('users/create')->with('danger','Input data failed, please try again');
        }
        return $red;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $users=DB::select('select * from users where id=?',[$id]);
        return view('show',['users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $users = DB::select('select * from users where id=?',[$id]);
        return view('edit',['users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $name = $request ->get('name');
        $email = $request ->get('email');
        $password = $request ->get('password');
        $users = DB::update('update users set name=?, email=?, password=? where id=?',[$name,$email,$password,$id]);
        if($users){
            $red = redirect('users/index')->with('success','Data has been updated');
        }else{
            $red = redirect('users/edit'.$id) ->with('danger','Error update please try again');
        }
        return $red;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $users = DB::delete('delete from users where id= ?',[$id]);
        $red = redirect('users/index');
        return $red;
    }
}
