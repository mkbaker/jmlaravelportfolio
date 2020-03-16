<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Artwork;

class ArtworkController extends Controller
{
    //render all artworks
    public function index()
    {
        $artworks = Artwork::get();
        return view('artwork.index', ['artworks' => $artworks]);
    }

    //display a single artwork by id
    public function show(Artwork $id)
    {
        return view('artwork.show', ['artwork' => $id]);
    }

    public function medium($medium)
    {
        $artworks = Artwork::get()->where('medium', $medium);
        return view('artwork.medium', ['artworks' => $artworks]);
    }
}
