<?php

namespace App\Http\Controllers;

use App\Library;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('library');
    }

    public function download($id)
    {
        if (Auth::check()) {
            $song = Library::where('user_id',Auth::user()->id)->where('product_id',$id)->first();
            if ($song) {
                return Storage::download($song->product->filename);
            }
        } else {
            abort(404);
        }
    }
}
