<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SearchHistory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class QurAnController extends Controller
{
    public function index()
    {
        $data_surah = DB::table('tbl_master_surah')->get();
        return view('layouts.QurAn.index', ['data_surah' => $data_surah]);
    }

    public function search_page()
    {
        $history_data = DB::table('search_histories')
            ->where('id_users', '=', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->limit('10')->get();
        return view('layouts.QurAn.demo', ['history_data' => $history_data]);
    }

    public function search_result(Request $request)
    {
        $data = DB::table('tbl_master_surah')->select('*', 'tbl_ayat.nomor as nomor_ayat')
            ->join('tbl_ayat', 'tbl_ayat.surah', '=', 'tbl_master_surah.nomor')
            ->where('tbl_ayat.ar', 'LIKE', "%$request->keyword%")
            ->orWhere('tbl_ayat.ar', 'LIKE', "$request->keyword%")
            ->orWhere('tbl_ayat.ar', 'LIKE', "%$request->keyword")
            ->orWhere('tbl_ayat.tr', 'LIKE', "%$request->keyword%")
            ->orWhere('tbl_ayat.tr', 'LIKE', "$request->keyword%")
            ->orWhere('tbl_ayat.tr', 'LIKE', "%$request->keyword")
            ->orWhere('tbl_ayat.idn', 'LIKE', "%$request->keyword%")
            // ->orWhere('tbl_master_surah.nama_latin', 'LIKE', "%$request->keyword%")
            ->orderBy('tbl_master_surah.nomor', 'DESC')->get();
        // $data = DB::table('tbl_ayat')
        //     ->where('tbl_ayat.ar', 'LIKE', "%$request->keyword%")
        //     ->orWhere('tbl_ayat.tr', 'LIKE', "%$request->keyword%")->get();
        // dd($data->toArray());
        SearchHistory::create([
            'id_users'      => Auth::user()->id,
            'keyword'       => $request->keyword,
            'created_at'    => date('Y-m-d h:i:s'),
            'updated_at'    => date('Y-m-d h:i:s')
        ]);
        return view('layouts.QurAn.search_result', ['result' => $data, 'keywords' => $request->keyword]);
    }
    public function history_result($ids)
    {
        $data = DB::table('tbl_master_surah')->select('*', 'tbl_ayat.nomor as nomor_ayat')
            ->join('tbl_ayat', 'tbl_ayat.surah', '=', 'tbl_master_surah.nomor')
            ->where('tbl_ayat.ar', 'LIKE', "%$ids%")
            ->orWhere('tbl_ayat.ar', 'LIKE', "$ids%")
            ->orWhere('tbl_ayat.ar', 'LIKE', "%$ids")
            ->orWhere('tbl_ayat.tr', 'LIKE', "%$ids%")
            ->orWhere('tbl_ayat.tr', 'LIKE', "$ids%")
            ->orWhere('tbl_ayat.tr', 'LIKE', "%$ids")
            ->orWhere('tbl_ayat.idn', 'LIKE', "%$ids%")
            // ->orWhere('tbl_master_surah.nama_latin', 'LIKE', "%$request->keyword%")
            ->orderBy('tbl_master_surah.nomor', 'DESC')->get();
        // $data = DB::table('tbl_ayat')
        //     ->where('tbl_ayat.ar', 'LIKE', "%$request->keyword%")
        //     ->orWhere('tbl_ayat.tr', 'LIKE', "%$request->keyword%")->get();
        // dd($data->toArray());
        SearchHistory::create([
            'id_users'      => Auth::user()->id,
            'keyword'       => $ids,
            'created_at'    => date('Y-m-d h:i:s'),
            'updated_at'    => date('Y-m-d h:i:s')
        ]);
        return view('layouts.QurAn.search_result', ['result' => $data, 'keywords' => $ids]);
    }
}
