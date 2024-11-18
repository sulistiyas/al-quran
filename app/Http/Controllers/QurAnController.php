<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QurAnController extends Controller
{
    public function index()
    {
        $data_surah = DB::table('tbl_master_surah')->get();
        return view('layouts.QurAn.index', ['data_surah' => $data_surah]);
    }

    public function search_page()
    {
        return view('layouts.QurAn.search_index');
    }

    public function search_result(Request $request)
    {
        $data = DB::table('tbl_master_surah')->select('*', 'tbl_ayat.nomor as nomor_ayat')
            ->join('tbl_ayat', 'tbl_ayat.surah', '=', 'tbl_master_surah.nomor')
            ->where('tbl_ayat.ar', 'LIKE', "%$request->keyword%")
            ->orWhere('tbl_ayat.tr', 'LIKE', "%$request->keyword%")
            ->orWhere('tbl_ayat.idn', 'LIKE', "%$request->keyword%")->get();
        // $data = DB::table('tbl_ayat')
        //     ->where('tbl_ayat.ar', 'LIKE', "%$request->keyword%")
        //     ->orWhere('tbl_ayat.tr', 'LIKE', "%$request->keyword%")->get();
        // dd($data->toArray());
        return view('layouts.QurAn.search_result', ['result' => $data, 'keywords' => $request->keyword]);
    }
}
