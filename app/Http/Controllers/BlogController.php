<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogController extends Controller
{
    //Show all blogs
    public function index()
    {
        return view('blogs.index',
        [ 
            'listing' => blogs::latest()->filter(request(['tag']))->get()
        ]);
    } 
    //Show a single blog
    public function show( blogs $listing)
    {
        return view('blogs.show' , [
            'singleBlog' => $listing
        ]);
    }
}
