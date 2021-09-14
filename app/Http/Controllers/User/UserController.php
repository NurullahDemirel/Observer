<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserRegsiterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function store(UserRegsiterRequest $request)
    {
        $request->validated();
        $arry=['name'=> $request->name,'email'=>$request->email,'password'=>Hash::make($request->password)];
        User::create($arry);
        return redirect()->route('home')->with('success','you have created user successfully ');
    }

    public function all()
    {
        $items=User::all();
        return view('user.all',compact('items'));
    }

    public function edit($id)
    {
        $user=User::find($id);
        return view('user.edit',compact('user'));
    }
    public function update($id,Request $request){
        $user=User::find($id)->update($request->only('name','email'));
        return redirect()->route('user.all')->with('success','you have updated user successfully ');
    }
}
