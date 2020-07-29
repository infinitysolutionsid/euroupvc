<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\admindb;
use App\blogdb;
use App\gallerydb;
use App\productsdb;

class DashboardController extends Controller
{
    public function loginshow()
    {
        return view('auth.login');
    }
    public function loginproses(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $check = DB::table('admindbs')
            ->where('username', $username)
            ->first();

        if ($check && HASH::check($password, $check->password) && $check->status == 'active') {
            $check->isLogin = 'login';
            $check = (array)$check;
            session($check);

            return redirect('/admin/dashboard');
        }
        return back()->with('gagal', 'Coba periksa kembali otoritas keanggotaanmu atau pertanyakan kepada kepala admin.');
        // dd($request->all());
    }

    // Content GET of Dashboard
    public function index()
    {
        return view('dashboard.index');
    }
    // User Section
    public function showuser()
    {
        $getuser = DB::table('admindbs')
            ->orderBy('admindbs.name', 'ASC')
            ->select('admindbs.*')
            ->get();
        return view('dashboard.user.show', ['getuser' => $getuser]);
    }
    public function prosesaaddnew(Request $request)
    {
        $user = new admindb();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = HASH::make($request->password);
        $user->unpassword = $request->verpassword;
        $user->role = $request->role;
        $user->status = 'active';
        $user->birthdate = '-';
        $user->save();

        return back()->with('selamat', 'Data user berhasil kamu tambahkan. Dan sudah bisa digunakan.');
    }
    public function trashuser($id, Request $request)
    {
        $user = admindb::find($id);
        // dd($user);
        if ($user) {
            if ($user->delete()) {
                DB::statement('ALTER TABLE admindbs AUTO_INCREMENT = ' . (count(admindb::all()) + 1) . ';');

                return back()->with('selamat', 'Data user berhasil dihapus.');
            }
        }
    }
    public function updateuser($id, Request $request)
    {
        $user = admindb::find($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = HASH::make($request->password);
        $user->unpassword = $request->verpassword;
        $user->role = $request->role;
        $user->save();

        return back()->with('selamat', 'Data user berhasil diupdate');
    }
    // End User section

    public function showblog()
    {
        return view('dashboard.blog.show');
    }
    public function showgallery()
    {
        return view('dashboard.gallery.show');
    }

    // PRODUCTS SECTION
    public function showproducts()
    {
        $products = DB::table('productsdbs')
            ->orderBy('productsdbs.product_name', 'ASC')
            ->select('productsdbs.*')
            ->get();
        return view('dashboard.products.show', ['products' => $products]);
    }
    public function prosesaddproduct(Request $request)
    {
        $product = new productsdb();
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->save();

        return back()->with('selamat', 'Berhasil menambahkan data produk baru anda.');
    }
    public function trashproduct($id)
    {
        $product = productsdb::find($id);
        // dd($user);
        if ($product) {
            if ($product->delete()) {
                DB::statement('ALTER TABLE productsdbs AUTO_INCREMENT = ' . (count(productsdb::all()) + 1) . ';');

                return back()->with('selamat', 'Data Produk berhasil dihapus.');
            }
        }
    }
    public function updateproduct($id, Request $request)
    {
        $product = productsdb::find($id);
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->save();

        return back()->with('selamat', 'Data produk anda berhasil diupdate.');
    }
}
