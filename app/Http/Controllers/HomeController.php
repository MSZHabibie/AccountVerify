<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $account = DB::table('pendaftarans')->paginate(10);

        return view('index', ['account' => $account]);
    }

    public function cari(Request $request)
    {
        $cari = $request->get('cari');
        $account = DB::table('pendaftarans')
            ->where('keyword', 'like', '%' . $cari . '%')
            ->paginate();

        return view('index', ['account' => $account]);
    }
}
