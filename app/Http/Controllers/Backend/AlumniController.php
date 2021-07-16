<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kampus;

class AlumniController extends Controller
{
    public function getKampus()
    {
        $post = Kampus::all();
        return view('backend.alumni.index', compact('post'));
    }

    public function getAlumni($id)
    {
        $kampus = Kampus::find($id);
        return view('backend.alumni.home', compact('kampus'));
    }
}
