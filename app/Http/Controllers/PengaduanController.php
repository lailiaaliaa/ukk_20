<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class PengaduanController extends Controller
{
    public function daftar_pengaduan()
    {
        $data = Pengaduan::all();
    $data = Pengaduan::where('status', null)->get();
        return view('masyarakat.datapengaduan', compact('data'));
    }
    public function daftar_tanggapan()
    {
        $data = Pengaduan::all();
        $data = Pengaduan::where('status', 'Pengaduan Diterima')->orwhere('status', 'Pengaduan Ditolak')->get();
        return view('masyarakat.datatanggapan', compact('data'));
    }
    public function insertpengaduan(Request $request)
    {  if ($request->hasFile('foto')) {
        $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
        $data = Pengaduan::create([
            'tanggal' => $request->tanggal,
            'nik' => $request->nik,
            'telp' => $request->telp,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $request->file('foto')->getClientOriginalName(),
        ]);
        $data->foto = $request->file('foto')->getClientOriginalName();
        $data->save();
    }

    return redirect()->route('daftar_pengaduan')->with('message', 'Data berhasil ditambahkan');
}
public function daftar_pengaduan_petugas()
{
    $data = Pengaduan::all();

    $data = Pengaduan::where('status', null)->get();
    return view('petugas.daftarpengaduan', compact('data'));
}
public function updatestatus($status, $id)
{
    $data = Pengaduan::where('id', $id)->first();
    if ($status == 'terima') {
        $data->update(['status' => 'Pengaduan Diterima']);

    } elseif ($status == 'tolak') {
        $data->update(['status' => 'Pengaduan Ditolak']);
    } else {
        return redirect()->back();
    }

    return redirect('daftar_pengaduan_petugas');
}
public function tanggapan()
{
    $data = Pengaduan::all();
    $data = Pengaduan::where('status', 'Pengaduan Diterima')->orwhere('status', 'Pengaduan Ditolak')->get();
    return view('petugas.tanggap', compact('data'));
}
public function daftar_pengaduan_admin()
{
    $data = Pengaduan::all();

    $data = Pengaduan::where('status', null)->get();
    return view('admin.daftarpengaduan', compact('data'));
}
public function updatestatusa($status, $id)
{
    $data = Pengaduan::where('id', $id)->first();
    if ($status == 'terima') {
        $data->update(['status' => 'Pengaduan Diterima']);

    } elseif ($status == 'tolak') {
        $data->update(['status' => 'Pengaduan Ditolak']);
    } else {
        return redirect()->back();
    }

    return redirect('daftar_pengaduan_admin');
}
public function tanggapan_admin()
{
    $data = Pengaduan::all();
    $data = Pengaduan::where('status', 'Pengaduan Diterima')->orwhere('status', 'Pengaduan Ditolak')->get();
    return view('admin.tanggap', compact('data'));
}
public function showChangePasswordGet() {
    return view('masyarakat.change-password');
}

public function changePasswordPost(Request $request) {
    if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
        // The passwords matches
        return redirect()->back()->with("error","Kata sandi Anda saat ini tidak cocok dengan kata sandi.");
    }

    if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
        // Current password and new password same
        return redirect()->back()->with("error","Kata Sandi Baru tidak boleh sama dengan kata sandi Anda saat ini.");
    }

    $validatedData = $request->validate([
        'current-password' => 'required',
        'new-password' => 'required|string|min:8|confirmed',
    ]);

    $user = Auth::user();
    $user->password = bcrypt($request->get('new-password'));
    $user->save();

    return redirect()->back()->with("success","Password Berhasil Diubah!");
}


}
