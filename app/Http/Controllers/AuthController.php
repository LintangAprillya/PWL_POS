<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use \Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\validator;

class AuthController extends Controller
{
    public function index()
    {

        //kita ambil data user lalu simpan pada variabel $user
        $user = Auth::user();

        //kondisi jika user nya ada
        if ($user) {
            //jika user nya memiliki level admin
            if ($user->level_id == '1') {
                return redirect()->intended('admin');
            }
            //jika user nya memiliki level manager
            if ($user->level_id == '2') {
                return redirect()->intended('manager');
            }
        }
        return view('login');
    }
    public function proses_login(Request $request)
    {
        //kita buat validasi pada saat tomcol login di klik
        // validasi nya username & password wajib di isi
        $request->validate([
            'username' => 'required',
            'password' => 'required',

        ]);

        //ambil data request username & password saja
        $credential = $request->only('username', 'password');
        // cek jika data username dan password valid (sesuai) dengan data
        if (Auth::attempt($credential)) {
            // kalau berhasil simpan data user ya di variabel $user
            $user = Auth::user();

            //cek lagi jika level user admin maka arahkan ke halaman admi

            if ($user->level_id == '1') {
                //dd($user->level_id)
                return redirect()->intended('admin');
            }
            // tapi jika level usernya user biasa maka arahkan ke halamn user
            else if ($user->level_id == '2') {
                return redirect()->intended('manager');
            }
            //jika belumm ada role maka ke halaman/
            return redirect()->intended('/');
        }


        //jika ga ada data user yang valid maka kembalikan lagi ke halaman login
        //pastikan kirim pesan error juga kalau login gagal ya
        return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'pastikan kembali username dan password yang dimasukkan sudah benar']);


    }

    public function register()
    {
        //tampilka vie register
        return view('register');
    }

    //aksi form register
    public function proses_register(Request $request)
    {
        //kita buat validasi nih buat proses register
        //validasinya yaitu semua field wajib di isi
        //validasi username itu harus unique atau tidak boleh duplicate username ya
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'username' => 'required|unique:m_users',
            'password' => 'required'
        ]);

        //kalau gagal kembali ke halaman register dengan munculkan pesan eror
        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }
        //kalau berhasil isi level & hash passwordnya ya biar secure
        $request['level_id'] = '2';
        $request['password'] = Hash::make($request->password);

        //masukkan semua data pada request ke table user
        UserModel::create($request->all());

        //kalo  berhasil arahkan ke halaman login 
        return redirect()->route('login');
    }
    public function logout(Request $request)
    {
        //logout itu harus menghapus session nya
        $request->session()->flush();

        //jalankan juga fungsi logout pada auth
        Auth::logout();
        //kembali kan ke halaman login
        return Redirect('login');
    }

}