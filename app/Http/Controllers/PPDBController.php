<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use App\Models\Identity;
use App\Models\Jurusan;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Social;
use App\Models\Teacher;
use App\Models\infoppdb;
use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PPDBController extends Controller
{
    public function index(){
        // $identity = Identity::all();
        // dd($identity);
        return view('layout.website', [
            'identity' => Identity::all(),
            'homepage' => Homepage::all(),
            'jurusan' => Jurusan::all(),
            'menu' => Menu::all(),
            'post' => Post::all(),
            'social' => Social::all(),
            'teacher' => Teacher::all(),
        ]);
    }
    public function index1(){
        $data = DB::table('users')
        ->leftJoin('infosekolah', 'users.id', '=', 'infosekolah.users')
        ->get();
        return view('layout.website',compact('data'));
    }
    public function daftar(){
            return view('ppdb.index');

    }
    public function loginsiswa(){
        return view('layouts.loginsiswa');
    }
    public function store(Request $request){
        $this->validate($request,[
            'nama'=>'required',
            'nisn'=>'required',
            'email'=>'required',
        ]);
        $data['name'] = $request->nama;
        $data['nisn'] = $request->nisn;
        $data['email'] = $request->email;
        $data['role']= '2';
        $data['password'] = bcrypt($request->nisn);
        $data['id_registrasi'] = 'DAF-'.date('YmdHis');


        //cek photo
        $file = $request->file('photo');
        if($file){
            $file->move('uploads', $file->getClientOriginalName());
            $data['photo'] = 'uploads/'.$file->getClientOriginalName();
        }
        User::insert($data);

        return redirect('/')->with('success','pendaftaran berhasil dilakukan silakan login untuk melengkapi formulir');
    }
}
