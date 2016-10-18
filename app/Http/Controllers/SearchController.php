<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Euser;
use DB;
use App\Juser;
use App\Seinfo;
use App\User;
use App\Pinfo;
use App\Post;
use App\Awinfo;
use App\Vrinfo;
use App\Cinfo;
use App\Jinfo;
use App\Langinfo;
use App\Compinfo;
use App\Rpinfo;

class SearchController extends Controller
{
    public function search(Request $request)
{
//dd($request);
 $text = $request->input('search_text');
 $region = $request->input('region_name');
 
	//dd($text);
    // Gets the query string from our form submission 
   // $query = Request::input('search');

    // Returns an array of articles that have the query string located somewhere within 
    // our articles titles. Paginates them so we can break up lots of search results.
    $articles = DB::table('pinfos')
                                   paginate(10);
                                  // ->orWhere('users.username', 'LIKE', '%' . $text . '%')->paginate(10);
                                   
       // dd($articles);
    // returns a view and passes the view the list of articles and the original query.
    return view('Design.search',compact('articles','text','region'));
 }
}
