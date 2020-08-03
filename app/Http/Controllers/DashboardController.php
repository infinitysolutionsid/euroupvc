<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\admindb;
use App\blogdb;
use App\email;
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

    // BLOG SECTION
    public function showblog()
    {
        $product = DB::table('productsdbs')
            ->orderBy('productsdbs.product_name', 'ASC')
            ->select('productsdbs.*')
            ->get();
        $blog = DB::table('blogdbs')
            ->orderby('blogdbs.created_at', 'DESC')
            ->select('blogdbs.*')
            ->get();
        return view('dashboard.blog.show', ['product' => $product, 'blog' => $blog]);
    }
    public function prosesaddblog(Request $request)
    {
        $blog = new blogdb();
        $blog->judul = $request->judul;
        $blog->kategori_produk = $request->kategori_produk;
        $blog->isi = $request->isi;
        if (!$request->hasFile('coverimg')) {
            $blog->save();
        } else {
            $lamp = $request->file('coverimg');
            $filename = time() . '.' . $lamp->getClientOriginalExtension();
            $request->file('coverimg')->move('media/blog/', $filename);
            $blog->coverimg = $filename;
            $blog->save();
        }
        return back()->with('selamat', 'Projek blog kamu sudah berhasil kamu tambahkan');
    }
    public function trashblog($id, Request $request)
    {
        $blog = blogdb::find($id);
        // dd($user);
        if ($blog) {
            if ($blog->delete()) {
                DB::statement('ALTER TABLE blogdbs AUTO_INCREMENT = ' . (count(blogdb::all()) + 1) . ';');

                return back()->with('selamat', 'Data Blog berhasil dihapus.');
            }
        }
    }
    public function updateblog($id, Request $request)
    {
        $blog = blogdb::find($id);
        $blog->judul = $request->judul;
        $blog->isi = $request->isi;
        $blog->save();

        return back()->with('selamat', 'Berhasil update data blog');
    }
    // END BLOG SECTION

    // GALLERY SECTION
    public function showgallery()
    {
        $product = DB::table('productsdbs')
            ->orderBy('productsdbs.product_name', 'ASC')
            ->select('productsdbs.*')
            ->get();
        $gal = DB::table('gallerydbs')
            ->orderBy('gallerydbs.created_at', 'DESC')
            ->select('gallerydbs.*')
            ->get();
        $galp = DB::table('gallerydbs')
            ->join('productsdbs', 'gallerydbs.product_id', '=', 'productsdbs.id')
            ->select('gallerydbs.*', 'productsdbs.product_name', 'productsdbs.description')
            ->orderBy('gallerydbs.created_at', 'DESC')
            ->get();
        return view('dashboard.gallery.show', ['product' => $product, 'gal' => $gal, 'galp' => $galp]);
        // dd($galp);
    }
    public function prosesaddgallery(Request $request)
    {
        $gal = new gallerydb();
        $gal->judul_foto = $request->judul_foto;
        $gal->product_id = $request->product_id;
        if (!$request->hasFile('img')) {
            $gal->save();
        } else {
            $lamp = $request->file('img');
            $filename = time() . '.' . $lamp->getClientOriginalExtension();
            $request->file('img')->move('media/gallery/', $filename);
            $gal->img = $filename;
            $gal->save();
        }
        return back()->with('selamat', 'Foto kamu berhasil ditambahkan didalam galeri!');
    }
    public function trashgallery($id)
    {
        $gal = gallerydb::find($id);
        // dd($user);
        if ($gal) {
            if ($gal->delete()) {
                DB::statement('ALTER TABLE gallerydbs AUTO_INCREMENT = ' . (count(gallerydb::all()) + 1) . ';');

                return back()->with('selamat', 'Data foto dalam galeri ini berhasil dihapus.');
            }
        }
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
    // PRODUCT END SECTION

    // EMAILS SECTION
    public function showemails()
    {
        $email = DB::table('emails')
            ->orderBy('emails.created_at', 'DESC')
            ->select('emails.*')
            ->get();
        return view('dashboard.emails.show', ['email' => $email]);
    }

    // Email kirim
    public function kirimpesan(Request $request)
    {
        // dd($request->all());
        $name = $request->name;
        $email = new email();
        $email->name = $request->name;
        $email->email = $request->email;
        $email->nohp = $request->nohp;
        $email->message = $request->message;
        $email->type = $request->type;
        // dd($email);
        $email->save();
        // return back()->with('great', 'Halo ' . $name . ', kami telah menerima pesan kamu. Biasanya kami membalas dalam waktu 3x24 jam, dan kami akan segera membalas ke email anda maupun melalui nomor telepon yang sudah kamu input. Terima kasih ya.');
        return view('receivedemails', ['name' => $name]);
    }
    public function changestatus($id, Request $request)
    {
        $email = email::find($id);
        $email->status = 'read';
        $email->save();
        return back()->with('selamat', 'Email tersebut sudah berhasil diubah ke status sudah dibaca.');
    }
}
