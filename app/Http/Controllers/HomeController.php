<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artwork;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store()
    {
        Artwork::create($this->validateArtwork());

        return redirect('/home');
    }

    protected function validateArtwork()
    {
        return request()->validate([
            'title' => 'required',
            'url' => 'required',
            'medium' => 'required',
            'statement' => 'required'    
        ]);
    }
}
