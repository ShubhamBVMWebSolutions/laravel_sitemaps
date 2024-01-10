<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Http\Response;
class SiteMapController extends Controller
{
    public function index(): Response
    {
        $post = post::latest()->get();
        
        return response()->view('sitemap',[
            'post' => $post,
        ])->header('Content-Type','text/xml');
    }
}
