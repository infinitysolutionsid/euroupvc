<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogdb;
use App\gallerydb;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function index()
    {
        $blog = blogdb::orderBy('created_at', 'DESC')->limit(3)->get();
        $galp = DB::table('gallerydbs')
            ->where('gallerydbs.status', '=', 'approved')
            ->join('productsdbs', 'gallerydbs.product_id', '=', 'productsdbs.id')
            ->select('gallerydbs.*', 'productsdbs.*')
            ->limit(8)
            ->orderBy('gallerydbs.created_at', 'DESC')
            ->get();
        $product = DB::table('productsdbs')
            ->orderBy('productsdbs.product_name', 'ASC')
            ->select('productsdbs.*')
            ->get();
        $partner = DB::table('partners')
            ->orderBy('partners.id', 'ASC')
            ->select('partners.*')
            ->get();
        $color = DB::table('colorproducts')
            ->orderBy('colorproducts.color_name', 'ASC')
            ->select('colorproducts.*')
            ->get();
        return view('homepage.index', ['blog' => $blog, 'galp' => $galp, 'product' => $product, 'partner' => $partner, 'color' => $color]);
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
    public function projectsview()
    {
        $blog = blogdb::orderBy('created_at', 'DESC')->paginate(9);
        return view('homepage.projects', ['blog' => $blog]);
    }
    public function galleryview()
    {
        $gallery = DB::table('gallerydbs')
            ->where('gallerydbs.status', '=', 'approved')
            ->orderBy('gallerydbs.created_at', 'DESC')
            ->get();
        return view('homepage.gallery.index', ['gallery' => $gallery]);
        // dd($gallery);
    }
    public function colorproduct($id)
    {
        $gallery = DB::table('colorproducts')
            ->join('gallerydbs', 'colorproducts.id', '=', 'gallerydbs.color_id')
            ->where('colorproducts.id', '=', $id)
            ->select('colorproducts.color_name', 'colorproducts.id', 'gallerydbs.*')
            ->orderBy('gallerydbs.created_at', 'DESC')
            ->get();
        $color = DB::table('colorproducts')
            ->where('colorproducts.id', '=', $id)
            ->first();
        // dd($gallery);
        return view('homepage.gallery.color', ['gallery' => $gallery, 'color' => $color]);
    }
}
