<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();

        //dd($users);

        return view('users.index',compact('users'));
    }

    public function show($id)
    {
        if (!$user = User::find($id))
            return redirect()->route('users.index');//também poderia ter sido utilizado "->back()"
        //dd('users.show', $id);
        return view('users.show',compact('user'));
    }

    public function  create()
    {
        return view('users.create');
    }

    public  function store(StoreUpdateUserFormRequest $request)
    {   
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        User::create($data);

        return redirect()->route("users.index");

        // User::create($request->all()) Outra alternativa, porém, precisamos criptografar a senha

        // $user = new User;
        // $user->name =$request->name; ALTERNATIVA
        // $user->email =$request->email;
        // $user->password =$request->password;
        // $user->save();
    }
}
