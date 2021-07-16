<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kampus;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        $post = Kampus::all();
        return view('frontend.beranda', compact('post'));
    }

    public function getAlumni($id)
    {
        $kampus = Kampus::find($id);
        $post = DB::table('kampus')->join('alumni', 'kampus.id', '=', 'alumni.kampus_id')
                    ->where('kampus_id', $id)
                    ->get();
        return view('frontend.alumni', compact('post', 'kampus'));
    }
}
