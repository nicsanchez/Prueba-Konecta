<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Requests\UserLoginRequest;
use App\User;
use Illuminate\Support\Facades\DB;

class UserLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()){
            return Redirect::to("/client");
        }
        else{
            return view("templates.login");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserLoginRequest $request)
    {
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            /*
            $id=Auth::user()->id;
            $user=User::find($id);
            $user->fill($request->all());
            $user->save();*/
            if (Auth::user()->rol==0) {
                return Redirect::to("/user");
            } else {
                return Redirect::to("/client");
            }

        }
        else{
            Session::flash('mensaje_error','Usuario o contraseña incorrectos');
            return Redirect::to("/login");
        };
    }

    public function logout(){
        Auth::logout();
        return Redirect::to("/login");
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
    }
}
