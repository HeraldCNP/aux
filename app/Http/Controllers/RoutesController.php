<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
class RoutesController extends Controller
{
    public function practicas()
    {
        return view('pages.practicas');
    }

    public function videos()
    {
        $videos = Video::all();

        return view('pages.videos', compact('videos'));
    }
}
