<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogdb;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function index()
    {
        $blog = blogdb::orderBy('created_at', 'DESC')->limit(3)->get();
        return view('homepage.index', ['blog' => $blog]);
    }
    public function blogview($judul)
    {
        $blog = DB::table('blogdbs')
            ->where('blogdbs.judul', '=', $judul)
            ->select('blogdbs.*')
            ->first();
        // dd($blog);
        $blogcollection = blogdb::orderBy('created_at', 'ASC')->limit(3)->get();
        $kategori = DB::table('productsdbs')
            ->orderBy('productsdbs.product_name', 'ASC')
            ->select('productsdbs.*')
            ->get();
        return view('homepage.blog', ['blog' => $blog, 'blogcollection' => $blogcollection, 'kategori' => $kategori]);
    }
}
