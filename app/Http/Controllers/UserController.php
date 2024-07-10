<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('users.index');
    }

    public function create(){
        return view('users.create');
    }

    public function store(request $request){
        return $request->all();
    }

    public function show(string $id){
        $data['id'] = $id;
        return view('users.show', $data);
    }

    public function edit(string $id){
        $data['id'] = $id;
        return view('users.edit', $data);
    }

    public function update(request $request){
        return $request->all();
    }

   public function destroy(string $id){
       return 'delete data with th id of' . $id;
    }

}
