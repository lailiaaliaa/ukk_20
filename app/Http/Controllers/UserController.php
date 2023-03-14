<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class UserController extends Controller
{
    public function registeradmin()
    {
        return view('regisadmin');
    }
    public function registermasyarakat()
    {
        return view('regismasyarakat');
    }
    public function simpanadmin(Request $request)
    {
        $data = User::Create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'level' => 'admin',
            'remember_token' => Str::random(60),
        ]);
        return redirect('/');
    }
    public function simpanmasyarakat(Request $request)
    {
        $data = User::Create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'level' => 'masyarakat',
            'remember_token' => Str::random(60),
        ]);
        return redirect('/');
    }
    public function loginproses(Request $request)
    {

        // dd('ak');
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'level' => 'admin'])) {
            return redirect('/indexadmin');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'level' => 'masyarakat'])) {
            return redirect('/indexmasyarakat');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/indexpetugas');
        }
        else{
            return redirect()->back()->with('password','password salah');
        }
    }

    public function indexadmin()
    {
        $belum = Pengaduan::where('status', null)->get()->count();
        $ditolak  = Pengaduan::where('status','Pengaduan Ditolak')->get()->count();
        $diterima = Pengaduan::where('status', 'Pengaduan Diterima')->get()->count();
        return view('admin.index', compact('belum','ditolak','diterima'));
    }
    public function indexpetugas()
    {
        $belum = Pengaduan::where('status', null)->get()->count();
        $ditolak  = Pengaduan::where('status','Pengaduan Ditolak')->get()->count();
        $diterima = Pengaduan::where('status', 'Pengaduan Diterima')->get()->count();
        return view('petugas.index', compact('belum','ditolak','diterima'));
    }

    public function indexmasyarakat()
    {
        return view('masyarakat.index');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function exportPDF() {

        $data = Pengaduan::all();

        $pdf = PDF::loadView('welcome', ['data' => $data]);

        return $pdf->download('Laporan.pdf');
        return $pdf->setPaper('a4', 'landscape')->setOptions(['defaultFont' => 'serif'])->stream();

      }
}
