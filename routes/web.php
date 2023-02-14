<?php
use illuminate\http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Blogs;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//home page
Route::get('/', function () {
    return view('Blog',
    [ 
        'heading' => 'Latest Blog' ,
        'listing' => blogs::all()
                    
            
    ]
    );
});

//single blog
Route ::get('/Blog/{listing}' , function(Blogs $listing){
    return view('singleBlog' , [
        'singleBlog' => $listing
    ]);
});   