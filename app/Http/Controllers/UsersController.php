<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function login(){
        
        return view('regis_login/login');
    }

    public function regis(){
        return view('regis_login/registrasi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('regis_login/registrasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate request
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required|min:5',
            'password2'=> 'required|min:5|same:password',
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->foto = $request->foto;

        $query = $user->save();
        
        if($query){
            return redirect('user/login');
        }
        else{
            return redirect("user/registrasi")->with('fail', 'Gagal melakukan registrasi!');
        }
    }

    public function check(Request $request){
        $request->validate([
            'email'=> 'required|exists:users,email',
            'password'=> 'required|min:5',
        ],[
            'email.exists'=>'Email tidak ditemukan'
        ]);

        $creds = $request->only('email','password');
        if( Auth::guard('web')->attempt($creds) ){
            return redirect('/user/home');

        }else{
            return redirect('/user/login')->with('fail','Inputan Anda Salah!');
        }
    }


    public function logout(){
        Auth::guard('web')->logout();
        return redirect('/user/login');
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
