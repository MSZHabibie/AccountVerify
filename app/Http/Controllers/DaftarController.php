<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Checkbox;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Auth;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkbox = Checkbox::all();
        return view('daftar/index', compact('checkbox'));
    }
    
    public function index2()
    {
        $checkbox = Checkbox::all();
        return view('admin/daftar', compact('checkbox'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $checkbox = Checkbox::all();
        return view('daftar/index', compact('checkbox'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pendaftaran = new Pendaftaran();
        // $pendaftaran->category = $request->category;
        // $pendaftaran->checkbox = $request->checkbox;
        $pendaftaran->user = Auth::guard('web')->user()->last_name;
        $arraytostring = implode(',', $request->input('checkbox'));
        $pendaftaran['checkbox'] = $arraytostring;
        $pendaftaran->file = $request->file;
        $pendaftaran->keyword = $request->keyword;
        $pendaftaran->account = $request->account;
        $pendaftaran->type = $request->type;
        $pendaftaran->verifikasi = 'unverified';
        
        $pendaftaran->save();

        return redirect('user/daftar')->with('status', 'Akun Memasuki Tahap Evaluasi Berkas');
    }

    public function store2(Request $request)
    {
        $pendaftaran = new Pendaftaran();
        // $pendaftaran->category = $request->category;
        // $pendaftaran->checkbox = $request->checkbox;
        $pendaftaran->user = Auth::guard('web')->user()->last_name;
        $arraytostring = implode(',', $request->input('checkbox'));
        $pendaftaran['checkbox'] = $arraytostring;
        $pendaftaran->file = $request->file;
        $pendaftaran->keyword = $request->keyword;
        $pendaftaran->account = $request->account;
        $pendaftaran->type = $request->type;
        $pendaftaran->verifikasi = 'verified';
    
        $pendaftaran->save();

        return redirect('admin/daftar')->with('status', 'Akun berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $checkbox = Checkbox::where('category', $id)->get();
        return view('daftar/pendaftaran', compact('checkbox'));
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
