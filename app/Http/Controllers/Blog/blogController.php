<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class blogController extends Controller
{
    public function index(Request $request){
        return view('Pages.blog.index');
    }
}
