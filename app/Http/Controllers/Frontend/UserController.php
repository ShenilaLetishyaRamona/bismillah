<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kampus;
use App\Models\Slider;
use App\Models\User;
use App\Models\Alumni;
use Auth;
use Validator;
use Hash;
use Session;

class UserController extends Controller
{
    public function index()
    {
        $post = Kampus::all();
        $slider = Slider::all();
        return view('frontend.beranda', compact('post', 'slider'));
    }

    public function alumni()
    {
        $post = Kampus::all();
        $slider = Slider::all();
        return view('frontend.all_alumni', compact('post', 'slider'));
    }

    public function getAlumni($id)
    {
        $kampus = Kampus::find($id);
        $post = DB::table('kampus')->join('alumni', 'kampus.id', '=', 'alumni.kampus_id')
                    ->where('kampus_id', $id)
                    ->get();
        return view('frontend.alumni', compact('post', 'kampus'));
    }

    public function detailAlumni($id)
    {
        $post = DB::table('alumni')
                    ->where('id', $id)
                    ->get();
        return view('frontend.d_alumni', compact('post'));
    }

    public function search(Request $request, $id)
    {
        $kampus = Kampus::find($id);
        $keyword = $request->search;
        $post = Alumni::where('nama_lengkap', 'like', "%" . $keyword . "%")->paginate(5);
        return view('frontend.alumni', compact('post', 'kampus'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    

    public function detailProfile($id)
    {   
        $post = DB::table('users')
                    ->where('id', $id)
                    ->get();
        return view('frontend.profile', compact('post'));
    }

    public function editProfile($id)
    {
        $post = DB::table('users')
                    ->where('id', $id)
                    ->get();
        return view('frontend.edit_profile', compact('post'));
    }

    public function storeProfile(Request $request, $id)
    {
        $rules = [
            'name'                  => 'required|min:3|max:35',
            'username'              => 'required|unique:users,username',
        ];
  
        $messages = [
            'name.required'         => 'Nama Lengkap wajib diisi',
            'name.min'              => 'Nama lengkap minimal 3 karakter',
            'name.max'              => 'Nama lengkap maksimal 35 karakter',
            'username.required'     => 'Username wajib diisi',
            'username.unique'       => 'Username Telah Ada',
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'email.unique'          => 'Email sudah terdaftar',
            'password.confirmed'    => 'Password tidak sama dengan konfirmasi password'
        ];
  
        $validator = Validator::make($request->all(), $rules, $messages);

        $name = $request->name;
        $username = $request->username;
        $email = strtolower($request->email);
        $role = ('user');

        $update = [
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'role' => $role,
        ];

        $post = User::where('id', $id)->update($update);

        
        return redirect()->route('detail.profile', $id)
                         ->with('success', 'Data Berhasil di Perbarui');
    }
}
