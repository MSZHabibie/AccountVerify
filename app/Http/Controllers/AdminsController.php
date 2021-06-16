<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citizens = DB::table('citizens')
                ->where('golongan', '=', "belum diverifikasi")
                ->get();
        return view('admin.verifikasi', compact('citizens'));
    }

    public function login(){
        return view('admin.login');
    }

    public function check(Request $request){
        $request->validate([
            'email'=> 'required|exists:admins,email',
            'password'=> 'required|min:5',
        ],[
            'email.exists'=>'Email tidak ditemukan'
        ]);

        $creds = $request->only('email','password');
        if( Auth::guard('admin')->attempt($creds) ){
            return redirect('/admin/home');
        }else{
            return redirect('/admin/masuk')->with('fail','Inputan Anda Salah!');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin/masuk');
    }
}
