<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artwork;

class AdminController extends Controller
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

        return redirect('/admin');
    }

    protected function validateArtwork()
    {
        return request()->validate([
            'title' => 'required',
            'url' => 'required',
            'medium' => 'required',
            'statement' => 'nullable'    
        ]);
    }

    public function destroy() 
    {

    }
}
