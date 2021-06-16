<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Checkbox;
use App\Models\Pendaftaran;

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
        // $pendaftaran->nama_user = $request->nama_user;
        // $pendaftaran->category = $request->category;
        // $pendaftaran->checkbox = $request->checkbox;
        $arraytostring = implode(',', $request->input('checkbox'));
        $pendaftaran['checkbox'] = $arraytostring;
        $pendaftaran->file = $request->file;
        $pendaftaran->keyword = $request->keyword;
        $pendaftaran->account = $request->account;
        $pendaftaran->type = $request->type;

        $pendaftaran->save();

        // Pendaftaran::create([
        //     'nama_user' => $request->nama_user,
        //     'category' => $request->category,
        //     'checkbox' => $request->checkbox,
        //     'keyword' => $request->keyword,
        //     'account' => $request->account,
        //     'type' => $request->type
        // ]);

        // Pendaftaran::create($request->all());
        return redirect('/daftar');
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
